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


 /**
  * Options
  */
  $internal = get_option( 'internal' );

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php
  wp_head();
  ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130661039-1"></script>
 <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());

   gtag('config', 'UA-130661039-1');
 </script>
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
      				<?php echo $internal['company-name']; ?>
      			</a>
            <a  href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
      			<?php
      			wp_nav_menu( array(
      				'theme_location' => 'menu-1',
      				'container'      => 'ul',
      				'menu_class'		 => 'right hide-on-med-and-down'
      			) );
            wp_nav_menu( array(
              'theme_location'    => 'menu-1',
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
