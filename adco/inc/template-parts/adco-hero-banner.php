<?php
/**
 * ADCO.us - Hero Banner
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
 $company = get_bloginfo( 'display' );
 $internal = get_option( 'internal' );
 $tagline = get_bloginfo( 'description' );
 $option = get_option( 'adco-hero-banner' );

 /**
  * Parts
  */
?>
<section class="home-section hero contain" style="background-image: url(<?php echo $option['bg']; ?>);">
  <?php echo $option['svg']; ?>
  <span>
    <h1><?php echo $internal['company-name']; ?></h1>
    <p><?php echo $tagline; ?></p>
  </span>
</section>
