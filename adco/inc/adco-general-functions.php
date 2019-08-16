<?php
/**
 * ADCO General Functions
 *
 * @version 1.0.0
 * @package adco
 */

 if( ! defined( 'ABSPATH' ) ) {
   exit;
 }

 /**
  * WebP Variation
  *
  * @since 1.0.0
  *
  * @return string
  */
  if( ! function_exists( 'image_webp' ) ) {
    function image_webp( $webp = '', $one ) {

       if( strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) {

         // WebP Supported
         $image = $webp;

       } elseif( $webp == '' ) {

         // WebP Unavailable
         $image = $one;

       } else {

         // Not Specified
         $image = $one;
       }
       return $image;
    }
  }

  /**
   * Replace First Instance
   *
   * @since 1.0.0
   *
   * @return string
   */
   if( ! function_exists( 'str_replace_first' ) ) {
     function str_replace_first($from, $to, $content) {
         $from = '/'.preg_quote($from, '/').'/';

         return preg_replace($from, $to, $content, 1);
     }
   }
