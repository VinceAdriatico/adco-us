<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package adco
 */

 /**
  * Options
	*/
	$internal = get_option( 'internal' );
	$bg = $internal['search-bg'];
	$lin1 = $internal['linear-gradient-1'];
	$lin2 = $internal['linear-gradient-2'];

	get_header();

/**
 * Before Search Page Main
 */
 do_action( 'before_search_page_main' );
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main search">
			<header class="page-header general header" style="background-image: linear-gradient( to right, <?php printf( $lin1 ); ?>, <?php printf( $lin2 ); ?>), url(<?php printf( $bg ); ?>)">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'adco' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

		<?php if ( have_posts() ) :
			/**
			 * Before Search Page
			 */
			 do_action( 'before_search_page' );

			/**
			 * Before Start Page Loop
			 */
			 do_action( 'before_search_page_loop' );

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();


				/**
				 * Before Serch Page Loop
				 */
				 do_action( 'before_search_page_item' );

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

				/**
				 * After Search Page Loop
				 */
				 do_action( 'after_search_page_item' );

			endwhile;

			the_posts_navigation();

			do_action( 'after_search_page_loop' );

			/**
			 * After Search Page
			 */
			do_action( 'after_search_page' );

		else :

			/**
			 * Before No Posts Found
			 */
			do_action( 'before_no_posts_found' );

			get_template_part( 'template-parts/content', 'none' );

			/**
			 * After No Posts Found
			 */
			 do_action( 'after_no_posts_found' );

		endif;
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
