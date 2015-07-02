<?php
/**
 * Template Name: Home
 * @package swell
 */

get_header(); ?>



	<!-- Portfolio Home -->
	<?php get_template_part( 'content-projects-home' ); ?>
	
	<!-- Secondary Video -->
	<?php get_template_part( 'content-secondary-video-home' ); ?>

	<!-- Blog Home -->
	<?php get_template_part( 'content-posts-home' ); ?>
	
	<!-- Testimonials Home -->
	<?php get_template_part( 'content-testimonials-home' ); ?>

<?php while (have_posts()) : the_post(); //home content section ?>
	<?php if($post->post_content):?>
	<section id="main-content" class="content-area">
				<?php // $home_content_bkg = get_theme_mod('swell_home_content_bkg'); ?>

				<div id="home-content" class="full home-section clearfix <?php // if($home_content_bkg) echo "has-background"; ?>">
					<div class="inside">

					<?php the_content(); ?>

					</div>
				</div>
				
				<?php if ( is_active_sidebar( 'content-secondary' ) ) : ?>
				<div id="content-secondary" class="home-region-2 widget-area" role="complementary">
					<?php dynamic_sidebar( 'content-secondary' ); ?>
				</div><!-- #primary-sidebar -->
				<?php endif; ?>
				
				<?php if ( is_active_sidebar( 'content-bottom' ) ) : ?>
				<div id="content-bottom" class="home-region-3 widget-area" role="complementary">
					<?php dynamic_sidebar( 'content-bottom' ); ?>
				</div><!-- #primary-sidebar -->
				<?php endif; ?>
				
	</section><!-- #main-content -->
	<?php endif; ?>
<?php endwhile; ?>


<?php get_footer(); ?>
