<?php get_header(); ?>

<section id="portfolio">
  <div class="container flex-column">
    <h4>Case Study</h4>
    <h1 id="remove-margin" >Master Pizzeria</h1>
    <div class="project-tags">
      <button class="tag web" disabled>Web design</button>
      <button class="tag graphics" disabled>Plugin Development</button>
      <button class="tag web" disabled>Graphic Design</button>
    </div>

    <div class="short-description">
      <p>Master Pizzeria had already established their brand presence locally and needed to make the jump to go online while creating menus and promotional flyers for their business. The goal was to allow their online visitors to get a full glimpse of
        what their experience at Master Pizzeria could be like before ever being inside.</p>
    </div>
    <div class="item-column">


    <div class="item-column-inner">
      <!-- 1st -->
      <div class="item1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/master-pizzeria-portfolio-photo-1.png" alt="" class="image">
      </div>
      <div class="item1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/master-pizzeria-portfolio-photo-2.png" alt="" class="image">
      </div>
    </div>
    <div class="item-column-inner">
      <!-- 1st -->
      <div class="item1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/master-pizzeria-portfolio-photo-3.png" alt="" class="image">
      </div>
      <div class="item1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/master-pizzeria-portfolio-photo-1.png" alt="" class="image">
      </div>
    </div>
    </div>

  </div>



</section>

<!-- section-getintouch-->
<section id="section-getintouch" class="blue">
  <div class="container">
    <a href="<?php echo get_the_title(get_page_by_path( 'contact' )); ?>"><button type="button" name="button">Let's Get Started!</button></a>
  </div>
</section>





<?php get_footer(); ?>
