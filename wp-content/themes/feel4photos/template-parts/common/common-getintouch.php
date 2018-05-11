<?php
/**
 * Displays get in touch credentials of Feel4photos
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.0
 */

?>

<section class="o-hlight c-contact c-contact--slice u-height100 u-height-inherit u-topbottom-pad-50 u-left-pad u-right-pad valign-wrapper white-text wow fadeInUp">
    <section class="container">
        <h2 class="c-hcontact__title c-title c-title--border-bottom c-title--border-base-color">
            hummm... interested?
            say <strong>Hello ...</strong>
        </h2>
        <ul class="c-hcontact__tel u-exlargetxt u-no-margin">
            <?php echo get_template_part( 'template-parts/common/contact', 'number' ); ?>
        </ul>
    </section><!-- / gm fixed width container -->
</section><!-- / contact -->
