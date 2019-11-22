<?php
/**
 * ADCO.us - Product Section
 *
 * Template for Home Page
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
 $internal = get_option( 'internal' );
 $product = get_option( 'adco-product-section' );
 $post = esc_attr( $product['post_type'] );
 $thumbnail = $internal['thumb'];

 /**
  * WP_Query
  */

  // Arguments
  $args = array(
    'post_type'           => $post,
    'orderby'             => 'DESC',
    'order'               => 'menu_order',
    'posts_per_page'      => 3
  );

  // Query
  $query = new WP_Query( $args );
  ?>
  <section class="home-section product contain">
    <div>
      <h1 class="title"><?php echo $product['title']; ?></h1>
      <p class="subtitle"><?php echo esc_attr( $product['subtitle'] ); ?>
    </div>
    <?php if( $query->have_posts() ) {
      echo '<div class="slick-main">';
      while( $query->have_posts() ) {
        $query->the_post();
        /**
         * Meta
         */
         $id = get_the_ID();
         $cta = get_post_meta( $id, '_page', true );
         $link = get_the_permalink( $cta );
         $feat = get_the_post_thumbnail_url();
         if( $feat == '' ) {
           $image = $thumbnail;
         } else {
           $image = $feat;
         }
        ?>
          <div class="card producwt">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator lazyload" src="<?php echo $image; ?>" alt="<?php echo get_the_title(); ?>" />
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><?php echo get_the_title(); ?><i class="material-icons right">more_vert</i></span>
              <p><a href="<?php echo $link; ?>">Read More</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"><?php echo get_the_title(); ?><i class="material-icons right">close</i></span>
              <p><?php echo get_the_excerpt(); ?></p>
            </div>
          </div>
      <?php
      } wp_reset_postdata();
      echo '</div>';
    } else {
      echo "<h1>No $post Found</h1>";
    }
    ?>
  </section>
