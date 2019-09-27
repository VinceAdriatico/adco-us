<?php
/**
 * ADCO.us - Theme Section Configuration
 *
 * Template for Theme Section
 *
 * @version 1.0.0
 * @package adco
 */

 if( ! defined( 'ABSPATH' ) ) {
   exit;
 }

 /**
  * Options
  */
  $option = get_option( 'adco-theme-section' );
  ?>
  <table class="form-table">
    <tr valign="top">
      <th scope="row"><h3>Theme Section</h3></th>
    </tr>

    <tr valign="top">
      <th scope="row">Title</th>
      <td><input type="text" name="adco-theme-section[title]" value="<?php echo esc_attr( $option['title'] ); ?>" /></td>
    </tr>

    <tr valign="top">
      <th scope="row">Link</th>
      <td><input type="url" name="adco-theme-section[link]" value="<?php echo esc_url( $option['link'] ); ?>" /></td>
    </tr>
  </table>
