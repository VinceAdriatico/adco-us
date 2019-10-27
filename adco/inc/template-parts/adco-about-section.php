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
<section class="home-section about contain" style="background-image: linear-gradient(to bottom, rgba(0,0,0, 1) 0%, rgba(0,0,0, 0.7) 40%, rgba(0,0,0, 0.1) 100%), url(<?php echo $img; ?>)">
  <h1 class="title"><?php echo $option['title']; ?></h1>
  <?php echo $option['content']; ?>
</section>
