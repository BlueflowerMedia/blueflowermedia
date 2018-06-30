<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blueflowedmedia
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
    <div class="container flex-row">
			<!-- <img id="logo-footer" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="BlueFlower Media logo"> -->
      <div class="footer-left flex1">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h3 class="site-title dark"><span class="blue">Blue</span>Flower Media</h3></a>
				<p class="white">We are a Toronto based digital agency specializing in creating, improving, and managing your digital footprints.</p>
				<p class="white">&copy; <?php the_time('Y') ?>. All rights reserved. BlueFlower Media</p>
      </div>
      <div class="footer-right flex1">
				<!-- Social media -->
					<a href="https://www.youtube.com/channel/UCqw7fUs6HF6hklD2GtrhrXg" target="_blank"><i class="fab fa-youtube" style="color:red"></i></a>
					<a href="https://www.facebook.com/blueflowermediacorp" target="_blank"><i class="fab fa-facebook-square" style="color:#3B5998"></i></a>
					<a href="https://www.instagram.com/blueflowermedia/" target="_blank"><i class="fab fa-instagram" style="color:#fb3958"></i></a>
				<!-- Social media -->
      </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
