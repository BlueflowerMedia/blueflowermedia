<?php get_header(); ?>

<section id="services">
  <div class="container flex-row">
    <div class="services-logo flex1">
      <img src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-social-icon.svg" alt="" class="image">
    </div>
    <div class="txtservice flex2">
      <h1>Social Media Marketing<span class="big-dot blue">.</span></h1>
      <p>Social Media Marketing allows your business to reach billions of users around the world. This creates the perfect opportunity for you to develop a brand personality and presence people can easily access on platforms they are already on.
      We help business raise awareness, increase engagement, create effective advertising campaigns, generate leads and much more!</p>
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
        <h3 class="prz-message ">Essential</h3>
        <h2 class="price">$1,400</h2>
        <hr>
        <p>Social Accounts setup</p>
        <hr>
        <p>Monthly Analytics Reports</p>
        <hr>
        <p>Social Copywriting</p>
        <hr>
        <p>Original and Sourced Content</p>
        <hr>
        <p>Up to 10 Weekly posts on all platforms</p>
        <hr>
        <p>1 Blog Post/month</p>
        <hr>
        <p>Facebook, Instagram & Twitter</p>
        <hr>
        <p>2 Custom Graphics/month</p>
        <hr>
      </div>
      <!--   price 2 begin -->
      <div class="prz">
        <!-- <img src="https://placeimg.com/150/100/arch" alt=""> -->
        <h3 class="prz-message ">Corporate</h3>
        <h2 class="price">$3,600</h2>
        <hr>
        <p>Social Accounts setup</p>
        <hr>
        <p>Monthly Analytics Reports</p>
        <hr>
        <p>Social Copywriting</p>
        <hr>
        <p>Original and Sourced Content</p>
        <hr>
        <p>Up to 10 Weekly posts on all platforms</p>
        <hr>
        <p>2 Blog Post/month</p>
        <hr>
        <p>5 Social Platforms</p>
        <hr>
        <p>4 Custom Graphics/month</p>
        <hr>
        <p>Content Calendar</p>
        <hr>
        <p>ROI Reports</p>
        <hr>
      </div>
    </div>

  </div>
</section>
<!-- end Social  Media  Management ------------------------------------------>

<!-- section-getintouch-->
<section id="section-getintouch" class="blue">
  <div class="container">
    <a href="<?php echo get_the_title(get_page_by_path( 'contact' )); ?>"><button type="button" name="button">Let's Get Started!</button></a>
  </div>
</section>

<?php get_footer(); ?>
