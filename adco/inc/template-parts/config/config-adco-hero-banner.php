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
      <th scope="row">Background Image</th>
      <td><input type="url" name="adco-hero-banner[bg]" value="<?php echo esc_url( $option['bg'] ); ?>" /></td>
    </tr>

    <tr valign="top">
      <th scope="row">Main SVG</th>
      <td><textarea name="adco-hero-banner[svg]" style="height: 250px"><?php echo esc_textarea( $option['svg'] ); ?></textarea></td>
    </tr>

    <tr valign="top">
      <th scope="row">First Icon</th>
      <td><input type="url" name="adco-hero-banner[first-icon]" value="<?php echo esc_url( $option['first-icon'] ); ?>" /></td>
    </tr>

    <tr valign="top">
      <th scope="row">Second Icon</th>
      <td><input type="url" name="adco-hero-banner[second-icon]" value="<?php echo esc_url( $option['second-icon'] ); ?>" /></td>
    </tr>
  </table>
