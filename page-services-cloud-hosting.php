<?php get_header(); ?>

<section id="services">
  <div class="container flex-row">
    <div class="flex1 services-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-hosting-icon.svg" alt="">
    </div>
    <div class="txtservice flex2">
      <h1>Cloud Hosting<span class="big-dot blue">.</span></h1>
      <p></p>
    </div>
  </div>
</section>
<section id="rd">
  <div class="container">
    <h1 class="white center">Coming Soon.</h1>
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
