<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package adco
 */

 /**
  * Header Template Part
  */
  get_header();

 /**
  * Before Default Page Loop
  */
  do_action( 'before_default_page_loop' );

  /**
   * Start Loop
 	*/
 while ( have_posts() ) :
 	the_post();
 	/**
 	 * Before Default Page
 	 *
 	 * @action_hook before_default_page
 	 */
 	 do_action( 'before_default_page' );
 ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main default-page-container">

 		<?php
 			/**
 			 * Before Default Page Content
 			 *
 			 * @action_hook before_default_page_content
 			 *
 			 * @hooked single_post_open() - 5
 			 */
 			 do_action( 'before_default_page_content' );


 		/**
 		 * Afer Default Page Content
 		 *
 		 * @action_hook after_default_page_content
 		 */
 		 do_action( 'after_default_page_content' );
 		?>

 		</main><!-- #main -->
 	</div><!-- #primary -->

 <?php
 endwhile; // End of the loop.

 /**
  * After Default Page Loop
  *
  * @action_hook after_default_page_loop
  */
  do_action( 'after_default_page_loop');

 /**
  * Footer Template Part
  */
 get_footer();
