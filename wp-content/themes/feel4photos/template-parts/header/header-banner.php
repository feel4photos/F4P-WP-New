<?php
/**
 * Displays header banner
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.0
 */

?>

<?php if ( has_post_thumbnail() ) : ?>
    <section class="parallax">
        <?php the_post_thumbnail('full'); ?>
    </section>
<?php endif; ?><!-- all inner pages banner -->
