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
