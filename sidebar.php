<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package adco
 */

?>

<aside id="secondary" class="widget-area  blue-grey darken-1">
	<?php
	if( is_active_sidebar( 'sidebar-1' ) ):
			dynamic_sidebar( 'sidebar-1' );
		else:
			echo '<h5 class="no-posts">No widgets found in <span>Widget -> Sidebar/span>.</h5>';
		endif;
		?>
</aside><!-- #secondary -->
