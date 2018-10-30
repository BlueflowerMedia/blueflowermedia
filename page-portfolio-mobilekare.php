<?php get_header(); ?>

<section id="portfolio">
  <div class="container flex-column">
    <h4>Case Study</h4>
    <h1 id="remove-margin" >Mobilekare</h1>
    <div class="project-tags">
      <button class="tag web" disabled>Logo Design</button>
      <button class="tag graphics" disabled>E-Commerce Design</button>
      <button class="tag web" disabled>Product/Inventory Management</button>
      <button class="tag graphics" disabled>Multi Platform Product Upload Automation</button>
      <button class="tag web" disabled>Web/Print Design</button>
    </div>

    <div class="short-description">
      <p>All of Mobilekare's experience in retail lead them to choose us to take them online. We made sure MobileKare’s website has a user-focused design purposed for high volumes of sales. The product uploading procces is streamlined and automated for several different online platforms.<p>
  </div>
    <div class="item-column">


    <div class="item-column-inner">
      <!-- 1st -->
      <div class="item1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/mobile-kare-portfolio-photo-1.png" alt="" class="image">
      </div>
      <div class="item1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/mobile-kare-portfolio-photo-2.png" alt="" class="image">
      </div>
    </div>
    <div class="item-column-inner">
      <!-- 1st -->
      <div class="item1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/mobile-kare-portfolio-photo-3.png" alt="" class="image">
      </div>
      <div class="item1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/mobile-kare-portfolio-photo-1.png" alt="" class="image">
      </div>
    </div>
    </div>

  </div>



</section>

<!-- section-getintouch-->
<section id="section-getintouch">
  <div class="container">
    <a href="<?php echo get_permalink(get_page_by_path( 'contact' )); ?>"><button type="button" name="button">Let's Get Started!</button></a>
  </div>
</section>





<?php get_footer(); ?>
