<?php get_header(); ?>

<section id="services">
  <div class="container flex-row">
    <div class="services-logo flex1">
      <img src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-digital-marketing-icon.svg" alt="" class="image">
    </div>
    <div class="txtservice flex2">
      <h1>Digital Marketing</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo dolor in reprehenderit.
      </p>
    </div>
  </div>
</section>
<section id="rd">
  <div class="container">
    <p class="white">Digital Marketing consists of a wide array of services and need to catered to specific business needs. Our digital marketing hourly rate is $60/hour. Pleasecontact us with your specific project details so we can give you a precise quote.</p>
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
