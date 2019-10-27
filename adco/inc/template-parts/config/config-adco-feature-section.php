<?php
/**
 * ADCO.us - Feature Section
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
  * Option
  */
  $option = get_option( 'adco-feature-section' );

?>
<table class="form-table">
  <tr valign="top">
    <th scope="row"><p>Feature Section</p></th>
  </tr>

  <tr valign="top">
    <th scope="row">Title</th>
    <td><input type="text" name="adco-feature-section[title]" value="<?php echo esc_attr( $option['title'] ); ?>" /></td>
  </tr>
</table>
