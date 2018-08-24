<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.0
 */

?>

<section class="u-fixed u-top-0 o-brand c-brand">
	<div class="u-relative">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo-container" class="o-logo c-brand__logo left-align white-text" title="<?php bloginfo('name'); ?>">
		    <img src="<?php echo get_option( 'header_logo' ); ?>" alt="<?php bloginfo('name'); ?>">
		</a><!-- / logo -->

		<div class="c-brand__cta">
		    <a href="javascript:void(0);" class="o-search right-align white-text search-overlay">
		        <!-- <i class="fa fa-search" aria-hidden="true"></i> -->
		        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 512 512" enable-background="new 0 0 512 512" width="25px" height="25px">
				  <g>
				    <path d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z" fill="#FFFFFF"/>
				  </g>
				</svg>
		    </a><!-- / search icon -->
		    <a href="javascript:void(0);" class="o-mainnav right-align white-text toggle-overlay">
		        <!-- <i class="fa fa-bars" aria-hidden="true"></i> -->
		        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="25px" height="25px">
					<g>
						<g>
							<path d="M491.318,235.318H20.682C9.26,235.318,0,244.577,0,256s9.26,20.682,20.682,20.682h470.636    c11.423,0,20.682-9.259,20.682-20.682C512,244.578,502.741,235.318,491.318,235.318z" fill="#FFFFFF"/>
						</g>
					</g>
					<g>
						<g>
							<path d="M491.318,78.439H20.682C9.26,78.439,0,87.699,0,99.121c0,11.422,9.26,20.682,20.682,20.682h470.636    c11.423,0,20.682-9.26,20.682-20.682C512,87.699,502.741,78.439,491.318,78.439z" fill="#FFFFFF"/>
						</g>
					</g>
					<g>
						<g>
							<path d="M491.318,392.197H20.682C9.26,392.197,0,401.456,0,412.879s9.26,20.682,20.682,20.682h470.636    c11.423,0,20.682-9.259,20.682-20.682S502.741,392.197,491.318,392.197z" fill="#FFFFFF"/>
						</g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
				</svg>
		    </a><!-- / main nav icon -->
		</div><!-- / search and nav icon -->
	</div>
</section><!-- / logo + menu + search area -->


