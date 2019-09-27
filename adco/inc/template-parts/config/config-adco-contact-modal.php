<?php
/**
 * ADCO.us - Contact Modal Configuration
 *
 * Configuration File for Contact Modal
 *
 * @version 1.0.0w
 * @package adco
 */

 if( ! defined( 'ABSPATH' ) ) {
   exit;
 }

 /**
  * Options
  */
  $option = get_option( 'adco-contact-modal' );

  ?>
  <table class="form-table">
    <tr valign="top">
      <th scope="row"><h3>Contact Modal</h3></th>
    </tr>

    <tr valign="top">
      <th scope="row">Title</th>
      <td><input type="text" name="adco-contact-modal[title]" value="<?php echo esc_attr( $option['title'] ); ?>" /></td>
    </tr>

    <tr valign="top">
      <th scope="row">Shortcode</th>
      <td><input type="text" name="adco-contact-modal[shortcode]" value="<?php echo esc_attr( $option['shortcode'] ); ?>" /></td>
    </tr>
  </table>
