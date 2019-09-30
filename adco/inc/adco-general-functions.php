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
  * Hero Btn
  *
  * General Hero Button
  *
  * @since 1.0.0
  *
  * @return string
  */
  if( ! function_exists( 'hero_btn' ) ) {
    function hero_btn( $format = true, $href = '#', $rel = '', $text = '', $class = '' ) {
      /**
       * Generated Tag
       */
       if( $format ) {

         // General
         $tag = "<a href='$href' title='$title' rel='$rel' class='waves-effect waves-light btn hero-btn $class'>$text</a>";

       } else {

         // Modal
         $tag = "<a data-target='#$href', rel='nofollow $rel' class='waves-effect waves-light btn hero-btn $class'>$text</a>";
       }

       return $tag;
    }
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
