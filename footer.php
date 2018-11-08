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
      <div class="footer-left flex2">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h3 class="site-title dark"><span class="blue">Blue</span>Flower Media</h3></a>
				<p class="white">We are a Toronto based digital agency specializing in creating, improving, and managing your digital footprints.</p>
				<p class="white">&copy; <?php the_time('Y') ?>. All rights reserved. BlueFlower Media</p>
      </div>

			<div class="footer-center-left flex1">
				<h3>Page Links</h3>
				<a href="http://blueflowermedia.com">Home</a><br>
				<a href="<?php echo get_permalink(get_page_by_path( 'team' )); ?>">About</a><br>
				<a href="<?php echo get_permalink(get_page_by_path( 'book-an-appointment' )); ?>">Book Consultation</a><br>
				<a href="<?php echo get_permalink(get_page_by_path( 'contact' )); ?>">Contact Us</a><br
				<a href="<?php echo get_permalink(get_page_by_path( 'our-work' )); ?>">Our Work</a><br>
				<a href="<?php echo get_permalink(get_page_by_path( 'blog' )); ?>">Blog</a><br>
			</div>

			<div class="footer-center-right flex1">
				<h3>Services</h3>
				<a href="<?php echo get_permalink(get_page_by_path( 'graphic-design' )); ?>">Branding</a><br>
				<a href="<?php echo get_permalink(get_page_by_path( 'web-design' )); ?>">Web Design</a><br>
				<a href="<?php echo get_permalink(get_page_by_path( 'digital-marketing' )); ?>">Digital Marketing</a><br>
				<a href="<?php echo get_permalink(get_page_by_path( 'digital-packages' )); ?>">Packages</a><br>

			</div>
			<div class="footer-right flex1">
				<h3>Get In Touch!</h3>
				<div class="contact-items">
					<div class="contact">
						<div class="contact-left">
							<i class="fas fa-mobile-alt"></i>
						</div>
						<div class="contact-right">
							<p>(647) 712 6119</p>
						</div>
					</div>
					<div class="contact">
						<div class="contact-left">
							<i class="far fa-envelope"></i>
						</div>
						<div class="contact-right">
							<p>contact@blueflowermedia.com</p>
						</div>
					</div>

					<div class="contact">
						<div class="contact-left">
							<i class="fas fa-map-marker-alt"></i>
						</div>
						<div class="contact-right">
							<p>3214 Danforth Ave<br>Toronto, Ontario, Canada</p>
						</div>
					</div>

					<div class="contact">
						<div class="contact-left">
							<i class="far fa-clock"></i>
						</div>
						<div class="contact-right">
							<p>MON - FRI: 10:00 AM to 6:00 PM EST</p>
						</div>
					</div>
				</div>
				<div class="icons">
					<a href="https://www.youtube.com/channel/UCqw7fUs6HF6hklD2GtrhrXg" target="_blank"><i class="fab fa-youtube" style="color:red"></i></a>
					<a href="https://www.facebook.com/blueflowermediacorp" target="_blank"><i class="fab fa-facebook-square" style="color:#3B5998"></i></a>
					<a href="https://www.instagram.com/blueflowermedia/" target="_blank"><i class="fab fa-instagram" style="color:#fb3958"></i></a>
					<a href="https://www.linkedin.com/blueflowermedia/" target="_blank"><i class="fab fa-linkedin" style="color:#0077B5"></i></a>
				</div>
			</div>
      </div> -->
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
