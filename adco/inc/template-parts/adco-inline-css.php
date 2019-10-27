<?php
/**
 * ADCO.us - Inline CSS
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
  $hero = get_option( 'adco-hero-banner' );

 ?>
 <style>
  .home-section.hero svg:after {
    height: 25vh;
    width: 25vw;
    content: 'test';
  }
 </style>
