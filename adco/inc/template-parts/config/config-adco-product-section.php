<?php
/**
 * ADCO.us - Product Section Configuration
 *
 * Configuration file for Product Section
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
 $option = get_option( 'adco-product-section' );

 ?>
 <table class="form-table">
   <tr valign="top">
     <th scope="row"><p>Product Section</p></th>
   </tr>

   <tr valign="top">
     <th scope="row">Title</th>
     <td><input type="text" name="adco-product-section[title]" value="<?php echo esc_attr( $option['title'] ); ?>" /></td>
   </tr>

   <tr valign="top">
     <th scope="row">Subtitle</th>
     <td><input type="text" name="adco-product-section[subtitle]" value="<?php echo esc_attr( $option['subtitle'] ); ?>" /></td>
   </tr>

   <tr valign="top">
     <th scope="row">Post Type</th>
     <td><input type="text" name="adco-product-section[post_type]" value="<?php echo esc_attr( $option['post_type'] ); ?>" /></td>
   </tr>
 </table>
