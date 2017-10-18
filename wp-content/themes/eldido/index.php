<?php /* Template Name: Blog */  get_header(); ?>
	<section class="hero_title">
		<div class="container">
			<h1>
				<?php the_title() ?></h1>
			</div>
		</section>
		<section class="blogue">
			<div class="container">
				<?php
				$args = array(
					'post_type'         => array('post'),
//'category_name'     => 'news,nouvelles',
//'post_status'       => 'publish',
					'paged'             => get_query_var('paged')
					);
				query_posts( $args );
				?>
				<?php if(have_posts()) : while ( have_posts() ) : the_post(); ?>
					<article id="<?php the_ID(); ?>">
						<div class="blogue_thumbnail">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute()?>";>
								<?php if ( has_post_thumbnail() ) : ?>

									<?php the_post_thumbnail(); ?>
								<?php else: ?>
									<img src="http://via.placeholder.com/700x300" alt="">
								<?php endif; ?>
							</a>
						</div>
						<div class="blogue_text">
							<h2><?php the_title(); ?></h2>
							<h6><?php the_time('d/m/Y') ?></h6>
							<p>
								<?php the_excerpt();?>
							</p>

							<a class="blogue_link" href="<?php the_permalink(); ?>">Lire plus<?php the_field('read_more_traduction', 'option'); ?></a>
						</div>
					</article>
				<?php endwhile; endif; ?>
			</div>
		</section>

		<?php get_footer(); ?>