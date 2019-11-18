<?php
/**
 * ADCO.us - Archive Header
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
   <div class="general header" style="background-image: linear-gradient( to bottom, <?php echo $internal['linear-gradient-1']; ?>, <?php echo $internal['linear-gradient-2']; ?> ), url(<?php echo $internal['blog-bg']; ?>);">
     <?php adco_archive_title(); ?>
   </div>
