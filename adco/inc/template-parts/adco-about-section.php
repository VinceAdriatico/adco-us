<?php
/**
 * ADCO.us - About Section
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
  $option = get_option( 'adco-about-section' );
  $feature = get_option( 'adco-feature-section' );
  // Parts
  $img = image_webp( $option['webp'], $option['bg'] );

  /**
   * WP Query
   */

   // Arguments
   $args = array(
     'post_type'           => 'featured_service',
     'orderby'             => 'DESC',
     'order'               => 'post_date',
     'posts_per_page'      => 3
   );

   // Query
   $query = new WP_Query( $args );
?>
<section id="overview" class="home-section about contain toggle active tabcontent">
  <h2 class="title open-bold"><?php echo $option['title']; ?></h2>
  <?php echo $option['content']; ?>
</section>
<?php
if( $query->have_posts() ) {
  while( $query->have_posts() ) {
    $query->the_post();
    ?>
  <section id="<?php echo get_post_field( 'post_name' ); ?>" class="home-section about contain toggle tabcontent">
    <h2 class="title"><?php echo get_the_title(); ?></h2>
    <p>
      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" class="image" />
    <?php echo get_the_content(); ?>
    </p>
  </section>
  <?php
  } wp_reset_postdata();
} else {
  echo '<p>No Projects Found</p>';
}
?>
