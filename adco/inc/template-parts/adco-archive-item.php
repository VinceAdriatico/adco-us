<?php
/**
 * ADCO.us - Archive Page item
 *
 * Template for Archive Page
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
  $title = get_the_title();
  $img = get_the_post_thumbnail_url();
  $id = get_post_thumbnail_id( $post->ID );
  $alt = get_post_meta( $id, '_wp_attachment_image_alt', true );


?>
<li>
  <img src="<?php echo $img; ?>" alt="<?php echo $alt; ?>" />
  <p><?php echo get_the_excerpt(); ?></p>
</li>
