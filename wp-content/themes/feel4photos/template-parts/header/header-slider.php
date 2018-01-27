<?php
/**
 * Displays header slider
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.0
 */

?>


<?php if( have_rows('frontpage-slider') ): ?>
    <section class="c-slider u-height100 u-no-botmargin">
    <?php while( have_rows('frontpage-slider') ): the_row();
        // vars
        $sliderimage = get_sub_field('slider_image');

        ?>
        <div class="u-height100 u-bg-norepeat u-bg-pos-center-middle u-bg-cover" style="background-image: url('<?php echo $sliderimage['url']; ?>');">
        </div>
    <?php endwhile; ?>
    </section>
<?php endif; ?><!-- home page banner slider -->
