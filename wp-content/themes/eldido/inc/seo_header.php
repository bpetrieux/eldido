	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo get_template_directory_uri(); ?>/img/bpfavicon.png" rel="shortcut icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<?php 
	$meta_title = get_field( "meta_title" );
	$meta_description = get_field( "meta_description" );
	$meta_keyword = get_field( "meta_keyword" );
	$main_logo = get_field( "main_logo","option" );
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php if( $meta_title ) { ?>
	<title><?php wp_title(''); ?><?php echo $meta_title; ?></title>
	<meta name="title" content="<?php echo $meta_title; ?>">
	<meta name="twitter:title" content="<?php echo $meta_title; ?>">
	<meta property="og:title" content="<?php echo $meta_title; ?>" />
	<?php } else { ?>
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	<meta name="title" content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?>">
	<meta name="twitter:title" content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?>">
	<meta property="og:title" content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?>">
	<?php } ?>
	<?php if( $meta_description ) { ?>
	<meta name="description" content="<?php echo $meta_description; ?>">
	<meta name="twitter:description" content="<?php echo $meta_description; ?>">
	<meta property="og:description" content="<?php echo $meta_description; ?>" />
	<?php } else { ?>
	<meta name="description" content="<?php the_field('tagline_traduction', 'option'); ?>">
	<meta name="twitter:description" content="<?php the_field('tagline_traduction', 'option'); ?>">
	<meta property="og:description" content="<?php the_field('tagline_traduction', 'option'); ?>">
	<?php } ?>
	<?php 
	if( $meta_keyword ) { ?>
	<meta name="keyword" content="<?php echo $meta_keyword; ?>">
	<?php } else { ?>
	<meta name="keyword" content="<?php the_field('tagline_traduction', 'option'); ?>">
	<?php } ?>
	<?php if ( has_post_thumbnail() ) { ?>
	<meta name="twitter:image:src" content="<?php echo get_the_post_thumbnail_url(); ?>">
	<meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>" />
	<?php } else { ?>
	<meta name="twitter:image:src" content="<?php echo $main_logo['url']; ?>">
	<meta property="og:image" content="<?php echo $main_logo['url']; ?>" />
	<?php } ?>
	<meta name="twitter:card" content="summary_large_image">	
	<meta property="og:url" content="<?php the_permalink(); ?>" />
	<meta property="og:site_name" content="<?php echo get_bloginfo(); ?>" />
	<meta property="fb:admins" content="Facebook numberic ID" />