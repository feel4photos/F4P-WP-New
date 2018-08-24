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
        <!-- <a class="close"><span></span></a> -->
        <a class="close">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" version="1.1" height="25px" viewBox="0 0 64 64" enable-background="new 0 0 64 64">
                <g>
                    <path fill="#FFFFFF" d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59   c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59   c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0   L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"/>
                </g>
            </svg>
        </a>
    </div><!-- / close button -->
    <section class="o-header-ovrlay__inner hide-on-med-and-down">
        <div class="c-title c-title--border-bottom c-title--border-base-color">
           <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo-menuoverlay" class="o-logo white-text" title="<?php bloginfo('name'); ?>">
                <img src="<?php echo get_option( 'header_logo' ); ?>" alt="<?php bloginfo('name'); ?>">
            </a>
        </div><!-- / logo -->
        <p>
            <a href="mailto:<?php echo get_option('emailLink1');?>" title="<?php echo get_option('emailLink1');?>" class="u-linkhlight-"><?php echo get_option('emailLink1');?></a>
        </p>
        <ul class="u-linkhlight"><?php echo get_template_part( 'template-parts/common/contact', 'number' ); ?></ul>
        <?php echo get_template_part( 'template-parts/common/copyright', 'section' ); ?><!-- / footer copyright -->
        <div class="c-social">
            <?php echo get_template_part( 'template-parts/common/social', 'platforms' ); ?>
        </div>
    </section><!-- / left column -->
    <?php get_template_part( 'template-parts/header/header', 'nav' ); ?><!-- / header nav partial -->
</div><!-- / main nav -->
