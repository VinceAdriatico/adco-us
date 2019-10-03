<?php
/**
 * ADCO Template Functions
 *
 * @version 1.0.0
 * @package adco
 */

 if( ! defined( 'ABSPATH' ) ) {
   exit;
 }

 /**
  * Locate Template
  *
  * Set the template file path
  *
  * @version 1.0.0
  *
  * @param string $template_name name of the template
  * @param string $template_path directory to search through
  */
 if( ! function_exists( 'adco_locate_template' ) ) {
   function adco_locate_template( $template_name, $template_path = '' ) {

       // Set Default Plugin Path
       if( ! $template_path ) :
           $template_path = get_template_directory() . '/adco/inc/template-parts/';
       endif;

       // Search Template file in folder
       $template = locate_template( array(
           $template_path . $template_name,
           $template_name
       ) );

       // Get Template File
       if( ! $template ) :
           $template = $template_path . $template_name;
       endif;


       /**
        * Apply Filters to Function
        *
        * @param array $template template path
        * @param string $template_name template name
        * @param string $template_path path to template
        */
       return apply_filters('adco_locate_template', $template, $template_name, $template_path );
   }
 }

 /**
  * Get Template
  *
  * Search for the template and include the file
  *
  * @version 1.0.0
  *
  * @see acive_locate_template()
  *
  * @param string $template_name Template to load
  * @param string $template_path default path for templates
  */
 if( ! function_exists( 'adco_get_template' ) ) {
   function adco_get_template( $template_name, $template_path = '') {

       /**
        * Set Path to File
        */
       $template_file = adco_locate_template( $template_name, $template_path );


       /**
        * Throw Error if doesn't exist
        */
       if ( ! file_exists( $template_file ) ) :
           _doing_it_wrong( __FUNCTION__, sprintf( '<code>%s</code> does not exist.', $template_file ), '1.0.0' );
           return;
       endif;

       include $template_file;
   }
 }

 if( ! function_exists( 'no_tab_wp_is_mobile' ) ) {
   function no_tab_wp_is_mobile() {
       static $is_mobile;

       if ( isset($is_mobile) )
           return $is_mobile;

       if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
           $is_mobile = false;
       } elseif (
           strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
           || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
           || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
           || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
           || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false ) {
               $is_mobile = true;
       } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false && strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') == false) {
               $is_mobile = true;
       } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') !== false) {
           $is_mobile = false;
       } else {
           $is_mobile = false;
       }

       return $is_mobile;
    }
  }

  /**
   * Generated Parts
   */
   if( ! function_exists( 'adco_error_header' ) ) {
     function adco_error_header() {
       $content = '';
       /**
        * Options
        */
        $internal = get_option( 'internal' );
        $bg = $internal['error-bg'];
        $title = $internal['error-title'];
        $home = get_home_url();
        $company = get_bloginfo('display');

        // Parts
        $open = "<div class='general header' style='background-image: linear-gradient( to right, $internal['linear-gradient-1'], $internal['linear-gradient-2'] ), url($bg);'>";
        $title = "<h1>$title</h1>";
        $link = "<a href='$home' title='$company' rel='home'>Go to Home</a>";

        // Concatenate Parts
        $content .= $open .= $title .= $link .= '</div>';

        echo $content;
     }
   }
   if( ! function_exists( 'adco_open_archive' ) ) {
     $content = '';
     if( is_page_template( 'home' ) ) {
       $class = 'home';
     } else {
       $class = 'archive';
     }
     $open = "<ul class='$class'>";

     // Concatenate
     $content .= $open;

     echo $content;
   }
   if( ! function_exists( 'adco_close_archive' ) ) {
     function adco_close_archive() {
       $content = '';
       $close = '</ul>';

       // Concatenate
       $content .= $close;

       echo $content;
     }
   }
   if( ! function_exists( 'adco_archive_title' ) ) {
     /**
      * Archive Header Parts
      */

      // Title
     the_archive_title( '<h1 class="page-title">', '</h1>' );

     // Description
     the_archive_description( '<div class="archive-description">', '</div>' );
   }
   if( ! function_exists( 'adco_general_header' ) ) {
     function adco_general_header() {
       $content = '';
       /**
        * Options
        */
        $title = get_the_title();
        $bg = get_the_post_thumbnail_url();
        $gra = get_option( 'internal' );
        $first = $gra['linear-gradient-1'];
        $second = $gra['linear-gradient-2'];

        // Parts
        $open = "<div class='general header' style='background-image: linear-gradient(to right, $first, $second ), url( $bg );'>";
        $titlet = "<h1>$title</h1>";
        $close = "</div>";

        // Concatenate Parts
        $content .= $open .= $titlet .= $close;

       echo $content;
     }
   }
   if( ! function_exists( 'adco_content' ) ) {
     function adco_content() {
       /**
        * Loop Content
        */
        the_content();
     }
   }

   /**
    * Template Parts
    */
    if( ! function_exists( 'adco_archive_header' ) ) {
      function adco_archive_header() {
        /**
         * Get Archive Header
         */
         adco_get_template( 'adco-archive-header.php' );
      }
    }
    if( ! function_exists( 'adco_blog_header' ) ) {
      function adco_blog_header() {
        /**
         * Get Blog Header
         */
         adco_get_template( 'adco-blog-header.php' );
      }
    }
    if( ! function_exists( 'adco_blog_item' ) ) {
      function adco_blog_item() {
        /**
         * Get Blog Item
         */
         adco_get_template( 'adco-blog-item.php' );
      }
    }
    if( ! function_exists( 'adco_archive_item' ) ) {
      /**
       * Get Archive Item
       */
       adco_get_template( 'adco-archive-item.php' );
    }
    if( ! function_exists( 'adco_sidebar' ) ) {
      function adco_sidebar() {
        /**
         * Get Sidebar
         */
         get_sidebar();
      }
    }
    if( ! function_exists( 'adco_breadcrumbs' ) ) {
      function adco_breadcrumbs() {
        /**
         * Get Breadcrumbs
         */
         adco_get_template( 'adco-breadcrumbs.php' );
      }
    }
    if( ! function_exists( 'adco_hero_banner' ) ) {
      function adco_hero_banner() {
        /**
         * Get Hero Banner
         */
         adco_get_template( 'adco-hero-banner.php' );
      }
    }
    // Configuration File
    if( ! function_exists( 'adco_hero_banner_config' ) ) {
      function adco_hero_banner_config() {
        /**
         * Get Hero Banner Configuration
         */
         adco_get_template( 'config/config-adco-hero-banner.php' );
      }
    }

    if( ! function_exists( 'adco_product_section' ) ) {
      function adco_product_section() {
        /**
         * Get Product Section
         */
         adco_get_template( 'adco-product-section.php' );
      }
    }
    // Configuration File
    if( ! function_exists( 'adco_product_section_config' ) ) {
      function adco_product_section_config() {
        /**
         * Get Product Section Configuration
         */
         adco_get_template( 'config/config-adco-product-section.php' );
      }
    }

    if( ! function_exists( 'adco_mission_section' ) ) {
      function adco_mission_section() {
        /**
         * Get Mission Section
         */
         adco_get_template( 'adco-mission-section.php' );
      }
    }
    // Configuration File
    if( ! function_exists( 'adco_mission_section_config' ) ) {
      function adco_mission_section_config() {
        /**
         * Get Mission Section Configuration
         */
         adco_get_template( 'config/config-adco-mission-section.php' );
      }
    }

    if( ! function_exists( 'adco_process_section' ) ) {
      function adco_process_section() {
        /**
         * Get Process Section
         */
         adco_get_template( 'adco-process-section.php' );
      }
    }
    // Configuration File
    if( ! function_exists( 'adco_process_section_config' ) ) {
      function adco_process_section_config() {
        /**
         * Get Process Section Configuration
         */
         adco_get_template( 'config/config-adco-process-section.php' );
      }
    }

    if( ! function_exists( 'adco_cta_1' ) ) {
      function adco_cta_1() {
        /**
         * Get CTA 1
         */
         adco_get_template( 'adco-cta-1.php' );
      }
    }
    // Configuration File
    if( ! function_exists( 'adco_cta_1_config' ) ) {
      function adco_cta_1_config() {
        /**
         * Get CTA 1 Configuration
         */
         adco_get_template( 'config/config-adco-cta-1.php' );
      }
    }

    if( ! function_exists( 'adco_about_section' ) ) {
      function adco_about_section() {
        /**
         * Get About Section
         */
         adco_get_template( 'adco-about-section.php' );
      }
    }
    // Configuration File
    if( ! function_exists( 'adco_about_section_config' ) ) {
      function adco_about_section_config() {
        /**
         * Get About Section Configuration
         */
         adco_get_template( 'config/config-adco-about-section.php' );
      }
    }

    if( ! function_exists( 'adco_theme_section' ) ) {
      function adco_theme_section() {
        /**
         * Get Theme Section
         */
         adco_get_template( 'adco-theme-section.php' );
      }
    }
    // Configuration File
    if( ! function_exists( 'adco_theme_section_config' ) ) {
      function adco_theme_section_config() {
        /**
         * Get Theme Section Configuration
         */
         adco_get_template( 'config/config-adco-theme-section.php' );
      }
    }

    if( ! function_exists( 'adco_contact_modal' ) ) {
      function adco_contact_modal() {
        /**
         * Get Contact Modal
         */
         adco_get_template( 'adco-contact-modal.php' );
      }
    }
    // Configuration File
    if( ! function_exists( 'adco_contact_modal_config' ) ) {
      function adco_contact_modal_config() {
        /**
         * Get Contact Modal Configuration
         */
         adco_get_template( 'config/config-adco-contact-modal.php' );
      }
    }
