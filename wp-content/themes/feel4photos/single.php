<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<section class="o-hlight o-topbar-singlepost u-width100 u-topbottom-pad-50 white-text valign-wrapper">
    <section class="container">
        <section class="row u-no-margin u-right-pad u-left-pad">
            <div class="col s12 l4 hide-on-med-and-down left-align">
                <h3 class="c-title c-title--border-bottom c-title--border-base-color u-uppercase u-no-topmargin">Categories</h3>
                <div class="o-catgrylist u-linkbase u-smallcaps u-width80">
                    <ul class="u-no-margin">
                        <?php
	                    	$categories = get_categories();
								foreach($categories as $category) {
							   	echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
								}
						?>
                    </ul>
                </div>
            </div><!-- / categories -->
            <div class="col s12 l4 center-align">
                <h3 class="c-title u-uppercase c-title--border-middle c-title--border-bottom c-title--border-base-color c-title--type3 u-no-topmargin">Stay in touch</h3>
                <section class="c-social c-social--singlepost">
                	<?php echo get_template_part( 'template-parts/common/social', 'platforms' ); ?>
                </section><!-- / stay in touch social icon -->
            </div><!-- / stay in touch -->
            <div class="col s12 l4 hide-on-med-and-down right-align">
                <h3 class="c-title c-title--border-right c-title--border-bottom c-title--border-base-color u-uppercase u-no-topmargin">Archive</h3>
                <div class="o-catgrylist o-archvlist u-linkbase u-smallcaps u-width80 right">
                    <ul class="u-no-margin">
                        <?php wp_get_archives( $args ); ?>
                    </ul>
                </div>
            </div><!-- / archive -->
        </section><!-- / row for categories stay in touch archive -->
    </section><!-- / categories stay in touch archive -->
</section>

<section class="o-listarticles">
    <article class="container u-width100 o-article o-article--single">
        <section class="row u-no-margin">
            <section class="col s12 l12 u-no-padding">
                <div class="card container u-margin-0auto">
                    <div class="u-topbottom-pad-50 u-left-pad u-right-pad">
                    	<?php while ( have_posts() ) : the_post(); ?>
                        <div class="card-content">
                            <div class="o-article__quote u-quotetxt u-largetxt u-large-1st-lettr--large c-title c-title--border-bottom c-title--border-hlight-color">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="o-article__desc">
								<?php the_content(); ?>
								<?php the_post_navigation( array(
									'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'feel4photos' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'feel4photos' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . feel4photos_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
									'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'feel4photos' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'feel4photos' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . feel4photos_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
								) ); ?>
							</div><!-- / main content -->
                        </div>
                    	<?php endwhile; // End of the loop. ?>
                        <div class="card-action u-no-padding">

                        </div><!-- / permalink -->
                    </div>
                </div><!-- / blog content -->
            </section><!-- / single content and sub image -->
        </section>
    </article><!-- / single article area -->
</section><!-- / list of articles -->

<?php get_footer();
