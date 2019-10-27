<?php
/**
 * ADCO.us - Theme Section
 *
 * Template for Front Page
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
 $option = get_option( 'adco-theme-section' );
 $company = get_bloginfo( 'display' );

 // Parts
 $link = $option['link'];
?>
<section class="home-section theme">
  <h1>Theme Section</h1>
  <h2><?php echo $option['title']; ?></h2>
  <a href="<?php echo esc_url( $link ); ?>" title="Theme Files for <?php echo $company; ?>" rel="noopener noreferrer" target="_blank" class="waves-effect waves-light btn hero-btn">
    <?php echo $option['txt']; ?>
  </a>
</section>
