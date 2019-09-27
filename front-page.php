<?php
/**
 * Front Page
 *
 * The template for showing the front page of the site
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package active-g
 */

 if( ! defined( 'ABSPATH' ) ) {
   exit;
 }

 /**
  * Template Header
  */
 get_header();

 /**
  * Before Main Content
  *
  * @action_hook before_main_content
  */
 do_action( 'before_main_content' );
 ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main">

 		<?php
 		while ( have_posts() ) :
 			the_post();

             /**
              * Main Content
              *
              * @action_hook main_content
              */
 			do_action( 'main_content' );

 			// If comments are open or we have at least one comment, load up the comment template.
 			if ( comments_open() || get_comments_number() ) :
 				comments_template();
 			endif;

 		endwhile; // End of the loop.
 		?>

 		</main><!-- #main -->
 	</div><!-- #primary -->

 <?php
 /**
  * After Main Content
  *
  * @action_hook after_main_content
  */
 do_action( 'after_main_content' );

 /**
  * Template Header
  */
 get_footer();
