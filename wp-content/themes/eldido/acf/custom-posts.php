<?php 
//https://support.advancedcustomfields.com/forums/topic/register-fields-via-php/
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'OptionPage',
	'title' => 'Options du site',
	'fields' => array (
		array (
			'key' => 'facebook_link',
			'label' => 'Facebook Link',
			'name' => 'facebook_link',
			'type' => 'text',
			'placeholder' => 'https://www.facebook.com/',
			'default_value' => '',
		),
		array (
			'key' => 'instagram_link',
			'label' => 'Instagram Link',
			'name' => 'instagram_link',
			'type' => 'text',
			'placeholder' => 'https://www.instagram.com/',
			'default_value' => '',
		),
		array (
			'key' => 'linkedin_link',
			'label' => 'Linkedin Link',
			'name' => 'linkedin_link',
			'type' => 'text',
			'placeholder' => 'https://www.linkedin.com/',
			'default_value' => '',
		),
		array (
			'key' => 'email_adress',
			'label' => 'Email',
			'name' => 'email_adress',
			'type' => 'text',
			'placeholder' => 'email@info.ca',
			'default_value' => '',
		),
		array (
			'key' => 'telephone_number',
			'label' => 'Telephone Number',
			'name' => 'telephone_number',
			'type' => 'text',
			'placeholder' => '514-588-9011',
			'default_value' => '514-588-9011',
		),
		array (
			'key' => 'main_logo',
			'label' => 'Main logo',
			'name' => 'main_logo',
			'type' => 'image',
			'preview_size' => 'medium',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'site-general-settings',
			),
		),
	),
));
acf_add_local_field_group(array (
	'key' => 'seo_settings',
	'title' => 'SEO settings',
	'fields' => array (
		array (
			'key' => 'field_58a35e5edd058',
			'label' => 'Meta title',
			'name' => 'meta_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array (
			'key' => 'field_58a1de58b0127',
			'label' => 'Meta description',
			'name' => 'meta_description',
			'type' => 'textarea',
			'instructions' => 'Create unique descriptions for each page, using keywords specific to that page. Keep the description text between 25 and 150 characters in length. Do not copy title tag text content as a description; this is a wasted opportunity to develop more keywords and adds no value. Make the description text unique on every page. Don’t use any of the following special characters in description text: ‘”<>{}[]()',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => 155,
			'rows' => 2,
			'new_lines' => '',
		),
		array (
			'key' => 'field_58a1ded7b0128',
			'label' => 'Meta keyword',
			'name' => 'meta_keyword',
			'type' => 'textarea',
			'instructions' => 'Choose words that may be secondary keyword terms, save the primary keywords for use in the title and description, and even include a few, commonly seen typographical errors of primary keywords, just for good measure Limit your keyword and key phrase text, separated by commas, to no more than 874 characters. Don’t repeat a keyword more than 4 times among the keywords and phrases in the list.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'new_lines' => '',
			'maxlength' => '',
			'placeholder' => '',
			'rows' => 2,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'top_level',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));
endif;
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_59e6504413f6c',
	'title' => 'Home Page',
	'fields' => array (
		array (
			'key' => 'field_59e7752020ed3',
			'label' => 'Hero',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_59e651dbefb4a',
			'label' => 'Hero Background Image',
			'name' => 'hero_background_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_59e6505befb48',
			'label' => 'Hero Logo',
			'name' => 'hero_logo',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_59e6504eefb47',
			'label' => 'Hero Title',
			'name' => 'hero_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'SI VOUS AVEZ BESOIN D’UN MÊME EXPERT POUR TOUS VOS TRAVAUX RÉSIDENTIELS, VOUS AVEZ TROUVÉ!',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59e651adefb49',
			'label' => 'Hero Subtitle',
			'name' => 'hero_subtitle',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'APPELEZ-NOUS POUR AVOIR UNE ESTIMATION GRATUITE.<br> NOUS SERONS HEUREUX DE VOUS RENCONTRER POUR DISCUTER DE VOS BESOINS.',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59e775c620ed4',
			'label' => 'Service',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 1,
		),
		array (
			'key' => 'field_59e7730bbeff7',
			'label' => 'Service icone 1',
			'name' => 'service_icone_1',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_59e772e6beff4',
			'label' => 'Service titre 1',
			'name' => 'service_titre_1',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'PATIOS SUR MESURE',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59e77331beffa',
			'label' => 'Service texte 1',
			'name' => 'service_text_1',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Notre équipe construit des patios selon vos besoins et vos exigences,et ce, dans tous les matériaux offerts sur le marché.',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59e77320beff8',
			'label' => 'Service icone 2',
			'name' => 'service_icone_2',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_59e772fbbeff5',
			'label' => 'Service titre 2',
			'name' => 'service_titre_2',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'RÉNOVATIONS RÉSIDENTIELLE',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59e77346beffb',
			'label' => 'Service texte 2',
			'name' => 'service_text_2',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Une nouvelle cuisine? Une salle de bains au goût du jour? Pourquoi pas de nouveaux escaliers? Oui, Eldido fait tout ça, et bien plus.',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59e77325beff9',
			'label' => 'Service icone 3',
			'name' => 'service_icone_3',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_59e772ffbeff6',
			'label' => 'Service titre 3',
			'name' => 'service_titre_3',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'FINITION INTÉRIEURE',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59e7734bbeffc',
			'label' => 'Service texte 3',
			'name' => 'service_text_3',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'De la peinture à la pose de moulures, en passant par l’installation de planchers et la pose de céramique, nous savons mettre la touche finale à votre demeure.',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59e775ea20ed5',
			'label' => 'Info',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 1,
		),
		array (
			'key' => 'field_59e773d3beffd',
			'label' => 'Info contenu',
			'name' => 'info_content',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '<h4>VOUS AVEZ ENVIE D’UN CHANGEMENT DE DÉCOR?</h4>
<h4>VOUS AVEZ DE PETITS OU GRANDS PROJETS DE RÉNOVATION, MAIS MANQUEZ DE TEMPS OU DE CONNAISSANCES POUR EN FAIRE UNE RÉALITÉ?</h4>
<h4>VOUS AVEZ BESOIN D’UN COUP DE MAIN POUR RAJEUNIR VOTRE COUR ARRIÈRE OU TERMINER UNE PIÈCE QUE VOUS AVEZ COMMENCÉ À RÉNOVER?</h4>

<p>Nous sommes là pour vous. Notre entreprise de rénovation, fiable et réputée pour la qualité de ses travaux, <br>saura vous accompagner du début à la fin de vos projets. Grâce à nos 10 années d’expérience et notre souci du travail bien fait, <br>nous sommes à même de répondre à tous vos besoins de rénovation.</p>',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array (
			'key' => 'field_59e78037a0583',
			'label' => 'Contact',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 1,
		),
		array (
			'key' => 'field_59e780ff83432',
			'label' => 'Contact Background Image',
			'name' => 'contact_background_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_59e78045a0584',
			'label' => 'Contact contenu',
			'name' => 'contact_content',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '<h3>CONTACT</h3>
<h5>Personne-ressource: M. Frédéric Desmarais <br>
Téléphone: 514-588-9011</h5>
<p>Appelez-nous pour avoir une estimation gratuite ou laissez nous vos coordonées à l’aide du formulaire ci-bas.</p>',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template_home_page.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_59e77684133da',
	'title' => 'Services',
	'fields' => array (
		array (
			'key' => 'field_59e776e229908',
			'label' => 'Service 1',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_59e777322990c',
			'label' => 'Service titre 1',
			'name' => 'service_titre_1',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'PATIOS SUR MESURE',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59e777512990f',
			'label' => 'Service texte 1',
			'name' => 'service_texte_1',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '<h6>Chaque cour arrière est unique. Eldido comprend bien cette réalité. C’est pour cette raison que nous accordons une importance primordiale à vos goûts, à vos besoins et à la configuration que vous souhaitez lorsque nous bâtissons le patio de vos rêves tout en respectant votre budget.</h6>',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array (
			'key' => 'field_59e7777529912',
			'label' => 'Service liste 1',
			'name' => 'service_liste_1',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_59e7778a29913',
					'label' => 'service liste items',
					'name' => 'service_liste_items',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
		array (
			'key' => 'field_59e778842d59a',
			'label' => 'Service image de fond 1',
			'name' => 'service_bg_1',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59e776ff29909',
			'label' => 'Service 2',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 1,
		),
		array (
			'key' => 'field_59e7773b2990d',
			'label' => 'Service titre 2',
			'name' => 'service_titre_2',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'PATIOS SUR MESURE',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59e7775d29910',
			'label' => 'Service texte 2',
			'name' => 'service_texte_2',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '<h6>Chaque cour arrière est unique. Eldido comprend bien cette réalité. C’est pour cette raison que nous accordons une importance primordiale à vos goûts, à vos besoins et à la configuration que vous souhaitez lorsque nous bâtissons le patio de vos rêves tout en respectant votre budget.</h6>',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array (
			'key' => 'field_59e777a429914',
			'label' => 'Service liste 2',
			'name' => 'service_liste_2',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_59e777a429915',
					'label' => 'service liste items',
					'name' => 'service_liste_items',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
		array (
			'key' => 'field_59e778952d59b',
			'label' => 'Service image de fond 2',
			'name' => 'service_bg_2',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59e7770a2990b',
			'label' => 'Service 3',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 1,
		),
		array (
			'key' => 'field_59e777402990e',
			'label' => 'Service titre 3',
			'name' => 'service_titre_3',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'FINITION INTÉRIEURE',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59e7776029911',
			'label' => 'Service texte 3',
			'name' => 'service_texte_3',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '<h6>Notre rythme de vie nous amène parfois, par manque de temps, à confier à des professionnels des tâches que nous pourrions faire nous-mêmes. Peut-être avez-vous même déjà entrepris de poser un plancher dans votre maison, pour constater que vous n’aviez pas l’aisance ou le temps nécessaires pour terminer le tout vous-même. Ou peut-être aimez-vous mieux qu’un professionnel s’occupe de ces petits travaux de finition... question de vous laisser plus de temps pour profiter de la vie avec votre famille ou de vous permettre de dormir l’esprit tranquille en sachant qu’ils ont été bien faits.</h6>
<h6>Peu importe vos besoins, Eldido se fera un plaisir d’être votre partenaire dans la réalisation de tous vos travaux de finition intérieure.</h6>',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array (
			'key' => 'field_59e777ab29916',
			'label' => 'Service liste 3',
			'name' => 'service_liste_3',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_59e777ab29917',
					'label' => 'service liste items',
					'name' => 'service_liste_items',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
		array (
			'key' => 'field_59e7789a2d59c',
			'label' => 'Service image de fond 3',
			'name' => 'service_bg_3',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template_services.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
 ?>