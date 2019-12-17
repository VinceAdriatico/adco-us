<?php
/**
 * ADCO.us - Main Section Configuration File
 *
 * Configuration file for  Main Section
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
  $option = get_option( 'adco-main-section' );

 ?>
 <table class="form-table">
   <tr valign="top">
     <th scope="row">Main Section</th>
   </tr>

   <tr valign="top">
     <th scope="row">Icon</th>
     <td><textarea name="adco-main-section[icon]" style="height: 250px"><?php echo esc_textarea( $option['icon'] ); ?></textarea></td>
   </tr>

   <tr valign="top">
     <th scope="row">Title</th>
     <td><input type="text" name="adco-main-section[title]" value="<?php echo esc_attr( $option['title'] ); ?>" /></td>
   </tr>
 </table>
