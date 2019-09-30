<?php
/**
 * ADCO.us - Contact Modal
 *
 * Template for Home Page
 *
 * @version 1.0.0
 * @package adco
 */

 if( ! defined( 'ABSPATH' ) ) {
   exit;
 }

/**
 * Options
 */
 $option = get_option( 'adco-contact-modal' );
?>
<div class="home-section modal" id="contactModal">
  <h4><?php echo $option['title']; ?></h4>
  <?php echo do_shortcode( $option['shortcode'] ); ?>
</div>
