<?php get_header(); ?>

<section id="services">
  <div class="container flex-row">
    <div class="services-logo flex1">
      <img src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-media-icon.svg" alt="" class="image">
    </div>
    <div class="txtservice flex2">
      <h1>Media & Publishing Management<span class="big-dot blue">.</span></h1>
      <p>Our experience in helping media companies has lead us to organize a set of services for the industry. On the print side, we provide newspaper/magazine design. On the digital side, we provide UI design, digital marketing,
      publisher advertising tools, custom advertiser portal plugin development, and more! </p>
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
    <p class="white">Media & Publishing Marketing consists of a wide array of services and needs to be catered to your specific business needs. We do not currently have any packages. Please contact
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
