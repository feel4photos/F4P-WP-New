<?php
/**
 * Displays page title and sub title
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.0
 */

?>

<?php if ( !is_front_page() ) : ?>
<h1 class="c-title c-title--banner u-uppercase u-left-pad u-right-pad">
    <?php the_title(); ?>
    <?php if ( get_field('subtitle') ) : ?>
    <span class="c-title c-title--border-base-color c-title--border-top c-title--border-middle c-crisp-title u-smallertxt">
        <?php echo get_field('subtitle'); ?>
    </span>
    <?php endif; ?>
</h1>
<?php endif; ?>
