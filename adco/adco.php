<?php
/**
 * ADCO.us General Theme
 *
 * @version 1.0.0
 * @package adco
 */

 if( ! defined( 'ABSPATH' ) ) {
   exit;
 }

 /**
  * Define ADCO Path
  */
  if( ! defined( 'ADCO_INC' ) ) {
    define( 'ADCO_INC', dirname(__FILE__) . '/inc/' );
  }

  require_once ADCO_INC . 'adco-core-functions.php';
