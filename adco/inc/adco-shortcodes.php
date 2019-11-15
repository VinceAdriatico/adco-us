<?php
/**
 * ADCO Shortcodes
 *
 * @version 1.0.0
 * @package adco
 */

 if( ! defined( 'ABSPATH' ) ) {
   exit;
 }


if( ! function_exists( 'adco_icons' ) ) {
  function adco_icons( $atts ) {
    $a = shortcode_atts( array(
      'icon'    => ''
    ), $atts );
    $icon = $a['icon'];

    /**
     * Options
     */
    $general = get_option( 'general' );
    $company = get_bloginfo( 'display' );

    if( $icon == 'name' ) {

      // Name Icon
      $img = $general['name-icon'];

      // Alt Tag
      $alt = "$company Name Icon";

    } else if( $icon == 'e-mail' ) {

      // Email Icon
      $img = $general['email-icon'];

      // Alt Tag
      $alt = "$company E-Mail Icon";

    } else if( $icon == 'phone' ) {

      // Phone Icon
      $img = $general['phone-icon'];

      // Alt Tag
      $alt = "$company Phone Icon";

    } else {

      $img = '';
    }

    $content = "<img src='$img' alt='$alt' />";

    return $content;
  }
  add_shortcode( 'acdoIcons', 'adco_icons' ); 
}
