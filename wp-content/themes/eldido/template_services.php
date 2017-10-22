<?php /* Template Name: Services */ get_header(); ?>
<section class="servicesPages">
	<div class="container">
		<div id="patios-sur-mesure" class="servicesPages_box">
			<img src="<?php echo get_template_directory_uri(); ?>/img/service1_bg.png" class="servicesPages_img" alt="service 1 bg">
			<div class="servicesPages_bg" style="background-image:url(<?php echo get_template_directory_uri();?>/img/service1.jpg);">
				<img src="<?php echo get_template_directory_uri();?>/img/service1.jpg  " alt="">

			</div>
			<div class="servicesPages_content">
				<?php 
				$service_titre_1 = get_field( "service_titre_1" );
				if( $service_titre_1 ) {  ?>
				<h2><?php echo $service_titre_1  ?></h2>
				<?php } ?>
				
				<?php 
				$service_texte_1 = get_field( "service_texte_1" );
				if( $service_texte_1 ) {  ?>
				<?php echo $service_texte_1  ?>
				
				<?php } ?>
				<?php if( have_rows('service_liste_1') ): ?>
					<ul>
						<?php while( have_rows('service_liste_1') ): the_row(); 
						$content = get_sub_field('service_liste_items');
						?>
						<?php if( $content ): ?>
							<li><?php echo $content; ?></li>
						<?php endif; ?>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>
	<div id="renovation-residentielle" class="servicesPages_box reverse">
		<img src="<?php echo get_template_directory_uri(); ?>/img/service2_bg.png" class="servicesPages_img" alt="service 2 bg">
		<div class="servicesPages_bg" style="background-image:url(<?php echo get_template_directory_uri();?>/img/service2.jpg);">
			<img src="<?php echo get_template_directory_uri();?>/img/service2.jpg  " alt="">
		</div>
		<div class="servicesPages_content">
			
			<?php 
			$service_titre_2 = get_field( "service_titre_2" );
			if( $service_titre_2 ) {  ?>
			<h2><?php echo $service_titre_2  ?></h2>
			<?php } ?>
			<?php 
			$service_texte_2 = get_field( "service_texte_2" );
			if( $service_texte_2 ) {  ?>
			<?php echo $service_texte_2  ?>
			<?php } ?>
			<?php if( have_rows('service_liste_2') ): ?>
				<ul>
					<?php while( have_rows('service_liste_2') ): the_row(); 
					$content = get_sub_field('service_liste_items');
					?>
					<?php if( $content ): ?>
						<li><?php echo $content; ?></li>
					<?php endif; ?>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
</div>
<div id="finition-interieur" class="servicesPages_box">
	<img src="<?php echo get_template_directory_uri(); ?>/img/service3_bg.png" class="servicesPages_img" alt="service 3 bg">
	<div class="servicesPages_bg" style="background-image:url(<?php echo get_template_directory_uri();?>/img/service3.jpg);">
		<img src="<?php echo get_template_directory_uri(); ?>/img/service3.jpg" alt="">
	</div>
	<div class="servicesPages_content">
		<?php 
		$service_titre_3 = get_field( "service_titre_3" );
		if( $service_titre_3 ) {  ?>
		<h2><?php echo $service_titre_3  ?></h2>
		<?php } ?>
		<?php 
		$service_texte_3 = get_field( "service_texte_3" );
		if( $service_texte_3 ) {  ?>
		<?php echo $service_texte_3  ?>
		<?php } ?>
		<?php if( have_rows('service_liste_3') ): ?>
			<ul>
				<?php while( have_rows('service_liste_3') ): the_row(); 
				$content = get_sub_field('service_liste_items');
				?>
				<?php if( $content ): ?>
					<li><?php echo $content; ?></li>
				<?php endif; ?>
			<?php endwhile; ?>
		</ul>
	<?php endif; ?>
</div>
</div>
</div>
</section>

<?php get_footer(); ?>