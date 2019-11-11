<?php
/**
 * ADCO.us - Contact Section
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
  $option = get_option( 'adco-contact-section' );
?>
<section class="home-section contact" style="background-image: linear-gradient(to bottom, <?php echo $option['gradient-1']; ?> 0%, <?php echo $option['gradient-1']; ?> 50%, <?php echo $option['gradient-2']; ?> 51%, <?php echo $option['gradient-2']; ?> 100% );">
  <div class="card">
    <div class="content">
      <h3><?php echo $option['title']; ?></h3>
      <p><?php echo $option['content']; ?>
        <a id="modal-toggle" class="waves-effect waves-light btn-large">Button</a>
        <!---<a id="modal-toggle" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>--->
    </div>
  </div>
</section>
<!--- Modal --->
<div class="contact modal" id="contactModal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <?php echo do_shortcode( $option['shortcode'] ); ?>
  </div>
</div>
