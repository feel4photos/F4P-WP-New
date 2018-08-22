<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.0
 */

?>

<section class="o-hlight c-about u-height100 u-height-inherit wow fadeInUp">
    <section class="container c-about__inner u-height100-prcnt">
        <div class="row u-height100-prcnt">
            <div class="col s12 l5 valign-wrapper o-white u-height100-prcnt hide-on-med-and-down c-equalhght">
                <div class="u-allpad-50 u-margin-0auto">
                    <img src="<?php echo get_option( 'logo_black' ); ?>" alt="<?php bloginfo('name'); ?>" class="c-about__logo responsive-img">
                </div>
            </div><!-- / large logo about us are -->
            <div class="col s12 l7 u-height100-prcnt c-equalhght">
            	<?php $pagedata=get_page(7); ?>
                <div class="card white-text u-topbottom-pad-50 u-left-pad u-right-pad c-about__hcontent">
					<div class="card-content u-width80">
                        <?php echo '<h2 class="card-title c-about__title c-title c-title--border-bottom c-title--border-base-color u-uppercase u-no-topmargin">'.$pagedata->post_title.'</h2>'; ?>
                        <div class="c-about__desc">
                            <?php echo wpautop($pagedata->post_excerpt); ?>
                        </div>
                    </div>
                    <div class="card-action u-no-padding">
                        <a href="<?php echo get_permalink(7); ?>" title="More" class="c-about__mlink c-btn c-btn--nobg c-btn--border-base c-btn--border-radius">More</a>
                    </div>
                </div>
                <?php ?>
            </div>
        </div>
    </section><!-- / gm fixed width container -->
</section><!-- / about -->
