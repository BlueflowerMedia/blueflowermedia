<?php get_header(); ?>

<section id="portfolio">
  <div class="container flex-column">
    <h1>Our Portfolio<span class="big-dot blue">.</span></h1>

    <!-- 1st -->
    <div class="project left sr">
      <div class="mobile-project-title">
        <h2 class="underline blue-underline">India Journal</h2>
      </div>
      <div class="row owl-carousel portfolio-slider">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/india-journal-portfolio-photo-1.png" alt="" class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/india-journal-portfolio-photo-2.png" alt="" class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/india-journal-portfolio-photo-3.png" alt="" class="image">
      </div>

      <div class="short-description">
        <h2>India Journal</h2>
        <p>India Journal was distributing up to 45000 copies physically without an online presence prior to meeting us. The goal was to make an digital presence for India Journal that would allow the admins to upload content intuitively, while allowing the
          customers to view the website had to be user friendly and attention grabbing on all platforms.</p>
        <div class="project-tags">
          <button class="tag web" disabled>Web design</button>
          <button class="tag graphics" disabled>Plugin Development</button>
          <button class="tag web" disabled>Graphic Design</button>
        </div>
      </div>
    </div>
    <!-- 2nd -->
    <div class="project right sr">
      <div class="mobile-project-title">
        <h2 class="underline blue-underline">Reginos Pizza</h2>
      </div>
      <div class="row owl-carousel portfolio-slider">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/reginos-pizzia-portfolio-photo-1.png" alt="" class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/reginos-pizza-portfolio-photo-2.png" alt="" class="image">
      </div>

      <div class="short-description">
        <h2>Reginos Pizza</h2>
        <p>Reginos Pizza, with their 14 locations needed a dedicated graphic design team to design their restaurant flyers, interior posters, menus, web graphics, tv screens, etc. It was our job to make sure the design was amazing and consistent throughout
          make the brand experience memorable. We now take care of all Reginos Pizza design work.</p>
        <div class="project-tags">
          <button class="tag web" disabled>Flyer Design</button>
          <button class="tag graphics" disabled>Graphic Design</button>
          <button class="tag web" disabled>Brand Style Guide</button>
        </div>

      </div>
    </div>
    <!-- 3th -->
    <div class="project left sr">
      <div class="mobile-project-title">
        <h2 class="underline blue-underline">Master Pizzeria</h2>
      </div>
      <div class="row owl-carousel portfolio-slider">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/master-pizzeria-portfolio-photo-1.png" alt="" class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/master-pizzeria-portfolio-photo-2.png" alt="" class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/master-pizzeria-portfolio-photo-3.png" alt="" class="image">
      </div>

      <div class="short-description">
        <h2>Master Pizzeria</h2>
        <p>Master Pizzeria had already established their brand presence locally and needed to make the jump to go online while creating menus and promotional flyers for their business. The goal was to allow their online visitors to get a full glimpse of
          what their experience at Master Pizzeria could be like before ever being inside.</p>
        <div class="project-tags">
          <button class="tag web" disabled>Web design</button>
          <button class="tag graphics" disabled>Plugin Development</button>
          <button class="tag web" disabled>Graphic Design</button>
        </div>
      </div>
    </div>
    <!-- 4th -->
    <div class="project right sr">
      <div class="mobile-project-title">
        <h2 class="underline blue-underline">MobileKare</h2>
      </div>
      <div class="row owl-carousel portfolio-slider">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/mobile-kare-portfolio-photo-1.png" alt="" class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/mobile-kare-portfolio-photo-2.png" alt="" class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/mobile-kare-portfolio-photo-3.png" alt="" class="image">

      </div>



      <div class="short-description">
        <h2>MobileKare</h2>
        <p>All of Mobilekare's experience in retail lead them to choose us to take them online. We made sure MobileKare’s website has a user-focused design purposed for high volumes of sales. The product uploading procces is streamlined and automated for several different online platforms.<p>
            <div class="project-tags">
              <!-- <button class="tag web" disabled>Web Desisergn</button> -->
              <button class="tag web" disabled>Logo Design</button>
              <button class="tag graphics" disabled>E-Commerce Design</button>
              <button class="tag web" disabled>Product/Inventory Management</button>
              <button class="tag graphics" disabled>Multi Platform Product Upload Automation</button>
              <button class="tag web" disabled>Web/Print Design</button>
            </div>
      </div>
    </div>
    <!-- end  -->
  </div>

</section>

<!-- section-getintouch-->
<section id="section-getintouch" class="blue">
  <div class="container">
    <a href="<?php echo get_the_title(get_page_by_path( 'contact' )); ?>"><button type="button" name="button">Let's Get Started!</button></a>
  </div>
</section>





<?php get_footer(); ?>
