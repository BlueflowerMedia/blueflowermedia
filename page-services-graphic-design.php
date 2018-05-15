<?php get_header(); ?>

<section id="services">
  <div class="container flex-row">
    <div class="services-logo flex1">
      <img src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-graphic-design-icon.svg" alt="" class="image">
    </div>
    <div class="txtservice flex2">
      <h1>Graphic Design</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo dolor in reprehenderit.
      </p>
    </div>
  </div>
</section>
<!-- section prices -->
<section id="section-prz">
  <div class="container flex-row">
    <!--   price 1 begin -->
    <div class="prz">
      <!-- <img src="https://placeimg.com/150/100/arch" alt=""> -->
      <h3 class="prz-message ">Essential Logo</h3>
      <h2 class="price">$600</h2>
      <hr>
      <p>RGB/CMYK</p>
      <hr>
      <p>Source files</p>
      <hr>
      <p>Client copyright ownership</p>
      <hr>
      <p>2 concepts</p>
      <hr>
      <p>3 rounds of revisions</p>
      <hr>
      <p>Complimentary variations</p>
      <hr>
    </div>
    <!--   price 2 begin -->
    <div class="prz">
      <!-- <img src="https://placeimg.com/150/100/arch" alt=""> -->
      <h3 class="prz-message ">Premium Logo + Brand Style Guide</h3>
      <h2 class="price">$1,800</h2>
      <hr>
      <p>RGB/CMYK</p>
      <hr>
      <p>Source files</p>
      <hr>
      <p>Client copyright ownership</p>
      <hr>
      <p>3 concepts</p>
      <hr>
      <p>5 rounds of revisions</p>
      <hr>
      <p>Complimentary variations</p>
      <hr>
      <p>Brand style guide</p>
      <hr>
    </div>

  </div>

</section>
<!-- end graphic design ------------------------------------------------------------------------------>

<!-- section-getintouch-->
<section id="section-getintouch">
  <div class="container">
    <a href="<?php echo get_the_title(get_page_by_path( 'contact' )); ?>"><button type="button" name="button">Let's Get Started!</button></a>
  </div>
</section>



<?php get_footer(); ?>
