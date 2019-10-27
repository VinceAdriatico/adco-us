<?php
/**
 * ADCO.us - Contact Section
 *
 * Template for Home Page
 *
 * @version 1.0.0
 * @package adco-us
 */

 if( ! defined( 'ABSPATH' ) ) {
   exit;
 }

 /**
  * Options
  */
  $option = get_option( 'adco-contact-section' );

 ?>
 <table class="form-table">
   <tr valign="top">
     <th scope="row"><p>Contact Section</p></th>
   </tr>

   <tr valign="top">
     <th scope="row">Title</th>
     <td><input type="text" name="adco-contact-section[title]" value="<?php echo esc_attr( $option['title'] ); ?>" /></td>
   </tr>

   <tr valign="top">
     <th scope="row">Content</th>
     <td><textarea name="adco-contact-section[content]"><?php echo esc_textarea( $option['content'] ); ?></textarea></td>
   </tr>

   <tr valign="top">
     <th scope="row">Shortcode</th>
     <td><input type="text" name="adco-contact-section[shortcode]" value="<?php echo esc_attr( $option['shortcode'] ); ?>" /></td>
   </tr>

   <tr valign="top">
     <th scope="row">Gradient Color 1</th>
     <td><input type="text" name="adco-contact-section[gradient-1]" value="<?php echo esc_attr( $option['gradient-1'] ); ?>" /></td>
   </tr>

   <tr valign="top">
     <th scope="row">Gradient Color 2</th>
     <td><input type="text" name="adco-contact-section[gradient-2]" value="<?php echo esc_attr( $option['gradient-2'] ); ?>" /></td>
   </tr>
 </table>
