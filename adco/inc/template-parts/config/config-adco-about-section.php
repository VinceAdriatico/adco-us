<?php
/**
 * ADCO.us - About Section Configuration
 *
 * Configuration file for About Section
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
 $option = get_option( 'adco-about-section' );

 ?>
 <table class="form-table">
   <tr valign="top">
     <th scope="row"><h3>About Section</h3></th>
   </tr>

   <tr valign="top">
     <th scope="row">Background - JPG</th>
     <td><input type="url" name="adco-about-section[bg]" value="<?php echo esc_url( $option['bg'] ); ?>" /></td>
   </tr>

   <tr valign="top">
     <th scope="row">Background - WebP</th>
     <td><input type="url" name="adco-about-section[webp]" value="<?php echo esc_url( $option['webp'] ); ?>" /></td>
   </tr>

   <tr valign="top">
     <th scope="row">Title</th>
     <td><input type="text" name="adco-about-section[title]" value="<?php echo esc_attr( $option['title'] ); ?>" /></td>
   </tr>

   <tr valign="top">
     <th scope="row">Content</th>
     <td><textarea name="adco-about-section[content]"><?php echo esc_textarea( $option['content'] ); ?></textarea></td>
   </tr>
 </table>
