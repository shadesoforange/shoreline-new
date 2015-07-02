<?php
/**
 * @package swell
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php if ( comments_open() || '0' != get_comments_number() ) : // If comments are open or we have at least one comment, load up the comment template?>
						<div class="comments-wrap">
							<?php comments_template(); ?>
						</div>
				<?php endif; ?>

			<?php endwhile; // end of the loop. ?>
			
			<?php if ( is_active_sidebar( 'content-bottom' ) ) : ?>
				<div id="content-bottom" class="home-region-3 widget-area" role="complementary">
					<?php dynamic_sidebar( 'content-bottom' ); ?>
				</div><!-- #primary-sidebar -->
				<?php endif; ?>
			
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>