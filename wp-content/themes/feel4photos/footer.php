<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.2
 */

?>

            <section class="o-overlay--05 c-hblog u-topbottom-pad-50 white-text parallax-container wow fadeInUp">
                <section class="container u-left-pad u-right-pad">
                    <div class="row">
                        <div class="col s12 l8">
                            <div class="card">
                                <div class="card-content u-width80">
                                    <h2 class="card-title c-title c-title--border-bottom c-title--border-hlight-color c-hblog__title u-uppercase u-no-topmargin">
                                        <span class="u-capitalize u-smallertxt u-bauhaus-ffamily">Our Fashion</span>
                                        Concepts
                                    </h2>
                                    <div class="c-hblog__desc">
                                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <a href="javascript:void(0);" title="More" class="c-hblog__mlink">More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 l4"></div>
                    </div>
                </section><!-- / gm fixed width container -->
                <section class="c-hblog__featureimg parallax">
                    <img src="images/blog-bg2.jpg" alt="">
                </section><!-- / feature image holder -->
            </section><!-- / blog in home page -->

            <?php echo get_template_part( 'template-parts/common/common', 'getintouch' ); ?>
		</section><!-- / main content area -->

		<footer id="colophon" class="o-dark c-footer u-height100 u-topbottom-pad-50 u-left-pad u-right-pad valign-wrapper u-bauhaus-ffamily wow fadeInUp" role="main-footer">
            <section class="container">
                <div class="c-footer__logo u-footer-gap">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>">
                        <img src="<?php echo get_option( 'logo_mobile' ); ?>" alt="<?php bloginfo('name'); ?>">
                    </a>
                </div><!-- / footer logo -->
                <div class="c-footer__email u-linkhlight u-footer-gap">
                    <a href="mailto:<?php echo get_option('emailLink1');?>" title="<?php echo get_option('emailLink1');?>"><?php echo get_option('emailLink1');?></a>
                </div><!-- / footer email -->

                <ul class="u-linkhlight">
                    <?php echo get_template_part( 'template-parts/common/contact', 'number' ); ?><!-- / footer tel -->
                </ul>

                <?php get_template_part( 'template-parts/footer/footer', 'nav' ); ?><!-- / footer nav partial -->

                <?php echo get_template_part( 'template-parts/common/copyright', 'section' ); ?><!-- / footer copyright -->
                <div class="c-footer__social c-social">
                    <?php echo get_template_part( 'template-parts/common/social', 'platforms' ); ?>
                </div><!-- / footer social links -->
            </section><!-- / gm fixed width container -->
        </footer><!-- / footer -->

        <a href="javascript:void(0);" id="scroll" class="btn btn-floating pulse c-arrowbtn c-arrowbtn--scrolltop o-hlight u-fixed" title="Scroll to Top" style="display: none;">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </a><!-- / scroll to top button -->
	</section><!-- / whole document area -->

<?php wp_footer(); ?>
</body>
</html>
