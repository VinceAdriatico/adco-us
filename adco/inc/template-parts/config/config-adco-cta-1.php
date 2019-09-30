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
      <th scope="row"><p>CTA 1</p></th>
    </tr>

    <tr valign="top">
      <th scope="row">Title</th>
      <td><input type="text" name="adco-cta-1[title]" value="<?php echo esc_attr( $option['title'] ); ?>" /></td>
    </tr>

    <tr valign="top">
      <th scope="row">Modal Button Text</th>
      <td><input type="text" name="adco-cta-1[txt]" value="<?php echo esc_attr( $option['txt'] ); ?>" /></td>
    </tr>
  </table>
