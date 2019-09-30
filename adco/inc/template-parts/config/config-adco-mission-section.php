<?php
/**
 * ADCO.us - Mission Section Configuration
 *
 * Configuration firle for Mission Section
 *
 * @version 1.0.0
 * @package adco
 */

 if( ! defined( 'ABSPATH' ) ) {
   exit;
 }

 /**
  * Option
  */
  $option = get_option( 'adco-mission-section' );

  ?>
  <table class="form-table">
    <tr valign="top">
      <th scope="row"><p>Mission Section</p></th>
    </tr>

    <tr valign="top">
      <th scope="row">Title</th>
      <td><input type="text" name="adco-mission-section[title]" value="<?php echo esc_attr( $option['title'] ); ?>" /></td>
    </tr>

    <tr valign="top">
      <th scope="row">Subtitle</th>
      <td><input type="text" name="adco-mission-section[subtitle]" value="<?php echo esc_attr( $option['subtitle'] ); ?>" /></td>
    </tr>

    <tr valign="top">
      <th scope="row">Content</th>
      <td><textarea name="adco-mission-section[content]"><?php echo esc_textarea( $option['content'] ); ?></textarea></td>
    </tr>
  </table>
