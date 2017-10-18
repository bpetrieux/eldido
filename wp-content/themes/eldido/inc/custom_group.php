<?php 
	$loop = new WP_Query( array( 
	'post_type' => 'custom_group',
	//'cat' => '12'
	'orderby' => 'date', 
	'posts_per_page' => 100 ) );
	while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="custom_single_wrap">
			<a class="custom_single_img" href="<?php the_permalink(); ?>"> 
			<?php the_post_thumbnail();?> </a>
			<h5 class="custom_single_title"><?php the_title(); ?></h5>
		</div>
	<?php endwhile; 
?>