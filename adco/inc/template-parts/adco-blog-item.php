<?php
/**
 * ADCO.us - Blog Item
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
  $id = get_post_thumbnail_id( $post->ID );
  $alt = get_post_meta( $id, '_wp_attachment_image_alt', true );
  $int = get_option('internal');
  $thumb = $int['thumb'];

  if( has_post_thumbnail() ) {
    $image = get_the_post_thumbnail_url();
  } else {
    $image = $thumb;
  }

?>
<article id="<?php echo get_the_id(); ?>" class="row">
  <div class="col s12 m12">
    <div class="card">
      <div class="card-image">
        <img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>">
        <span class="card-title"><h5><?php echo get_the_title(); ?></h5></span>
      </div>
      <div class="card-content">
        <p><?php echo adco_short_content(); ?></p>
      </div>
      <div class="card-action">
        <a href="<?php echo get_the_permalink(); ?>" title="<?php echo $title; ?>" rel="<?php echo $title; ?>">Read More</a>
      </div>
    </div>
  </div>
</article>
