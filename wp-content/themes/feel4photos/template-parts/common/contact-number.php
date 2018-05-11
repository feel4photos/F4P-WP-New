<?php
/**
 * Displays all contact number of Feel4photos
 *
 * @package WordPress
 * @subpackage Feel4_Photos
 * @since 1.0
 * @version 1.0
 */

?>

<li>
    <a href="tel:<?php echo get_option('phoneNumber');?>"><?php echo get_option('phoneNumber');?></a>
</li>
<li>
    <a href="tel:<?php echo get_option('mobileNumber1');?>"><?php echo get_option('mobileNumber1');?></a>
</li>
<li>
    <a href="tel:<?php echo get_option('mobileNumber2');?>"><?php echo get_option('mobileNumber2');?></a>
</li>
