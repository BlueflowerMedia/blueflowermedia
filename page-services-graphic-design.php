<?php get_header(); ?>

<section id="services">
  <div class="container flex-row">
    <div class="services-logo flex1">
      <img src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-graphic-design-icon.svg" alt="" class="image">
    </div>
    <div class="txtservice flex2">
      <h1>Graphic Design<span class="big-dot blue">.</span></h1>
      <p>First-impressions can only be made once. Design affects how your audience views your brand along with the emotions they associate with your brand. We love working with clients that have a strong vision in how they want to be remembered. <br><br>
We work with clients from the very early stages, from brainstorming branding to creating consistent digital and print materials that will leave a lasting impression on the customer.
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
