<?php
/**
 * ADCO.us - Hero Banner Configuration
 *
 * Configuration file for Hero Banner
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
  $option = get_option( 'adco-hero-banner' );

  ?>
  <table class="form-table">
    <tr valign="top">
      <th scope-"row"><p>Hero Banner</p></th>
    </tr>

    <tr valign="top">
      <th scope="row">Background - SVG</th>
      <td><input type="url" name="adco-hero-banner[bg]" value="<?php echo esc_url( $option['bg'] ); ?>" /></td>
    </tr>

    <tr valign="top">
      <th scope="row">Main SVG</th>
      <td><textarea name="adco-hero-banner[svg]" cols="10" rows="10"><?php echo esc_textarea( $option['svg'] ); ?></textarea></td>
    </tr>
  </table>
