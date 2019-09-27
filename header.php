<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package adco
 */

 $general = get_option( 'general' );

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php
  /**
   * General Meta
   */
  do_action( 'general_head' );
  wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'adco' ); ?></a>
  <?php
    /**
     * Before Header Top
     */
     do_action( 'before_header_top' );
     ?>
    	<header id="masthead" class="site-header">
    		<nav id="site-navigation" class="main-navigation">
    			<a href="<?php get_home_url(); ?>" class="brand-logo">
    				<img src="<?php echo esc_url( $general['logo_svg'] ); ?>" alt="<?php echo get_bloginfo('display'); ?>" />
    			</a>
    			<?php
    			wp_nav_menu( array(
    				'theme_location' => 'menu-1',
    				'menu_id'        => 'nav-mobile',
    				'menu_class'		 => 'right hide-on-med-and-down'
    			) );
    			?>
    		</nav><!-- #site-navigation -->
    	</header><!-- #masthead -->
    <?php
      /**
       * After Header Top
       */
       do_action( 'after_header_top' );
       ?>
	<div id="content" class="site-content">
