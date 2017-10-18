<!DOCTYPE html><html <?php language_attributes(); ?>>
<head>
	<?php include('inc/seo_header.php'); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="header">
		<div class="container">
		<a class="header_logo" href="<?php echo home_url(); ?>">
			<?php 
			$main_logo = get_field('main_logo','option');
			if( !empty($main_logo) ): ?>
			<img src="<?php echo $main_logo['url']; ?>" alt="<?php echo $main_logo['alt']; ?>" />
		<?php endif; ?>
		</a>
		<?php header_nav(); ?>
		<?php mobile_nav(); ?>
		<div id="hamburger">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
</header>
