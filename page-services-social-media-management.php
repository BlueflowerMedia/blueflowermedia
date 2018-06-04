<?php get_header(); ?>

<section id="services">
  <div class="container flex-row">
    <div class="services-logo flex1">
      <img src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-social-icon.svg" alt="" class="image">
    </div>
    <div class="txtservice flex2">
      <h1>Social Media Management<span class="big-dot blue">.</span></h1>
      <p>We have dedicated content producers to engage with the public professionally,effectively, and consistently. We have a deep understanding of public relationships and ability to foster a positive public image.</p>
    </div>
  </div>
</section>
<!-- section prices -->
<section id="section-prz">
  <div class="container flex-row">
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
</section>


<!-- end Social  Media  Management ------------------------------------------------------------------------->

<!-- section-getintouch-->
<section id="section-getintouch">
  <div class="container">
    <a href="<?php echo get_the_title(get_page_by_path( 'contact' )); ?>"><button type="button" name="button">Let's Get Started!</button></a>
  </div>
</section>



<?php get_footer(); ?>
