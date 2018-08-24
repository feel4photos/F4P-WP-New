<?php
/**
 * Displays header search overlay
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.0
 */

?>
<div class="o-search-box o-header-ovrlay">
    <div class="outer-close search-overlay">
        <!-- <a class="close"><span></span></a> -->
        <a class="close">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" version="1.1" height="25px" viewBox="0 0 64 64" enable-background="new 0 0 64 64">
                <g>
                    <path fill="#FFFFFF" d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59   c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59   c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0   L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"/>
                </g>
            </svg>
        </a>
    </div><!-- / close button -->
    <section class="o-header-ovrlay__inner">
        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <label for="<?php echo $unique_id; ?>">
                <span class="screen-reader-text">
                    <?php echo _x( 'Search for:', 'label', 'feel4photos' ); ?>
                </span>
            </label>
            <input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'feel4photos' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
            <button type="submit" class="search-submit">
                <?php echo feel4photos_get_svg( array( 'icon' => 'search' ) ); ?>
                <span class="screen-reader-text">
                    <?php echo _x( 'Search', 'submit button', 'feel4photos' ); ?>
                </span>
            </button>
        </form>
    </section>
</div><!-- / search box -->
