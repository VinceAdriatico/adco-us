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

   /**
    * Breadcrumbs
    *
    * @src https://gist.github.com/tinotriste/5387124
    */
    if( ! function_exists( 'the_breadcrumb' ) ) {
      function the_breadcrumb() {
       $sep = ' > ';
       if (!is_front_page()) {

      // Start the breadcrumb with a link to your homepage
           echo '<div class="breadcrumbs">';
           echo '<a href="';
           echo get_option('home');
           echo '">';
           bloginfo('name');
           echo '</a>' . $sep;

      // Check if the current page is a category, an archive or a single page. If so show the category or archive name.
           if (is_category() || is_single() ){
               the_category('title_li=');
           } elseif (is_archive() || is_single()){
               if ( is_day() ) {
                   printf( __( '%s', 'text_domain' ), get_the_date() );
               } elseif ( is_month() ) {
                   printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
               } elseif ( is_year() ) {
                   printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
               } else {
                   _e( 'Blog Archives', 'text_domain' );
               }
           }

      // If the current page is a single post, show its title with the separator
           if (is_single()) {
               echo $sep;
               the_title();
           }

      // If the current page is a static page, show its title.
           if (is_page()) {
               echo the_title();
           }

      // if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
           if (is_home()){
               global $post;
               $page_for_posts_id = get_option('page_for_posts');
               if ( $page_for_posts_id ) {
                   $post = get_page($page_for_posts_id);
                   setup_postdata($post);
                   the_title();
                   rewind_posts();
               }
           }
           echo '</div>';
       }
      }      
    }
