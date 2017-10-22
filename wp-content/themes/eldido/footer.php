<?php $contact_background_image = get_field('contact_background_image'); ?>
<section id="contact" class="contact" <?php if( $contact_background_image ) {  ?> style="background-image:url(<?php echo $contact_background_image['url']; ?>)" <?php } ?> >
	<div class="container">
		<!-- 6LcF9TQUAAAAAC_F8co5x1984iULhp1MNpws-9R6
			6LcF9TQUAAAAALmsLAjf_RnPZ-4bX1iH_X-Vrwk-
 -->
		<?php 
		$contact_content = get_field( "contact_content",2 );
		if( $contact_content ) {  ?>
		<?php echo $contact_content  ?>
		<?php } ?>
		<?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form 1"]' ); ?>
		<?php //echo do_shortcode( '[contact-form-7 id="4" title="Contact form Fr"]' ); ?>
	</div>
</section>
<footer class="footer">
	<h6>&copy; copyright <?php echo date('Y') .' '. get_bloginfo('name'); ?></h6>
</footer>
<?php wp_footer(); ?>
</body>
</html>