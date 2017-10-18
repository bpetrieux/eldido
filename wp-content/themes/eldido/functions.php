<?php // BLANK Theme Custom Functions

if (!defined('ABSPATH')) exit;

// define max content width
function shapeSpace_content_width() {

	$GLOBALS['content_width'] = 1140;

}
add_action('after_setup_theme', 'shapeSpace_content_width', 0);
// header menu
function header_nav()
{
	wp_nav_menu(
		array(
			'theme_location'  => 'header-menu',
			'menu'            => '',
			'container'       => 'div',
			'container_class' => 'header_nav',
			'container_id'    => '',
			'menu_class'      => 'header_nav',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul>%3$s</ul>',
			'depth'           => 0,
			'walker'          => ''
			)
		);
}
// header menu
function mobile_nav()
{
	wp_nav_menu(
		array(
			'theme_location'  => 'mobile-menu',
			'menu'            => '',
			'container'       => 'div',
			'container_class' => 'header_mobile',
			'container_id'    => '',
			'menu_class'      => 'header_mobile',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul>%3$s</ul>',
			'depth'           => 0,
			'walker'          => ''
			)
		);
}

// Register HTML5 Blank Navigation
function register_menu()
{
register_nav_menus(array( // Using array to specify more menus if needed
'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
'sidebar-menu' => __('Sidebar Menu', 'html5blank'),
'footer-menu' => __('Footer Menu', 'html5blank'), // Sidebar Navigation
'mobile-menu' => __('Mobile Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
));
}

add_action('init', 'register_menu'); // Add Menu

// set up theme support
function shapeSpace_setup() {
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'shapeSpace_setup');

// frontend script & style
function add_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'mincss', get_template_directory_uri() . '/dest/style.css', array(), '1.1', 'all');


//wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array('jquery'), null, true); 
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true); //true == footer
wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
//Add a Google font
//wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Ubuntu:100,300,400,500|Montserrat:700'); 

function typekit_custom_js()
{ ?>
<script>
  (function(d) {
    var config = {
      kitId: 'bra2wnv',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<?php }

add_action('wp_head', 'typekit_custom_js');



//Call script on specific page
// if ( is_page( array( 312,2,'home',18 )) ) {
//     wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/lib/owl.js', array ( 'jquery' ), 1.1, true); //true == footer
// }

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// register widgets
function shapeSpace_widgets_init() {

	$widget_args_1 = array(

		'name'          => __('Widgets Sidebar', 'blank-theme'),
		'id'            => 'widgets_sidebar',
		'class'         => '',
		'description'   => __('Widgets added here are displayed in the sidebar', 'blank-theme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'

		);

	register_sidebar($widget_args_1);

}
add_action('widgets_init', 'shapeSpace_widgets_init');



//add custom group acf
add_action( 'init', 'create_posttype' );
function create_posttype() {
	register_post_type( 'custom_group',
		array(
			'labels' => array(
				'name' => __( 'Customs' ),
				'singular_name' => __( 'Custom' )
				),
			'public' => true,
			'has_archive' => true,
			'capability_type' => 'post',
			'rewrite' => array('slug' => 'conferenciers'),
			'supports' => array(
				'title',
				'thumbnail'
				),
			)
		);
}

//call acf 
if( function_exists('acf_add_options_page') ) {
	$parent = acf_add_options_page(array(
		'menu_title'    => 'Site Settings',
		'menu_slug'     => 'site-general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
		));
}
//To rewrite SEO. id
//EX echo format_uri(get_field('content_3_title'));  --> id
function format_uri( $string, $separator = '-' )
{
	$accents_regex = '~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i';
	$special_cases = array( "&" => "and");
	$string = mb_strtolower( trim( $string ), 'UTF-8' );
	$string = str_replace( array_keys($special_cases), array_values( $special_cases), $string );
	$string = preg_replace( $accents_regex, '$1', htmlentities( $string, ENT_QUOTES, 'UTF-8' ) );
	$string = preg_replace("/[^a-z0-9]/u", "$separator", $string);
	$string = preg_replace("/-rsquo/u", "", $string);
	$string = preg_replace("/[$separator]+/u", "$separator", $string);
	return $string;
}
add_action( 'format_uri', 'format_uri' );


function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

include("acf/custom-posts.php");

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

//Remove WordPress wp-embed js script
function my_deregister_scripts(){
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

function init_analytics() {
	$analytics = '<script type="text/javascript">var _gaq = _gaq || [];_gaq.push([\'_setAccount\', \'UA-XXXXXXXX-X\']);_gaq.push([\'_trackPageview\']);(function() {var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;ga.src = (\'https:\' == document.location.protocol ? \'https://\' : \'http://\') + \'stats.g.doubleclick.net/dc.js\';var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);})();</script>';
	echo "\n" . $analytics;
}

if (!is_admin()) {
//load front-end options here.
	if(!current_user_can( 'manage_options' ) ) {
		add_action('wp_footer', 'init_analytics', 35);
	}
}
//Simple switch language
function language_selector_mobile(){
	$languages = icl_get_languages('skip_missing=-1');
	$current_languages = ICL_LANGUAGE_CODE;
	if(1 < count($languages)){
		echo '<ul class="header_mobile_language-list">';

		foreach($languages as $l){
			if(!$l['active']) $langs[] = '<li><a href="'.$l['url'].'">'.$l['language_code'].'</a></li>';
		}
		echo join(' ', $langs);
		echo '</ul>';
	}
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
	$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
	return $html;
}

//Acf Google map
function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyCBfhvy7Jn35KY-OdOJWlCfla4Er_fJ5KE');
}
add_action('acf/init', 'my_acf_init');