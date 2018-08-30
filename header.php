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

$contact = get_permalink(get_page_by_path( 'contact' ));
$team = get_permalink(get_page_by_path( 'team' ));
$blog = get_permalink(get_page_by_path( 'blog' ));
$portfolio = get_permalink(get_page_by_path( 'Portfolio' ));

$webdesign = get_permalink(get_page_by_path( 'services-web-design' ));
$graphicdesign = get_permalink(get_page_by_path( 'services-graphic-design' ));
$digitalmarketing = get_permalink(get_page_by_path( 'services-digital-marketing' ));
$socialmediamarketing = get_permalink(get_page_by_path( 'services-social-media-management' ));
$mediapublishingmanagement = get_permalink(get_page_by_path( 'services-media-and-publishing-management' ));
$cloudhosting = get_permalink(get_page_by_path( 'services-cloud-hosting' ));


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-89123504-3"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-89123504-3');
</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blueflowermedia' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation fixed container-navbar flex-row">
      <!-- navbar left -->
			<div class="nav-left flex3">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img id="logo-header" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="BlueFlower Media logo"></a>
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
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu-mobile',
						'container_class' => 'mobile-menu-list',
					) );
				?>
				<h2>Our Services<span class="big-dot blue">.</span></h2>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'secondary-menu-mobile',
						'container_class' => 'mobile-menu-list',
					) );
				?>

        <!-- <ul id="mobile-menu">
          <li><a class="main-items" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
          <li><a class="main-items" href="<?php echo $team; ?>">Team</a></li>
          <li><a class="main-items" href="<?php echo $portfolio; ?>">Portfolio</a></li>
          <li><a class="main-items" href="<?php echo $blog; ?>">Blog</a></li>
          <li><h2>Our Services<span class="big-dot blue">.</span></h2></li>
          <li><a href="<?php echo $webdesign; ?>">Web Design</a></li>
          <li><a href="<?php echo $graphicdesign; ?>">Graphic Design</a></li>
          <li><a href="<?php echo $digitalmarketing; ?>">Digital Marketing</a></li>
          <li><a href="<?php echo $socialmediamarketing; ?>">Social Media Management</a></li>
          <li><a href="<?php echo $mediapublishingmanagement; ?>">Media and Publishing management</a></li>
          <li><a href="<?php echo $cloudhosting; ?>">Web Hosting & Maintenance</a></li>
          <li><a href="<?php echo $contact; ?>"><button class="nav-contact" type="button" name="button">Contact Us</button></a></li>
        				</ul> -->
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
