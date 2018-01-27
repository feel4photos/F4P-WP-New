<?php
/**
 * Displays footer navigation
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.0
 */

?>

<?php wp_nav_menu( array(
	'theme_location' => 'main-navigation',
	'menu_id'        => 'footer-menu',
	'container'		 => 'nav',
	'container_class'=> 'c-menu c-footer__nav u-uppercase u-footer-gap-'
) ); ?>
<!-- / footer navigation -->
