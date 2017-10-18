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
 ?>