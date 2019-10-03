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
  $mission = get_option( 'adco-mission-section' );
?>
<section class="home-section mission">
  <h1><?php echo esc_attr( $mission['title'] ); ?></h1>
  <sub><?php echo esc_attr( $mission['subtitle'] ); ?></sub>
  <p><?php echo esc_attr( $mission['content'] ); ?></p>
</section>
