<?php
/**
 * ADCO.us - Breadcrumbs
 *
 * Template Internal Pages
 *
 * @version 1.0.0
 * @package adco
 */

 if( ! defined( 'ABSPATH' ) ) {
   exit;
 }

 ?>
<nav class="breadcrumbs">
  <div class="nav-wrapper">
    <div class="col s12">
      <?php
        if( function_exists( 'yoast_breadcrumb' ) ) {
          yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
        } else {
          the_breadcrumb();
        }
        ?>
    </div>
  </div>
</nav>
