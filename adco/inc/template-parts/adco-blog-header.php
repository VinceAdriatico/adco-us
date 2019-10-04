<?php
/**
 * ADCO.us - Blog Header
 *
 * Template for Internal Page
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
  $lin1 = $internal['linear-gradient-1'];
  $lin2 = $internal['linear-gradient-2'];
  $bg = $internal['blog-bg'];
  ?>
  <div class="general header" style="background-image: linear-gradient( to right, <?php echo $lin1; ?>, <?php echo $lin2; ?>), url(<?php echo $bg; ?>);">
    <h1><?php echo $internal['blog-title']; ?></h1>
  </div>
