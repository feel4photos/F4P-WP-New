<?php
/**
 * Displays header nav overlay
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.0
 */

?>
<div class="o-mainnav-list o-header-ovrlay">
    <div class="outer-close toggle-overlay">
        <a class="close"><span></span></a>
    </div><!-- / close button -->
    <section class="o-header-ovrlay__inner hide-on-med-and-down">
        <div class="c-title c-title--border-bottom c-title--border-base-color">
           <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo-menuoverlay" class="o-logo white-text" title="<?php bloginfo('name'); ?>">
                <img src="<?php echo get_option( 'header_logo' ); ?>" alt="<?php bloginfo('name'); ?>">
            </a>
        </div><!-- / logo -->
        <p>
            <a href="mailto:<?php echo get_option('emailLink1');?>" title="<?php echo get_option('emailLink1');?>" class="u-linkhlight"><?php echo get_option('emailLink1');?></a>
        </p>
        <ul>
            <li class="u-linkhlight"><a href="tel:9830027039">9830027039</a></li>
            <li class="u-linkhlight"><a href="tel:9477218643">9477218643</a></li>
            <li class="u-linkhlight"><a href="tel:7044443318">7044443318</a></li>
        </ul>
        <div class="c-footer__copyright u-uppercase u-txtgrey">
            <p>copyright &copy; <?php the_time('Y'); ?> <?php bloginfo('name'); ?></p>
        </div><!-- / footer copyright -->
        <div class="c-social">
            <a href="<?php echo get_option('facebook_link');?>" target="_blank" class="u-linkbase social facebook"><i class="fa fa-facebook"></i></a>
            <!-- <a href="javascript:void(0);" class="u-linkbase social twitter"><i class="fa fa-twitter"></i></a> -->
            <a href="<?php echo get_option('instagram_link');?>" target="_blank" class="u-linkbase social instagram"><i class="fa fa-instagram"></i></a>
        </div>
    </section><!-- / left column -->
    <?php get_template_part( 'template-parts/header/header', 'nav' ); ?><!-- / header nav partial -->
</div><!-- / main nav -->
