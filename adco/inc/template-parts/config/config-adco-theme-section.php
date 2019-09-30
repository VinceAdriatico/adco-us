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
      <th scope="row"><p>Theme Section</p></th>
    </tr>

    <tr valign="top">
      <th scope="row">Title</th>
      <td><input type="text" name="adco-theme-section[title]" value="<?php echo esc_attr( $option['title'] ); ?>" /></td>
    </tr>

    <tr valign="top">
      <th scope="row">Btn Text</th>
      <td><input type="text" name="adco-theme-section[txt]" value="<?php echo esc_attr( $option['txt'] ); ?>" /></td>
    </tr>

    <tr valign="top">
      <th scope="row">Link</th>
      <td><input type="url" name="adco-theme-section[link]" value="<?php echo esc_url( $option['link'] ); ?>" /></td>
    </tr>
  </table>
