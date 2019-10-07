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
  $id = get_post_thumbnail_id( $post->ID );
  $alt = get_post_meta( $id, '_wp_attachment_image_alt', true );

  $thumb = $int['thumb'];

  if( has_post_thumbnail() ) {
    $image = get_the_post_thumbnail_url();
  } else {
    $image = $thumb;
  }

?>
<article id="<?php echo get_the_ID(); ?>" class="col s12 m7">
  <div class="card horizontal">
    <div class="card-image">
      <img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>" />
    </div>
    <div class="card-stacked">
      <div class="card-content">
        <h5><?php echo $title; ?></h5>
        <p><?php echo get_the_excerpt(); ?></p>
      </div>
      <div class="card-action">
        <a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>" class="grey-text text-lighten-4">Read More</a>
      </div>
    </div>
  </div>
</article>
