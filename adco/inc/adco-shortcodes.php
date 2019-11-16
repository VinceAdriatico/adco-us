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
    $internal = get_option( 'internal' );
    $company = get_bloginfo( 'display' );

    if( $icon == 'name' ) {

      // Name Icon
      $img = $internal['name-icon'];

      // Alt Tag
      $alt = "$company Name Icon";

    } else if( $icon == 'e-mail' ) {

      // Email Icon
      $img = $internal['email-icon'];

      // Alt Tag
      $alt = "$company E-Mail Icon";

    } else if( $icon == 'phone' ) {

      // Phone Icon
      $img = $internal['phone-icon'];

      // Alt Tag
      $alt = "$company Phone Icon";

    } else {

      $img = '';
    }

    $content = "<img src='$img' alt='$alt' />";

    return $content;
  }
  add_shortcode( 'adcoIcons', 'adco_icons' );
}
