<?php
/**
 * ADCO.us - CTA 1
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
  $option = get_option( 'adco-cta-1' );

  // Parts
  $btn = hero_btn( false, 'contactModal', '', esc_attr( $option['txt'] ), '' );

 ?>
<section class="home-section action">
  <h2><?php echo $option['title']; ?></h2>
  <?php echo $btn; ?>
</section>
