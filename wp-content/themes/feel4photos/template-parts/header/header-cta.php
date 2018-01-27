<?php
/**
 * Displays header CTA
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.0
 */

?>
<section class="container center-align white-text">
    <?php get_template_part( 'template-parts/header/page', 'title' ); ?><!-- / page title and subtitle partial -->
    <?php get_template_part( 'template-parts/header/header', 'social' ); ?><!-- / header social icon partial -->
    <?php get_template_part( 'template-parts/header/scroll', 'down' ); ?><!-- / page scroll down partial -->
</section><!-- social button scroll down button area -->
