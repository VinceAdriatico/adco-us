<?php
/**
 * The template for displaying archive pages
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
	 * Before Archive Page Main
	 *
	 * @action_hook before_archive_page_main
	 */
	 do_action( 'before_archive_page_main' );

	?>
<!--- Main Content --->
<div id="primary" class="content-area">
	<main id="main" class="site-main archive-category">

		<?php
			/**
	 		* Check if any posts
	 		*/
	 	 if( have_posts() ) :

		/**
		 * Before Archive Page Loop
		 *
		 * @action_hook before_archive_page_loop
		 */
		 do_action( 'before_archive_page_loop' );

		/**
		 * Start the Loop
		 */
		 while( have_posts() ) :
			 the_post();

			 /**
			  * Before Archive Page Item
				*
				* @action_hook before_archive_page_item
				*/
				do_action( 'before_archive_page_item');

				/**
				 * Archive Page Item
				 */
				 do_action( 'archive_page_item' );

			 /**
			  * After Archive Page Item
				*
				* @action_hook after_archive_page_item
				*/
				do_action( 'after_archive_page_item');


			 endwhile; // End the Loop

			 /**
				* Post Navigation
				*/
				the_posts_navigation();

				/**
				 * After Archive Page Loop
				 *
				 * @action_hook after_archive_page_loop
				 */
				 do_action( 'after_archive_page_loop' );
	 else:
	 /**
		* Before No Posts Found
		*
		* @action_hook before_no_posts
		*/
		do_action( 'before_no_posts' );

		 /**
			* No Posts Found
			*/
			get_template_part( 'template-parts/content', 'none' );

	/**
	 * After No Posts Found
	 *
	 * @action_hook after_no_posts
	 */
	 do_action( 'after_no_posts' );
 endif; ?>
</main>
</div>
<?php
/**
* After Archive Page Main
*
* @action_hook after_archive_page_main
*/
do_action( 'after_archive_page_main' );

/**
* Footer Template Part
*/
get_footer();
