<?php
/**
 * ADCO.us - Process Section
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
  $option = get_option( 'adco-process-section' );
  $postype = esc_attr( $option['post_type'] );

  /**
   * WP Query
   */

   // Arguments
   $args = array(
     'post_type'      => $postype,
     'order'          => 'DESC',
     'orderby'        => 'menu_order',
     'posts_per_page' => 3
   );

   // Query
   $query = new WP_Query( $args );
?>
<section class="home-section process">
  <h1><?php echo esc_attr( $option['title'] ); ?></h1>
  <p><?php echo esc_attr( $option['subtitle'] ); ?></p>
  <?php
    if( $query->have_posts() ) {
      $gg = 0;
      echo '<ul>';
      while( $query->have_posts() ) {
        $query->the_post();

        // Incrementing Indicator
        if( $gg == 0 ):
          $class = "active";
        else:
          $class = "";
        endif;
        ?>
      <li class="<?php echo $active; ?>">
        <h3><?php echo get_the_title(); ?></h3>
          <sub><?php echo get_the_excerpt(); ?></sub>
        <hr>
        <p><?php echo get_the_content(); ?></p>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" />
      </li>
      <?php
        $gg++;
      } wp_reset_postdata();
      echo '</ul>';
    } else {
      echo "<h1>No $post found</h1>";
    } ?>
</section>
