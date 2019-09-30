<?php
/**
 * ADCO.us - Process Section Configuration
 *
 * Configuration file for Process Section
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
  $option = get_option( 'adco-process-section' );

  ?>
  <table class="form-table">
    <tr valign="top">
      <th scope="row"><p>Process Section</p></th>
    </tr>

    <tr valign="top">
      <th scope="row">Title</th>
      <td><input type="text" name="adco-process-section[title]" value="<?php echo $option['title']; ?>" /></td>
    </tr>

    <tr valign="top">
      <th scope="row">Subtitle</th>
      <td><input type="text" name="adco-process-section[subtitle]" value="<?php echo $option['subtitle']; ?>" /></td>
    </tr>

    <tr valign="top">
      <th scope="row">Post Type</th>
      <td><input type="text" name="adco-process-section[post_type]" value="<?php echo $option['post_type']; ?>" /></td>
    </tr>
  </table>
