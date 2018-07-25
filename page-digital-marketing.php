<?php get_header(); ?>

<section id="services">
  <div class="container flex-row">
    <div class="services-logo flex1">
      <img src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-digital-marketing-icon.svg" alt="" class="image">
    </div>
    <div class="txtservice flex2">
      <h1>Digital Marketing<span class="big-dot blue">.</span></h1>
      <p>In a multi-device world, its very important to attract and retain users on as many touchpoints as possible. For us, the first step is to have a great presence on as many relavant platforms as possible in a practical integrated way.
      The next step is find appropriate advertising opportunities that will attract the right customers to your platforms/landing pages. The need for amazing user experience will be very objous here in this stage of your digital marketing process, because
    great design just converts so much more than bland design! We then work towards improving your conversion rate & your customer return rate.  </p>
    </div>
  </div>
</section>

<!--- section video ---------->
<section id="section-video">
  <div class="container flex-row">

    <div class="txt-explain flex1">
      <h2>Our Process<span class="big-dot yellow">.</span></h2>
      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="video-web flex1">
      <iframe src="https://www.youtube.com/embed/J4pUEBdKqIo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
      </iframe>
    </div>

  </div>
</section>

<section id="rd">
  <div class="container">
    <p class="white">Digital Marketing consists of a wide array of services and needs to be catered to your specific business needs. We do not currently have any digital marketing packages. Please contact
    us with your project details so we can assist you further.</p>
  </div>
</section>
<!--  Digital Marketing design --------------------------------------------->

<!-- section-getintouch-->
<section id="section-getintouch" class="blue">
  <div class="container">
    <a href="<?php echo get_the_title(get_page_by_path( 'contact' )); ?>"><button type="button" name="button">Let's Get Started!</button></a>
  </div>
</section>




<?php get_footer(); ?>
