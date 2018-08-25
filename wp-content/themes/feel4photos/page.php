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

	<section class="o-hlight u-width100 u-topbottom-pad-50 white-text valign-wrapper wow fadeInUp">
        <section class="container">
            <section class="row u-no-margin u-right-pad u-left-pad">
                <div class="col s12 l12 hide-on-med-and-down left-align u-large-1st-lettr--large u-largetxt">
                    <?php while ( have_posts() ) : the_post(); ?>
                    	<?php the_content(); ?>
                    <?php endwhile; ?>
                </div><!-- / portfolio top content -->
            </section><!-- / row for portfolio content -->
        </section><!-- / portfolio archive -->
    </section>

	<main id="main" class="site-main c-portfolio-main wow fadeInUp" role="main">
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
					$portfolioThumb = get_the_post_thumbnail_url(get_the_ID(),'full');
				?>
					<div class="swiper-slide">
						<div class="c-portfolio-main__image">
							<?php the_post_thumbnail('full'); ?>
						</div><!-- / portfolio image -->
						<a href="<?php echo $portfolioThumb; ?>" class="swipebox c-portfolio-link" rel="portfolio-main">
							<div class="c-portfolio-main__details u-overlay u-overlay--black">
								<div class="c-portfolio-main__details--inner">
									<h3 class="c-title c-title--border-middle c-title--border-base-color white-text">
										<?php the_title(); ?>
									</h3>
									<?php the_content(); ?>
								</div>
							</div><!-- / portfolio details -->
						</a>
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

<?php elseif(is_page('about')) : ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<section class="o-hlight u-width100 u-topbottom-pad-50 white-text valign-wrapper wow fadeInUp">
	        <section class="container">
	            <section class="row u-no-margin u-right-pad u-left-pad">
	                <div class="col s12 l12 hide-on-med-and-down left-align u-large-1st-lettr--large u-largetxt">
	                    <?php the_excerpt(); ?>
	                </div><!-- / portfolio top content -->
	            </section><!-- / row for portfolio content -->
	        </section><!-- / portfolio archive -->
	    </section><!-- / about page excerpt -->

	    <section class="o-listarticles wow fadeInUp">
	        <article class="container u-width100 o-article o-article--single">
	            <section class="row u-no-margin">
	                <section class="col s12 l12 u-no-padding">
	                    <div class="card container u-margin-0auto">
	                        <div class="u-topbottom-pad-50 u-left-pad u-right-pad">
	                            <div class="card-content">
	                                <div class="o-article__desc">
	                                    <?php the_content(); ?>
	                                </div><!-- / detailed content -->
	                            </div>
	                        </div>
	                    </div><!-- / blog content -->
	                </section><!-- / single content and sub image -->
	            </section>
	        </article><!-- / single article area -->
	    </section><!-- / about page detailed content -->
    <?php endwhile; ?>

<?php elseif(is_page('contact')) : ?>

	<section class="o-hlight u-width100 u-topbottom-pad-50 white-text valign-wrapper wow fadeInUp">
        <section class="container">
            <section class="row u-no-margin u-right-pad u-left-pad">
                <div class="col s12 l12 hide-on-med-and-down left-align u-large-1st-lettr--large u-largetxt">
                	<?php while ( have_posts() ) : the_post(); ?>
                    	<?php the_excerpt(); ?>
                    <?php endwhile; ?>
                </div><!-- / portfolio top content -->
            </section><!-- / row for portfolio content -->
        </section><!-- / portfolio archive -->
    </section><!-- / about page excerpt -->

    <section class="o-lightgray o-listarticles wow fadeInUp">
        <article class="container u-width100 o-article o-article--single">
            <section class="row u-no-margin">
                <section class="col s12 l12 u-no-padding">
                    <div class="card container u-margin-0auto">
                        <div class="u-topbottom-pad-50 u-left-pad u-right-pad">
                            <div class="card-content">
                                <div class="o-article__desc">
                                	<?php while ( have_posts() ) : the_post(); ?>
				                    	<?php the_content(); ?>
				                    <?php endwhile; ?>
				                    <div class="o-contact">
				                    	<?php echo get_template_part( 'template-parts/common/contact', 'number' ); ?>
				                    </div>
                                </div><!-- / detailed content -->
                            </div>
                        </div>
                    </div><!-- / blog content -->
                </section><!-- / single content and sub image -->
            </section>
        </article><!-- / single article area -->
    </section><!-- / about page detailed content -->

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
