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
      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="video-web flex1">
      <iframe src="https://www.youtube.com/embed/J4pUEBdKqIo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
      </iframe>
    </div>

  </div>
</section>

<!-- section prices -->
<section id="section-prz">
  <div class="container">
    <div class="prices-title">
      <h2>Our Prices<span class="big-dot yellow">.</span></h2>
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
<!-- end graphic design -------------------------------------------------->

<!-- section-getintouch-->
<section id="section-getintouch" class="blue">
  <div class="container">
    <a href="<?php echo get_the_title(get_page_by_path( 'contact' )); ?>"><button type="button" name="button">Let's Get Started!</button></a>
  </div>
</section>

<?php get_footer(); ?>
