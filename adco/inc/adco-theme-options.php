<?php
/**
 * ADCO Theme Options
 *
 * @version 1.0.0
 * @package adco
 */

 if( ! defined( 'ABSPATH' ) ) {
   exit;
 }

 /**
  * Initialize Theme Settings Menu
  */
  function adco_theme_menu() {
    add_menu_page(
        'Theme Settings',      // Page Title
        'Theme Settings',      // Menu Title
        'Capability',          // Capability
        'adco_options',        // Menu Slug
        '',                    // Callback Function
        '',                    // Icon
        3
    );
  }
  add_action( 'admin_menu', 'adco_theme_menu' );

  /**
   * Register Primary Settings
   */
   function adco_primary_menu() {
     add_submenu_page(
       'adco_options',        // Parent Slug
       'General Settings',    // Page Title
       'General Settings',    // Menu Title
       'manage_options',      // Capability
       'primary_ext',         // Menu Slug
       'adco_theme_options'   // Callback
     );
     add_action( 'admin_init', 'adco_theme_settings' );
   }
   add_action( 'admin_menu', 'adco_primary_menu' );

   /**
    * Register Primary Settings
    */
    function adco_theme_settings() {
      /**
       * General
       */
       register_setting( 'acdo_main', 'general' );
       register_setting( 'adco_main', 'footer' );
    }

    /**
     * Display Theme Options
     *
     * @callback adco_theme_options() called from adco_theme_menu()
     */
     function adco_theme_options() {
       ?>
     <div class="wrap">
       <h1>Primary Theme Options</h1>
       <form method="post" action="options.php">
         <?php
            /**
             * Initialize form for theme options
             *
             * @see settings_fields() nonce, action & option_page
             * @see do_settings_sections() sections for option_group
             */
             settings_fields( 'adco_main' );
             do_settings_sections( 'adco_main' );

             $general = get_option( 'general' );
             $footer = get_option( 'footer' );
             ?>
             <table class="form-table">
               <!--- General --->
               <tr valign="top">
                 <th scope="row"><h3>General</h3></th>
               </tr>

               <tr valign="top">
                 <th scope="row">Logo - SVG</th>
                 <td><input type="url" name="general[logo_svg]" value="<?php echo esc_url( $general['logo_svg'] ); ?>" /></td>
               </tr>

               <tr valign="top">
                 <th scope="row">Phone</th>
                 <td><input type="text" name="general[phone]" value="<?php echo esc_attr( $general['phone'] ); ?>" /></td>
               </tr>

               <tr valign="top">
                 <th scope="row">E-Mail</th>
                 <td><input type="text" name="general[email]" value="<?php echo esc_attr( $general['email'] ); ?>" /></td>
               </tr>

               <tr valign="top">
                 <th scope="row"><h3>Footer</h3></th>
               </tr>

               <tr valign="top">
                 <th scope="row">Title<th>
                 <td><input type="text" name="footer[title]" value="<?php echo esc_attr( $footer['title'] ); ?>" /></td>
               </tr>

               <tr valign="top">
                 <th scope="row">Content</th>
                 <td><textarea name="footer[content]"><?php echo esc_textarea( $footer['content'] ); ?></textarea></td>
               </tr>
             </table>
             <?php
                /**
                 * Submit Form
                 */
                 submit_button(); ?>
       </form>
     </div>
     <?php
     }

     /**
      * Enqueue Admin Scripts
      */
      function admin_core_files($hook) {

        /**
         * Only load on plugin pages
         */

        // Gather Plugin Page Hooks
        $theme_options = 'theme-settings_page_primay_ext';
        $front_options = 'theme-settings_page_front_ext';

        // Set as array
        $options = array( $theme_options, $front_options );

        // Check in array
        $optionsComp = in_array( $hook, $options );

        if($optionsComp != true ) {
            return;
        }
        // Register Admin CSS
        wp_enqueue_style(
            'admin-css',
            get_template_directory_uri() . '/css/admin.css'
        );
        $materialBox = "
            .material-box-shadow {
                box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            }";
        wp_add_inline_style( 'admin-css', $materialBox );
      }
      add_action( 'admin_enqueue_scripts', 'admin_core_files' );
