<?php
/**
 * ADCO.us - Main Section
 *
 * Template for Home Page
 *
 * @version 1.0.0
 * @package adco-us
 */

  if( ! defined( 'ABSPATH' ) ) {
    exit;
  }

  /**
   * Options
   */
   $main = get_option( 'adco-main-section' );
?>
<!--- Title --->
<div class="main title">
  <h1 class="title"><?php echo $main['title']; ?></h1>
</div>
<?php do_action( 'adco_main_section' ); ?>
