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
<section class="home-section contact">
    <div class="content">
      <div class="head">
      <h2 class="header title"><?php echo $option['title']; ?></h2>
      </div>
      <p><?php echo $option['content']; ?>
        <?php echo do_shortcode( $option['shortcode'] ); ?>
    </div>
</section>
