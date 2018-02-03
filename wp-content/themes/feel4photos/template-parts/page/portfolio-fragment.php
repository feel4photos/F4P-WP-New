<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.0
 */

?>

<?php

    $frontportfolio1 = get_field('portfolio_image_1');
    $frontportfolio2 = get_field('portfolio_image_2');
    $frontportfolio3 = get_field('portfolio_image_3');
    $frontportfolio4 = get_field('portfolio_image_4');
    $frontportfolio5 = get_field('portfolio_image_5');
    $frontportfolio6 = get_field('portfolio_image_6');

?>

<section class="o-portfolio c-portfolio c-portfolio--desktop u-display-none show-on-large">
    <section class="row">
        <?php if ( !empty($frontportfolio1) ) : ?>
        <article class="col s12 l8 wow fadeInUp">
            <a href="<?php echo $frontportfolio1['url']; ?>" class="swipebox" rel="portfolio-index">
                <span></span>
                <img src="<?php echo $frontportfolio1['url']; ?>" alt="" title="">
            </a>
        </article>
        <?php endif; ?>
        <?php if ( !empty($frontportfolio2) ) : ?>
        <article class="col s12 l4 wow fadeInUp">
            <a href="<?php echo $frontportfolio2['url']; ?>" class="swipebox" rel="portfolio-index">
                <span></span>
                <img src="<?php echo $frontportfolio2['url']; ?>" alt="" title="">
            </a>
        </article>
        <?php endif; ?>
        <?php if ( !empty($frontportfolio3) ) : ?>
        <article class="col s12 l4 wow fadeInUp">
            <a href="<?php echo $frontportfolio3['url']; ?>" class="swipebox" rel="portfolio-index">
                <span></span>
                <img src="<?php echo $frontportfolio3['url']; ?>" alt="" title="">
            </a>
        </article>
        <?php endif; ?>

        <article class="col s12 l4 wow fadeInUp">
            <!-- <a href="images/blog-bg.jpg" class="swipebox" rel="portfolio-index">
                <span></span>
                <img src="images/blog-bg.jpg" alt="" title="">
            </a> -->
            <div class="card white-text u-allpad-50">
                <div class="card-content">
                    <h2 class="card-title c-portfolio__title c-title c-title--border-bottom c-title--border-hlight-color u-uppercase u-no-topmargin">
                        <span class="u-capitalize u-txtgrey u-smallertxt u-bauhaus-ffamily">our gallery</span>
                        Portfolio
                    </h2>
                    <div class="c-portfolio__desc">
                        <p>Our work in various fields has created a
                        craze among our clients. We dedicate ourselves towards Model Photography, Event Photography, Product Photography, and above all Wedding Photography.</p>
                    </div>
                </div>
                <!-- <div class="card-action">
                    <a href="javascript:void(0);" title="More" class="c-about__mlink">More</a>
                </div> -->
            </div>
        </article>
        <?php if ( !empty($frontportfolio4) ) : ?>
        <article class="col s12 l4 wow fadeInUp">
            <a href="<?php echo $frontportfolio4['url']; ?>" class="swipebox" rel="portfolio-index">
                <span></span>
                <img src="<?php echo $frontportfolio4['url']; ?>" alt="" title="">
            </a>
        </article>
        <?php endif; ?>
        <?php if ( !empty($frontportfolio5) ) : ?>
        <article class="col s12 l4 wow fadeInUp">
            <a href="<?php echo $frontportfolio5['url']; ?>" class="swipebox" rel="portfolio-index">
                <span></span>
                <img src="<?php echo $frontportfolio5['url']; ?>" alt="" title="">
            </a>
        </article>
        <?php endif; ?>
        <?php if ( !empty($frontportfolio6) ) : ?>
        <article class="col s12 l8 wow fadeInUp">
            <a href="<?php echo $frontportfolio6['url']; ?>" class="swipebox" rel="portfolio-index">
                <span></span>
                <img src="<?php echo $frontportfolio6['url']; ?>" alt="" title="">
            </a>
        </article>
        <?php endif; ?>
    </section>
</section><!-- / portfolio desktop -->
<section class="o-portfolio c-portfolio c-portfolio--mobile u-height100 u-topbottom-pad-50- u-relative hide-on-large-only wow fadeInUp">
    <section class="u-width100">
        <section class="container u-absolute u-left-0 u-right-0 u-bot-0 u-right-pad u-left-pad">
            <h2 class="c-portfolio__title c-title u-no-margin white-text c-title--border-top c-title--border-hlight-color u-uppercase">Portfolio</h2>
        </section><!-- / portfolio heading -->
        <section class="swiper-container swiper1 u-width100 u-height100">
            <article class="swiper-wrapper">
                <?php if ( !empty($frontportfolio1) ) : ?>
                <div class="swiper-slide u-oflowhidden">
                    <div class="swiper-zoom-container">
                        <img src="<?php echo $frontportfolio1['url']; ?>" alt="" class="u-height100 u-width100 u-objfit-cover u-obj-pos-center-middle">
                    </div>
                </div>
                <?php endif; ?>
                <?php if ( !empty($frontportfolio2) ) : ?>
                <div class="swiper-slide u-oflowhidden">
                    <div class="swiper-zoom-container">
                        <img src="<?php echo $frontportfolio2['url']; ?>" alt="" class="u-height100 u-width100 u-objfit-cover u-obj-pos-center-middle">
                    </div>
                </div>
                <?php endif; ?>
                <?php if ( !empty($frontportfolio3) ) : ?>
                <div class="swiper-slide u-oflowhidden">
                    <div class="swiper-zoom-container">
                        <img src="<?php echo $frontportfolio3['url']; ?>" alt="" class="u-height100 u-width100 u-objfit-cover u-obj-pos-center-middle">
                    </div>
                </div>
                <?php endif; ?>
                <?php if ( !empty($frontportfolio4) ) : ?>
                <div class="swiper-slide u-oflowhidden">
                    <div class="swiper-zoom-container">
                        <img src="<?php echo $frontportfolio4['url']; ?>" alt="" class="u-height100 u-width100 u-objfit-cover u-obj-pos-center-middle">
                    </div>
                </div>
                <?php endif; ?>
                <?php if ( !empty($frontportfolio5) ) : ?>
                <div class="swiper-slide u-oflowhidden">
                    <div class="swiper-zoom-container">
                        <img src="<?php echo $frontportfolio5['url']; ?>" alt="" class="u-height100 u-width100 u-objfit-cover u-obj-pos-center-middle">
                    </div>
                </div>
                <?php endif; ?>
                <?php if ( !empty($frontportfolio6) ) : ?>
                <div class="swiper-slide u-oflowhidden">
                    <div class="swiper-zoom-container">
                        <img src="<?php echo $frontportfolio6['url']; ?>" alt="" class="u-height100 u-width100 u-objfit-cover u-obj-pos-center-middle">
                    </div>
                </div>
                <?php endif; ?>
            </article>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination1 swiper-pagination-white u-absolute u-top-0 u-left-0 center-align"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </section><!-- / portfolio slider -->
    </section><!-- / gm fixed width container -->
</section><!-- / portfolio mobile -->
