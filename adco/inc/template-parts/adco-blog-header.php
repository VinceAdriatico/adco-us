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
  ?>
  <div class="general header" style="linear-gradient( to right, <?php echo $internal['linear-gradient-1']; ?>, <?php echo $internal['linear-gradient-2']; ?> ), url(<?php echo $internal['blog-bg']; ?>);">
    <h1><?php echo $internal['blog-title']; ?></h1>
  </div>
 
