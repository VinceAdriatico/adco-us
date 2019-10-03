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
 * Limit Text
 */
 if( ! function_exists( 'limit_text' ) ) {
   function limit_text($text, $limit) {
         if (str_word_count($text, 0) > $limit) {
             $words = str_word_count($text, 2);
             $pos = array_keys($words);
             $text = substr($text, 0, $pos[$limit]) . '...';
         }
         return $text;
   }
 }

 /**
  * Short Content
  *
  * @version 1.0.0
  *
  * @return string
  */
  if( ! function_exists( 'adco_short_content' ) ) {
    function adco_short_content( $more_link_text = null, $strip_teaser = false ) {
      $content = wp_trim_words(
        get_the_content( $more_link_text, $strip_teaser ),
        55,
        ' ...'
      );
      /**
       * Filters the post content.
       *
       * @since 0.71
       *
       * @param string $content Content of the current post.
       */
      $content = apply_filters( 'the_content', $content );
      $content = str_replace( ']]>', ']]&gt;', $content );
      echo $content;
    }
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
