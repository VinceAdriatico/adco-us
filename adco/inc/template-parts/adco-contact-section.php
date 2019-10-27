<?php
/**
 * ADCO.us - Contact Section
 *
 * Template for Home Page
 *
 * @version 1.0.0
 * @package adco-us
 */

 if( ! defined( 'ABSPATH' ) ) {
   exit;
 }

 /**
  * Options
  */
  $option = get_option( 'adco-contact-section' );
?>
<section class="home-section contact contain" style="background-image: linear-gradient(to bottom, <?php echo $option['gradient-1']; ?> 0%, <?php echo $option['gradient-1']; ?> 50%, <?php echo $option['gradient-2']; ?> 51%, <?php echo $option['gradient-2']; ?> 100% );">
  <div class="header">
    <h3><?php echo $option['title']; ?></h3>
    <p><?php echo $option['content']; ?>
  </div>
  <div class="content">
    <?php echo do_shortcode( $option['shortcode'] ); ?>
  </div>
</section>
