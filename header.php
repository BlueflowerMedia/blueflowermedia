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
		<nav id="site-navigation" class="main-navigation fixed container-navbar flex-row">
      <!-- navbar left -->
			<div class="nav-left flex3 flex-row">
        <!-- <?php the_custom_logo(); ?> -->
          <img id="logo-header" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="BlueFlower Media logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h3 class="site-title"><span class="blue">Blue</span>Flower Media</h3></a>
      </div>
      <!-- navbar right -->
      <div class="nav-middle">

      </div>
      <div class="nav-middle flex4 flex-row no-mobile">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
          ) );
        ?>

        <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'blueflowermedia' ); ?></button> -->
      </div>
      <div class="nav-right flex1 flex-row no-mobile">
        <a href="<?php echo $contact; ?>"><button class="nav-contact" type="button" name="button">Contact Us</button></a>
      </div>
			<!-- Navbar mobile -->
			<div id="nav-mobile">
        <ul id="mobile-menu">
          <li><a class="main-items" href="">Home</a></li>
          <li><a class="main-items" href="">Team</a></li>
          <li><a class="main-items" href="">Portfolio</a></li>
          <li><a class="main-items" href="">Blog</a></li>
          <li><h2>Our Services<span class="big-dot blue">.</span></h2></li>
          <li><a href="">Web Design</a></li>
          <li><a href="">Graphic Design</a></li>
          <li><a href="">Digital Marketing</a></li>
          <li><a href="">Social Media Management</a></li>
          <li><a href="">Media and Publishing management</a></li>
          <li><a href="">Cloud Hosting</a></li>
          <li><a href="<?php echo $contact; ?>"><button class="nav-contact" type="button" name="button">Contact Us</button></a></li>
      </div>
      <!-- hamburger div -->
			<div class="hamburger" id="hamburger-bfm">
				<span class="line"></span>
				<span class="line"></span>
				<span class="line"></span>
			</div>

		</nav>
	</header>

	<div id="content" class="site-content">
