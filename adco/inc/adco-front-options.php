<?php
/**
 * ADCO Front Options
 *
 * @version 1.0.0
 * @package adco
 */

 if( ! defined( 'ABSPATH' ) ) {
   exit;
 }

/**
 * Initialize Front Page Sub-Menu
 */
 function adco_front_menu() {
   add_submenu_page(
     'adco_options',        // Parent Slug
     'Home Page',           // Page Title
     'Home Page',           // Menu Title
     'manage_options',      // Capability
     'front_ext',           // Menu Slug
     'adco_front_options'   // Callback
   );
   add_action( 'admin_init', 'adco_front_settings' );
 }
 add_action( 'admin_menu', 'adco_front_menu' );

 /**
  * Register Settings
  */
  function adco_front_settings() {
    /**
     * Front Page Settings
     */
     register_setting( 'adco-front', 'adco-hero-banner' );
     register_setting( 'adco-front', 'adco-product-section' );
     register_setting( 'adco-front', 'adco-mission-section' );
     register_setting( 'adco-front', 'adco-process-section' );
     register_setting( 'adco-front', 'adco-cta-1' );
     register_setting( 'adco-front', 'adco-about-section' );
     register_setting( 'adco-front', 'adco-theme-section' );
     register_setting( 'adco-front', 'adco-contact-modal' );
  }

  /**
   * Front Page Options
   */
   function adco_front_options() {

     ?>
   <div class="wrap">
     <h1>Front Page Options</h1>
     <form method="post" action="options.php">
       <?php
       /**
        * Initialize form for theme options
        *
        * @see settings_fields() nonce, action & option_page
        * @see do_settings_sections() sections for option_group
        */
        settings_fields( 'adco_front' );
        do_settings_sections( 'adco_front' );

        // Display Front Page Setttings
        adco_hero_banner_config();
        adco_product_section_config();
        adco_mission_section_config();
        adco_process_section_config();
        adco_cta_1_config():
        adco_about_section_config();
        adco_theme_section_config();
        adco_contact_modal_config();


        /**
         * Submit Form
         */
         submit_button(); ?>
     </form>
   </div>
   <?php
   }
