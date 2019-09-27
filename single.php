<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package adco
 */

 /**
  * Header Template Part
  */
 get_header();

 /**
  * Before Single Post Loop
  *
  * @action_hook before_single_post
  */
 do_action( 'before_single_post_loop' );

 /**
  * Start Loop
  */
 while ( have_posts() ) :
 	the_post();
 	/**
 	 * Before Single Post
 	 *
 	 * @action_hook before_single_post
 	 */
 	 do_action( 'before_single_post' );
 ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main single-post-container">

 		<?php
 			/**
 			 * Before Content Single Post
 			 *
 			 * @action_hook before_content_single_post
 			 */
 			 do_action( 'before_content_single_post' );

			 /**
			  * Content Single Post
				*
				* @action_hook content_single_post
				*/
				do_action( 'content_single_post' );

 			/**
 			 * After Single Post
 			 *
 			 * @action_hook after_single_post
 			 */
 			do_action( 'after_content_single_post' );
 		?>
 		</main><!-- #main -->
 	</div><!-- #primary -->

 <?php
 endwhile; // End of the loop.

 /**
  * After Single Post Loop
  *
  * @action_hook after_single_post
  */
 do_action( 'after_single_post_loop' );

 /**
  * Footer Template Part
  */
 get_footer();
