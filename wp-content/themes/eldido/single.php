<?php get_header(); ?>
<section class="article">
	<div class="container">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail(); ?>
				<?php else: ?>
					<img src="http://via.placeholder.com/1200x630" alt="">
				<?php endif; ?>
				<h1 class="article_title">
					<?php the_title(); ?>
				</h1>
				<div class="article_share">
					<p>
						<?php the_field('share_traduction', 'option'); ?>
					</p>
					<ul>
						<li>
							<a href="http://twitter.com/intent/tweet?status=<?php print(urlencode(the_title())); ?>+<?php print(urlencode(get_permalink())); ?>" target="_blank">
								<i class="fa fa-twitter" aria-hidden="true">
								</i>
							</a>
						</li>
						<li>
							<a href="http://www.facebook.com/sharer/sharer.php?u=<?php print(urlencode(get_permalink())); ?>&title=<?php print(urlencode(the_title())); ?>" target="_blank">
								<i class="fa fa-facebook" aria-hidden="true">
								</i>
							</a>
						</li>
						<li>
							<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php print(urlencode(get_permalink())); ?>&title=<?php print(urlencode(the_title())); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>


						</li>
					</ul>
				</div>
				<div class="article_content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
</div>
</section>
<?php include('single_nav.php'); ?>
<?php get_footer(); ?>