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
    * Template Parts
    */
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
         adco_get_template( 'config/config/config-adco-hero-banner.php' );
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
      function acdo_mission_section_config() {
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
         adco_get_template( 'adco-process-section.php' )
      }
    }
    // Configuration File
    if( ! function_exists( 'adco_process_section_config' ) ) {
      function adco_process_section_config() {
        /**
         * Get Process Section Configuration
         */
         adco_get_template( 'config/config-process-section.php' );
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
         adco_get_template( 'adco-theme-section.php' ):
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
         adco_get_template( 'adco-contact-modal.php' ):
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
