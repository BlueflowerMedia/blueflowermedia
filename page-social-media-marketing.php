<?php get_header(); ?>

<section id="services">
  <div class="container flex-row">
    <div class="services-logo flex1">
      <img src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-social-icon.svg" alt="" class="image">
    </div>
    <div class="txtservice flex2">
      <h1>Social Media Marketing<span class="big-dot blue">.</span></h1>
      <p>Social Media Marketing allows your business to reach billions of users around the world. This creates the perfect opportunity for you to develop a brand personality and presence people can easily access on platforms they are already on. We help business raise awareness, increase engagement, create effective advertising campaigns, generate leads and much more!</p>
    </div>
  </div>
</section>

<!--- section video ---------->
<section id="section-video">
  <div class="container flex-row">

    <div class="txt-explain flex1">
      <h2>Our Process<span class="big-dot yellow">.</span></h2>
      <!-- <p> Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process Our Process</p> -->
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
      <h2>Second Div<span class="big-dot blue">.</span></h2>
    </div>

    <div id="process-rows" class="flex-row">
      <div class="process-row flex1">
        <img id="pic-datail-1" src="<?php echo get_template_directory_uri(); ?>/images/ourprocess-detail/6.jpg" alt="">
        <h3>Social Media Strategy</h3>
        <p>Your Social Media Presence online is absolutely essential to your overall presence on the web. Having a social media strategy is an crucial in having an effective social presence. With our clients we brainstorm target demographics, the use of different platforms, tone, and much more.
        <br>Once we establish a strategy, it will be much easier to create content consistently.
        </p>
      </div>
      <div class="process-row flex1">
        <img id="pic-datail-3" src="<?php echo get_template_directory_uri(); ?>/images/ourprocess-detail/7.jpg" alt="">
        <h3>Key Performance Indicators (KPI’s)</h3>
        <p>Measurable KPI’s let you know how well your social media marketing is doing. They can be the number of fans, followers, likes, reach, generated leads, inbound links, reviews, etc.
        </p>
      </div>
      <div class="process-row flex1">
        <img id="pic-datail-3" src="<?php echo get_template_directory_uri(); ?>/images/ourprocess-detail/8.jpg" alt="">
        <h3>Social Media Reports</h3>
        <p>We analyze your social media profiles on a monthly basis to determine what is and isn’t working. This helps us make improvements for the coming months.
        </p>
      </div>
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

<!-- section-getintouch ---------------------------------------------------->
<section id="section-getintouch">
  <div class="container">
    <a href="<?php echo get_the_title(get_page_by_path( 'contact' )); ?>"><button type="button" name="button">Let's Get Started!</button></a>
  </div>
</section>

<?php get_footer(); ?>
