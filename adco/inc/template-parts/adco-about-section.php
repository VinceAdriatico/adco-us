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
<section class="home-section about contain" <?php if( wp_is_mobile() ) { ?>style="background-image: url(<?php echo $img; ?>)"<?php } ?>>
  <h1 class="title"><?php echo $option['title']; ?></h1>
  <?php echo $option['content']; ?>
</section>
