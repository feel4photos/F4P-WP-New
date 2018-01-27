<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.0
 */

?>

<section class="u-fixed u-top-0 o-brand c-brand">
	<div class="u-relative">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo-container" class="o-logo c-brand__logo left-align white-text" title="<?php bloginfo('name'); ?>">
		    <img src="<?php echo get_option( 'header_logo' ); ?>" alt="<?php bloginfo('name'); ?>">
		</a><!-- / logo -->

		<div class="c-brand__cta">
		    <a href="javascript:void(0);" class="o-search right-align white-text search-overlay">
		        <i class="fa fa-search" aria-hidden="true"></i>
		    </a><!-- / search icon -->
		    <a href="javascript:void(0);" class="o-mainnav right-align white-text toggle-overlay">
		        <i class="fa fa-bars" aria-hidden="true"></i>
		    </a><!-- / main nav icon -->
		</div><!-- / search and nav icon -->
	</div>
</section><!-- / logo + menu + search area -->


