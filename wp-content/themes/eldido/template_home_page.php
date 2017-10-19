<?php /* Template Name: Home page */ get_header(); ?>
<?php $hero_background_image = get_field('hero_background_image'); ?>
<section class="hero" style="background-image:url(<?php echo $hero_background_image['url']; ?>)">
	<div class="container">
		<?php $hero_logo = get_field('hero_logo');
		if( !empty($hero_logo) ): ?>
		<img class="hero_logo" src="<?php echo $hero_logo['url']; ?>" alt="<?php echo $hero_logo['alt']; ?>" />
	<?php endif; ?>
	<?php 
	$hero_title = get_field( "hero_title" );
	if( $hero_title ) {  ?>
	<h1><?php echo $hero_title  ?></h1>
	<?php } ?>
	<?php 
	$hero_subtitle = get_field( "hero_subtitle" );
	if( $hero_subtitle ) {  ?>
	<h2><?php echo $hero_subtitle  ?></h2>
	<?php } ?>
	<?php 
	$telephone = get_field( "telephone_number","option" );
	if( $telephone ) {  ?>
	<div class="btn"><a href="tel:<?php echo $telephone ?>"><?php echo $telephone  ?></a></div>
	<?php } ?>
</div>
</section>
<section class="services">
	<div class="container">
		<div class="services_wrap">
			<div class="services_box">
				<?php $service_icone_1 = get_field('service_icone_1');
				if( !empty($service_icone_1) ): ?>
				<img class ="services_icone" src="<?php echo $service_icone_1['url']; ?>" alt="<?php echo $service_icone_1['alt']; ?>" />
			<?php endif; ?>
			<?php 
			$service_titre_1 = get_field( "service_titre_1" );
			if( $service_titre_1 ) {  ?>
			<h3 class="services_titre"><?php echo $service_titre_1  ?></h3>
			<?php } ?>
			<?php 
			$service_text_1 = get_field( "service_text_1" );
			if( $service_text_1 ) {  ?>
			<p class="services_text"><?php echo $service_text_1  ?></p>
			<?php } ?>
		</div>
		<div class="services_box">
			<?php $service_icone_2 = get_field('service_icone_2');
			if( !empty($service_icone_2) ): ?>
			<img class ="services_icone" src="<?php echo $service_icone_2['url']; ?>" alt="<?php echo $service_icone_2['alt']; ?>" />
		<?php endif; ?>
		<?php 
		$service_titre_2 = get_field( "service_titre_2" );
		if( $service_titre_2 ) {  ?>
		<h3 class="services_titre"><?php echo $service_titre_2  ?></h3>
		<?php } ?>
		<?php 
		$service_text_2 = get_field( "service_text_2" );
		if( $service_text_2 ) {  ?>
		<p class="services_text"><?php echo $service_text_2  ?></p>
		<?php } ?>
	</div>
	<div class="services_box">
		<?php $service_icone_3 = get_field('service_icone_3');
		if( !empty($service_icone_3) ): ?>
		<img class ="services_icone" src="<?php echo $service_icone_3['url']; ?>" alt="<?php echo $service_icone_3['alt']; ?>" />
	<?php endif; ?>
	<?php 
	$service_titre_3 = get_field( "service_titre_3" );
	if( $service_titre_3 ) {  ?>
	<h3 class="services_titre"><?php echo $service_titre_3  ?></h3>
	<?php } ?>
	<?php 
	$service_text_3 = get_field( "service_text_3" );
	if( $service_text_3 ) {  ?>
	<p class="services_text"><?php echo $service_text_3  ?></p>
	<?php } ?>
</div>
</div>
</div>
</section>
<?php 
$info_content = get_field( "info_content" );
if( $info_content ) {  ?>
<section class="info">
	<div class="container">
		<?php echo $info_content  ?>
	</div>
</section>	
<?php  } ?>
<?php $contact_background_image = get_field('contact_background_image'); ?>
<section class="contact" style="background-image:url(<?php echo $contact_background_image['url']; ?>)">
	<div class="container">
		<!-- 6LcF9TQUAAAAAC_F8co5x1984iULhp1MNpws-9R6
			6LcF9TQUAAAAALmsLAjf_RnPZ-4bX1iH_X-Vrwk-
 -->
		<?php 
		$contact_content = get_field( "contact_content" );
		if( $contact_content ) {  ?>
		<?php echo $contact_content  ?>
		<?php } ?>
		<?php echo do_shortcode( '[contact-form-7 id="4" title="Contact form Fr"]' ); ?>
	</div>
</section>


<?php get_footer(); ?>