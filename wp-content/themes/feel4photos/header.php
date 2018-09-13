<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo get_option('google_analytics'); ?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', '<?php echo get_option('google_analytics'); ?>');
    </script>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php if ( is_front_page() ) : ?>
	<?php get_template_part( 'template-parts/header/site', 'preloader' ); ?><!-- / site preloader partial -->
    <?php endif; ?>

    <section class="o-whole">
        <?php if ( is_front_page() ) { ?>
    	<header id="masthead" class="o-header c-header u-height100 u-relative" role="main-header">
        <?php } else { ?>
        <header id="masthead" class="o-header c-header u-height100 u-relative valign-wrapper parallax-container" role="main-header">
        <?php } ?>
            <?php get_template_part( 'template-parts/header/site', 'branding' ); ?><!-- / header site branding partial -->

            <?php get_template_part( 'template-parts/header/header', 'navoverlay' ); ?><!-- / header nav overlay partial -->

            <?php get_template_part( 'template-parts/header/header', 'searchoverlay' ); ?><!-- / header search overlay partial -->

            <?php get_template_part( 'template-parts/header/header', 'cta' ); ?><!-- / header CTA partial -->

            <?php if ( is_front_page() ) : ?>
            	<?php get_template_part( 'template-parts/header/header', 'slider' ); ?><!-- / banner slider partial for home page only -->
        	<?php elseif ( is_page() || is_single() ) : ?>
        		<?php get_template_part( 'template-parts/header/header', 'banner' ); ?><!-- / banner partial for all other pages -->
        	<?php endif; ?>
        </header><!-- / header -->

        <section class="o-content c-content" id="first-fold">
