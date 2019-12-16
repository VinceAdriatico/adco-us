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

  <div class="home-section product contain">
    <?php if( $query->have_posts() ) {
      ?>
      <div class="collection slick-main">
        <a class="tablinks collection-item active" onclick="openService(event, 'overview')">Overview</a>
      <?php
      while( $query->have_posts() ) {
        $query->the_post();
        /**
         * Meta
         */
         $id = get_the_ID();
         $cta = get_post_meta( $id, '_page', true );
         $svg = get_post_meta( $id, '_svg', true );
         $link = get_the_permalink( $cta );
         $feat = get_the_post_thumbnail_url();
         if( $feat == '' ) {
           $image = $thumbnail;
         } else {
           $image = $feat;
         }
        ?>
        <a class="tablinks collection-item toggle" onclick="openService(event, '<?php echo get_post_field( 'post_name' ); ?>')">
          <?php echo get_the_title(); ?>
        </a>
      <?php
      } wp_reset_postdata();
      echo '</div>';
    } else {
      echo "<h1>No $post Found</h1>";
    }
    ?>
  </div>
