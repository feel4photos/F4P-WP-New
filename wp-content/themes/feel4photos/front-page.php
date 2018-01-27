<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


	<?php get_template_part ( 'template-parts/page/about', 'fragment' ); ?><!-- / about fragment partial -->


<?php get_footer();
