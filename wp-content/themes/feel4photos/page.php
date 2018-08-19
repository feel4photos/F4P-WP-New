<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php if(is_page('portfolio')) : ?>
	<main id="main" class="site-main c-portfolio-main" role="main">
		<div class="swiper-container swiper5">
			<div class="swiper-wrapper">
				<?php
					//$pagedlatestpost = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$portfolioArgs = array(
						'order' => 'desc',
						'orderby' => 'post_date',
						'posts_per_page' => -1,
						'post_type' => 'f4pPortfolio',
						'post_status' => 'publish'
						//'paged' => $pagedlatestpost
					);
					$portfolioPosts = new WP_Query( $portfolioArgs );
					while ( $portfolioPosts->have_posts() ) : $portfolioPosts->the_post();
				?>
					<div class="swiper-slide">
						<div class="c-portfolio-main__image">
							<a href="javascript:void(0);">
								<?php the_post_thumbnail('full'); ?>
							</a>
						</div><!-- / portfolio image -->
						<div class="c-portfolio-main__details">
							<?php the_title(); ?>
							<?php the_content(); ?>
						</div><!-- / portfolio details -->
					</div>

				<?php endwhile; wp_reset_query(); ?>
			</div>
			<!-- Add Scrollbar -->
			<div class="swiper-scrollbar"></div>
			<!-- Add Pagination -->
	        <div class="swiper-pagination swiper-pagination swiper-pagination-white u-absolute u-top-0 u-left-0 center-align"></div>
	        <!-- Add Navigation -->
	        <div class="sw-btn-cont sw-btn-cont--left"><div class="swiper-button-prev"></div></div>
	        <div class="sw-btn-cont sw-btn-cont--right"><div class="swiper-button-next"></div></div>
		</div>
	</main>
<?php elseif (is_page()) : ?>

	<div class="wrap">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/page/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .wrap -->

<?php endif; ?><!-- / portfolio page content area -->

<?php get_footer();
