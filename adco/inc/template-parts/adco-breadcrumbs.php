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
<nav>
  <div class="nav-wrapper">
    <div class="col s12">
      <?php
        if( ! function_exists( 'yoast_breadcrumb' ) ) {
          yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
        } else {
          // No Breadcrumbs Found
          echo '<h1>No Yoast Breadcrumbs</h1>';
        }
        ?>
    </div>
  </div>
</nav>
