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
  <?php
    /**
     * Before Header Top
     */
     do_action( 'before_header_top' );
     ?>
    	<header id="masthead" class="site-header">
    		<nav id="site-navigation" class="main-navigation teal lighten-2">
          <div class="nav-wrapper">
            <a href="<?php echo get_home_url(); ?>" class="brand-logo">
      				<img src="<?php echo esc_url( $general['logo_svg'] ); ?>" alt="<?php echo get_bloginfo('display'); ?>" />
      			</a>
            <a  href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
      			<?php
      			wp_nav_menu( array(
      				'theme_location' => 'primary',
      				'container'      => 'ul',
      				'menu_class'		 => 'right hide-on-med-and-down'
      			) );
            wp_nav_menu( array(
              'theme_location'    => 'primary',
              'container'         => 'ul',
              'menu_class'        => 'side-nav',
              'menu_id'           => 'mobile-menu'
            ) );
            ?>
          </div>
    		</nav><!-- #site-navigation -->
    	</header><!-- #masthead -->
    <?php
      /**
       * After Header Top
       */
       do_action( 'after_header_top' );
       ?>
	<div id="content" class="site-content">
