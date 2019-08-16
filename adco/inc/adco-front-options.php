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

     // Hero Banner
     register_setting( 'adco_front', 'hero-banner-title' );
  }

  /**
   * Front Page Options
   */
   function adco_front_options() { ?>
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
        do_settings_sections( 'adco_front' ); ?>
        <table class="form-table">
          <!--- Hero Banner -->
          <tr valign="top">
            <th scope="row"><h5>Hero Banner</h5></th>
          </tr>

          <tr valign="top">
            <th scope="row">Title</th>
            <td><input type="text" name="hero-banner-title" value="<?php echo esc_attr( get_option( 'hero-banner-title' ) ); ?>" /></td>
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
