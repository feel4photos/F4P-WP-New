<?php
/**
 * Displays header navigation
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.0
 */

?>
<section class="o-header-ovrlay__inner">
    <?php wp_nav_menu( array(
        'theme_location' => 'main-navigation',
        'menu_id'        => 'top-menu',
        'container'      => 'nav',
        'container_class'=> 'c-menu c-header__nav'
    ) ); ?>
    <!-- / main nav items -->
</section><!-- / right column -->
