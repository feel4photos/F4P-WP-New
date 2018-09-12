<?php
/**
 * Displays latest client's logo of Feel4photos
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.0
 */

?>



<section class="o-clients c-clients u-height100 u-topbottom-pad-50- wow fadeInUp">
    <section class="container u-oflowhidden u-height100 u-relative">
        <section class="u-absolute u-left-0 u-right-0 u-bot-0 u-right-pad u-left-pad">
            <h2 class="c-clients__title c-title c-title--border-top c-title--border-hlight-color u-uppercase u-no-margin">
                <span class="u-capitalize u-smallertxt u-bauhaus-ffamily">whom we served</span>
                Clients
            </h2>
        </section>
        <!-- / clients heading -->
        <section class="swiper-container swiper2 u-width100 u-height100">
            <article class="swiper-wrapper">
                <?php
                    //$pagedlatestpost = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $latestClientArgs = array(
                        'order' => 'desc',
                        'orderby' => 'post_date',
                        'posts_per_page' => -1,
                        'post_type' => 'f4pClient',
                        'post_status' => 'publish'
                        //'paged' => $pagedlatestpost
                    );
                    $clientPosts = new WP_Query( $latestClientArgs );
                    while ( $clientPosts->have_posts() ) : $clientPosts->the_post();
                    //$portfolioThumb = get_the_post_thumbnail_url(get_the_ID(),'full');
                ?>
                <div class="swiper-slide u-oflowhidden">
                    <div class="swiper-zoom-container">
                        <?php the_post_thumbnail('full', array('class' => 'u-height100 u-width50 u-objfit-contain u-obj-pos-center-middle')); ?>
                    </div>
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </article>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination2 swiper-pagination-white u-absolute u-top-0 u-left-0 left-align"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </section><!-- / client logo slider -->
    </section><!-- / gm fixed width container -->
</section><!-- / clients -->
