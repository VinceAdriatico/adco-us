<?php
/**
 * ADCO.us - About Section
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
  $option = get_option( 'adco-about-section' );

  // Parts
  $img = image_webp( $option['webp'], $option['bg'] );
?>
<section class="home-section about" style="background-image: url(<?php echo $img; ?>)">
  <h1><?php echo $option['title']; ?></h1>
  <p><?php echo $option['content']; ?></p>
</section>
