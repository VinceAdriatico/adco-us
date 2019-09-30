<?php
/**
 * ADCO.us - Mission Section
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
  $option = get_option( 'adco-mission-section' );
?>
<section class="home-section mission">
  <h1><?php echo esc_attr( $option['title'] ); ?></h1>
  <h5><?php echo esc_attr( $option['subtitle'] ); ?></h5>
  <p><?php echo esc_attr( $option['content'] ); ?></p>
</section>
