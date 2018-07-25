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

<!--- section video ---------->
<section id="section-video">
  <div class="container flex-row">

    <div class="txt-explain flex1">
      <h2>Our Process<span class="big-dot yellow">.</span></h2>
      <p> Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process </p>
    </div>

    <div class="video-web flex1">
      <iframe src="https://www.youtube.com/embed/J4pUEBdKqIo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
      </iframe>
    </div>

  </div>
</section>

<!--- section-process-detail part ---------->
<section id="section-process-detail">
  <div class="container flex-row">

    <div class="process-title">
      <h2>Graphic Design Second Div<span class="big-dot blue">.</span></h2>
    </div>

    <div id="process-rows" class="flex-row">
      <div class="process-row flex1">
        <img id="pic-datail-1" src="<?php echo get_template_directory_uri(); ?>/images/ourprocess-detail/1.jpg" alt="">
        <h3>Design Brief</h3>
        <p>Clarify brand vision, goals & values. Identify Target markets & appropriate business personality. Give us as many details as possible along with touchpoints that will be required for your brand.
        </p>
      </div>
      <div class="process-row flex1">
        <img id="pic-datail-3" src="<?php echo get_template_directory_uri(); ?>/images/ourprocess-detail/2.jpg" alt="">
        <h3>Design Research & Strategy</h3>
        <p>We research industry, target demographic, competitors & their design approaches. Doing research helps us identify the best way to give you a competitive edge in the market.
        </p>
      </div>
      <div class="process-row flex1">
        <img id="pic-datail-3" src="<?php echo get_template_directory_uri(); ?>/images/ourprocess-detail/3.jpg" alt="">
        <h3>Design & Guidelines</h3>
        <p>At this stage, we design all required content for all required mediums. This includes logos, icons, graphic images, print materials, etc. We give all of the original source files along with guidelines for future use.
        </p>
      </div>
    </div>

  </div>
</section>





<!-- section prices -->
<section id="section-prz">
  <div class="container">
    <div class="prices-title">
      <h2>Our Prices<span class="big-dot blue">.</span></h2>
    </div>

    <div class="prices-type flex-row">
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

  </div>
</section>

<!-- section-getintouch ---------------------------------------------------->
<section id="section-getintouch">
  <div class="container">
    <a href="<?php echo get_the_title(get_page_by_path( 'contact' )); ?>"><button type="button" name="button">Let's Get Started!</button></a>
  </div>
</section>

<?php get_footer(); ?>
