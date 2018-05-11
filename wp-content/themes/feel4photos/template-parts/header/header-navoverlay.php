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
