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
        'manage_options',      // Capability
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
       * Registered Settings
       */
       register_setting( 'acdo_main', 'general' );
       register_setting( 'adco_main', 'internal' );
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
             $internal = get_option( 'internal' );
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
                 <th scope="row">Default Image</th>
                 <td><input type="url" name="general[thumbnail]" value="<?php echo esc_url( $general['thumbnail'] ); ?>" /></td>
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
                 <th scope="row">Name Icon</th>
                 <td><input type="url" name="general[name-icon]" value="<?php echo esc_url( $general['name-icon'] ); ?>" /></td>
               </tr>

               <tr valign="top">
                 <th scope="row">E-Mail Icon</th>
                 <td><input type="url" name="general[email-icon]" value="<?php echo esc_url( $general['email-icon'] ); ?>" /></td>
               </tr>

               <tr valign="top">
                 <th scope="row">Phone Icon</th>
                 <td><input type="url" name="general[phone-icon]" value="<?php echo esc_url( $general['phone-icon'] ); ?>" /></td>
               </tr>

               <tr valign="top">
                 <th scope="row"><h1>Internal</h1>
               </tr>

               <tr valign="top">
                 <th scope="row">Name Icon</th>
                 <td><input type="url" name="internal[name-icon]" value="<?php echo esc_url( $internal['name-icon'] ); ?>" /></td>
               </tr>

               <tr valign="top">
                 <th scope="row">E-Mail Icon</th>
                 <td><input type="url" name="internal[email-icon]" value="<?php echo esc_url( $internal['email-icon'] ); ?>" /></td>
               </tr>

               <tr valign="top">
                 <th scope="row">
               </tr>

               <tr valign="top">
                 <th scope="row">Default Thumbnail</th>
                 <td><input type="url" name="internal[thumb]" value="<?php echo esc_url( $internal['thumb'] ); ?>" /></td>
               </tr>

               <tr valign="top">
                 <th scope="row">Linear Gradient 1</th>
                 <td><input type="text" name="internal[linear-gradient-1]" value="<?php echo esc_attr( $internal['linear-gradient-1'] ); ?>" /></td>
               </tr>

               <tr valign="top">
                 <th scope="row">Linear Gradient 2</th>
                 <td><input type="text" name="internal[linear-gradient-2]" value="<?php echo esc_attr( $internal['linear-gradient-2'] ); ?>" /></td>
               </tr>

               <tr valign="top">
                 <th scope="row">Blog Title</th>
                 <td><input type="text" name="internal[blog-title]" value="<?php echo esc_attr( $internal['blog-title'] ); ?>" /></td>
               </tr>

               <tr valign="top">
                 <th scope="row">Blog Background</th>
                 <td><input type="url" name="internal[blog-bg]" value="<?php echo esc_url( $internal['blog-bg'] ); ?>" /></td>
               </tr>

               <tr valign="top">
                 <th scope="row">Archive Background</th>
                 <td><input type="url" name="internal[archive-bg]" value="<?php echo esc_url( $internal['archive-bg'] ); ?>" /></td>
               </tr>

               <tr valign="top">
                 <th scope="row">404 Background</th>
                 <td><input type="url" name="internal[error-bg]" value="<?php echo esc_url( $internal['error-bg'] ); ?>" /></td>
               </tr>

               <tr valign="top">
                 <th scope="row">Search Background</th>
                 <td><input type="url" name="internal[search-bg]" value="<?php echo esc_url( $internal['search-bg'] ); ?>" /></td>
               </tr>

               <tr valign="top">
                 <th scope="row">404 Text</th>
                 <td><input type="text" name="internal[error-title]" value="<?php echo esc_attr( $internal['error-title'] ); ?>" /></td>
               </tr>

               <tr valign="top">
                 <th scope="row"><h3>Footer</h3></th>
               </tr>

               <tr valign="top">
                 <th scope="row">Title</th>
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
