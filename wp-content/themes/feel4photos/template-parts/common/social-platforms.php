<?php
/**
 * Displays all social platform icons
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.0
 */

?>
<?php if(get_option('facebook_link')) : ?>
    <a href="<?php echo get_option('facebook_link');?>" target="_blank" class="u-linkbase social facebook">
        <i class="fa fa-facebook"></i>
    </a>
<?php endif; ?>
<!-- <a href="javascript:void(0);" class="u-linkbase social twitter"><i class="fa fa-twitter"></i></a> -->
<?php if(get_option('instagram_link')) : ?>
    <a href="<?php echo get_option('instagram_link');?>" target="_blank" class="u-linkbase social instagram">
        <i class="fa fa-instagram"></i>
    </a>
<?php endif; ?>
<?php if(get_option('pinterest_link')) : ?>
    <a href="<?php echo get_option('pinterest_link'); ?>" target="_blank" class="u-linkbase social pinterest">
        <i class="fa fa-pinterest"></i>
    </a>
<?php endif; ?>
<?php if(get_option('behance_link')) : ?>
    <a href="<?php echo get_option('behance_link'); ?>" target="_blank" class="u-linkbase social behance">
        <i class="fa fa-behance"></i>
    </a>
<?php endif; ?>

