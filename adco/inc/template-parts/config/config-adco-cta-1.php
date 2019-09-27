<?php
/**
 * ADCO.us - CTA 1 Configuration
 *
 * Configuration file for CTA 1
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
  $option = get_option( 'adco-cta-1' );
  ?>
  <table class="form-table">
    <tr valign="top">
      <th scope="row"><h3>CTA 1</h3></th>
    </tr>

    <tr valign="top">
      <th scope="row">Shortcode</th>
      <td><input type="text" name="adco-cta-1[text]" value="<?php echo esc_attr( $option['text'] ); ?>" /></td>
    </tr>
  </table>
