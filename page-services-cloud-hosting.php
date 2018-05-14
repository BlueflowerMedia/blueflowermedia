<?php get_header(); ?>

<section id="services">
  <div class="container flex-row">
    <div class="pict flex1">
      <img src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-web-design-icon-2.png" alt="" class="image">
    </div>
    <div class="txtservice flex1">
      <h1>Cloud Hosting</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo dolor in reprehenderit.
      </p>
    </div>
  </div>
</section>
<section id="rd">
  <div class="container">
    <h1 class="white">Coming Soon.</h1>
  </div>
</section>
<!--  Digital Marketing design ------------------------------------------------------------------------------>

<!-- section-getintouch-->
<section id="section-getintouch">
  <div class="container">
    <a href="<?php echo get_the_title(get_page_by_path( 'contact' )); ?>"><button type="button" name="button">Let's Get Started!</button></a>
  </div>
</section>



<?php get_footer(); ?>
