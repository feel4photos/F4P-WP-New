<?php
/**
 * Displays latest blog credentials of Feel4photos
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.0
 */

?>

<section class="u-overlay--black-reverse c-hblog u-topbottom-pad-50 white-text parallax-container wow fadeInUp">
    <?php
        //$pagedlatestpost = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $latestBlogArgs = array(
            'order' => 'desc',
            'orderby' => 'post_date',
            'posts_per_page' => 1,
            'post_type' => 'post',
            'post_status' => 'publish'
            //'paged' => $pagedlatestpost
        );
        $latestPosts = new WP_Query( $latestBlogArgs );
        while ( $latestPosts->have_posts() ) : $latestPosts->the_post();
        //$portfolioThumb = get_the_post_thumbnail_url(get_the_ID(),'full');
    ?>
    <section class="container u-left-pad u-right-pad">
        <div class="row">
            <div class="col s12 l8">
                <div class="card">
                    <div class="card-content u-width75">
                        <h2 class="card-title c-title c-title--border-bottom c-title--border-hlight-color c-hblog__title u-uppercase u-no-topmargin">
                            <span class="u-capitalize u-smallertxt u-bauhaus-ffamily">Our Fashion</span>
                            <?php the_title(); ?>
                        </h2>
                        <div class="c-hblog__desc">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="card-action">
                        <a href="<?php the_permalink(); ?>" title="More" class="c-hblog__mlink c-btn c-btn--border-radius c-btn--bgcolor-hlight c-btn--noborder">More</a>
                    </div>
                </div>
            </div>
            <div class="col s12 l4 right-align c-hblog__datedetails">
                <span class="c-hblog__postdate c-title c-title--border-right c-title--border-bottom c-title--border-base-color">
                    <?php echo get_the_date( 'd' ); ?>
                </span>
                <span class="c-hblog__postmonth"><?php echo get_the_date( 'F' ); ?></span>
                <span class="c-hblog__postyear"><?php echo get_the_date( 'Y' ); ?></span>
            </div>
        </div>
    </section><!-- / gm fixed width container -->
    <section class="c-hblog__featureimg parallax">
        <?php the_post_thumbnail('full'); ?>
    </section><!-- / feature image holder -->
    <?php endwhile; wp_reset_query(); ?>
</section><!-- / blog in home page -->
