<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package adco
 */

 /**
  * Options
	*/
	$footer = get_option( 'footer' );

/**
 * Before Main Footer
 */
 do_action( 'before_main_footer' );
?>

	</div><!-- #content -->

	<footer class="page-footer">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text"><?php echo esc_attr( $footer['title'] ); ?></h5>
					<p class="grey-text text-lighten-4"><?php echo esc_attr( $footer['content'] ); ?></p>
				</div>
				<div class="col l4 offset-l2 s12">
					<?php
					if( is_active_sidebar( 'footer-main' ) ):
						dynamic_sidebar( 'footer-main' );
					else:
						echo '<h5 class="no-posts">No widgets found in <span>Widget -> Footer Menu</span>.</h5>';
					endif;
					?>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				Created by <a href="https://www.linkedin.com/in/vince-adriatico" ref="nofollow" target="_blank">Vince Adriatico</a>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php
/**
 * After Main Footer
 */
 do_action( 'after_main_footer' );

/** Template Footer */
wp_footer();

?>

</body>
</html>
