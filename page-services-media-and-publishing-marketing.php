<?php get_header(); ?>

<section id="services">
  <div class="container flex-row">
    <div class="services-logo flex1">
      <img src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-media-icon.svg" alt="" class="image">
    </div>
    <div class="txtservice flex2">
      <h1>Media & Publishing Marketing<span class="big-dot blue">.</span></h1>
      <p>We help media and publishing companies with print design and resource management for online advertising.</p>
    </div>
  </div>
</section>
<section id="rd">
  <div class="container">
    <p class="white">Standard practise in the marketing world are through newspapers and magazines. Our team is very experienced in this type of media but also well-versed in more innovative approaches such as Adsense, DoubleClick for Publishers, and other Media Advertiser Tools. Please do ask us to explore the vast possibilities for your needs.</p>
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
