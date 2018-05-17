<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blueflowedmedia
 */

$contact = get_the_title(get_page_by_path( 'contact' ));
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blueflowermedia' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation fixed container-navbar">
      <!-- navbar left -->
			<div class="nav-left">
        <!-- <?php the_custom_logo(); ?> -->
				<img id="logo-header" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="BlueFlower Media logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h3 class="site-title"><span class="blue">Blue</span>Flower Media</h3></a>
      </div>
      <!-- navbar right -->
      <div class="nav-right">

				        <?php
									wp_nav_menu( array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									) );
								?>
        <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'blueflowermedia' ); ?></button> -->
				<a href="<?php echo $contact; ?>"><button class="nav-contact" type="button" name="button">Contact Us</button></a>
      </div>
      <!-- hamburger div -->
		</nav>
	</header>

	<div id="content" class="site-content">
