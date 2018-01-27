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


		</section><!-- / main content area -->

		<footer id="colophon" class="o-dark c-footer u-height100 u-topbottom-pad-50 u-left-pad u-right-pad valign-wrapper u-bauhaus-ffamily wow fadeInUp" role="main-footer">
            <section class="container">
                <div class="c-footer__logo u-footer-gap">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>">
                        <img src="<?php echo get_option( 'logo_mobile' ); ?>" alt="<?php bloginfo('name'); ?>">
                    </a>
                </div><!-- / footer logo -->
                <div class="c-footer__email u-linkhlight u-footer-gap">
                    <a href="mailto:contact@feel4photos.com" title="contact@feel4photos.com">contact@feel4photos.com</a>
                </div><!-- / footer email -->
                <div class="c-footer__tel u-footer-gap">
                    <p><a href="tel:9830027039" class="u-linkhlight">9830027039</a></p>
                    <p><a href="tel:9477218643" class="u-linkhlight">9477218643</a></p>
                    <p><a href="tel:7044443318" class="u-linkhlight">7044443318</a></p>
                </div><!-- / footer tel -->

                <?php get_template_part( 'template-parts/footer/footer', 'nav' ); ?><!-- / footer nav partial -->

                <div class="c-footer__copyright u-uppercase u-txtgrey">
                    <p>copyright &copy; 2018 <?php bloginfo('name'); ?></p>
                </div><!-- / footer copyright -->
                <div class="c-footer__social c-social">
                    <a href="https://www.facebook.com/feel4photos" target="_blank" class="u-linkbase social facebook"><i class="fa fa-facebook"></i></a>
                    <!-- <a href="javascript:void(0);" class="u-linkbase social twitter"><i class="fa fa-twitter"></i></a> -->
                    <a href="https://www.instagram.com/feel4photos/" target="_blank" class="u-linkbase social instagram"><i class="fa fa-instagram"></i></a>
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
