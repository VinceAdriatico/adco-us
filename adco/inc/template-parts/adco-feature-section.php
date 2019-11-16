<?php
/**
 * ADCO.us - Project Section
 *
 * Template for home page
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
  $internal = get_option( 'internal' );
  $option = get_option( 'adco-feature-section' );
  $default = $internal['thumb'];
  $company = get_bloginfo( 'display' );

  /**
   * WP Query
   */

   // Arguments
   $args = array(
     'post_type'           => 'latest_project',
     'orderby'             => 'DESC',
     'order'               => 'post_date',
     'posts_per_page'      => 2
   );

   // Query
   $query = new WP_Query( $args );
 ?>
 <section class="home-section feature contain">
   <h2 class="title"><?php echo  $option['title']; ?></h2>
   <?php
    if( $query->have_posts() ) {
      echo '<ul>';
      while( $query->have_posts() ) {
        $query->the_post();
        /**
         * Meta
         */
         $id = get_the_ID();
         $image = get_the_post_thumbnail_url();
         $int = get_post_meta( $id, '_page', true );
         $ext = get_post_meta( $id, '_external', true );
         if( $ext == '' ) {
           $link = $int;
           $target = '';
         } else {
           $link = get_the_permalink( $int );
           $target= 'target="_blank"';
         }

         // Default Image
         if( $image == '' ) {
           $img = $default;
           $alt = '';

         } else {
           $img = $image;
           $img_id = get_post_thumbnail_id();
           $alt = get_post_meta( $img_id, '_wp_attachment_image_alt', true );
         }
          ?>
          <li>
            <div class="col s12 m7">
              <div class="card horizontal">
                <div class="card-image">
                  <img src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="<?php echo get_the_title(); ?> at <?php echo $company; ?>" />
                </div>
                <div class="card-stacked">
                  <div class="card-content">
                    <h5><?php echo get_the_title(); ?></h5>
                  </div>
                  <?php ?>
                  <?php if( $ext !== '' ) { ?>
                    <div class="card-action">
                      <a href="<? echo $ext; ?>" alt="<?php echo get_the_title(); ?> for <?php echo $company; ?>">View More</a>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>

          </li>
      <?php
      } wp_reset_postdata();
      echo '</ul>';
    } else {
      echo '<h2>No Projects Found</h2>';
    }
    ?>
 </section>
