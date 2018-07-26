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
      <!-- <p> Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Pr</p> -->
    </div>

    <div class="video-web flex1">
      <iframe src="https://www.youtube.com/embed/J4pUEBdKqIo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
      </iframe>
    </div>

  </div>
</section>

<!-- section-getintouch ---------------------------------------------------->
<section id="section-getintouch">
  <div class="container">
    <a href="<?php echo get_the_title(get_page_by_path( 'contact' )); ?>"><button type="button" name="button">Let's Get Started!</button></a>
  </div>
</section>



<?php get_footer(); ?>
