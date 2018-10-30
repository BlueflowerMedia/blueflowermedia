<?php get_header(); ?>

<section id="portfolio">
  <div class="container flex-column">
    <h4>Case Study</h4>
    <h1 id="remove-margin" >Reginos Pizza</h1>
    <div class="project-tags">
      <button class="tag web" disabled>Flyer Design</button>
      <button class="tag graphics" disabled>Graphic Design</button>
      <button class="tag web" disabled>Brand Style Guide</button>
    </div>

    <div class="short-description">
      <p>Reginos Pizza, with their 14 locations needed a dedicated graphic design team to design their restaurant flyers, interior posters, menus, web graphics, tv screens, etc. It was our job to make sure the design was amazing and consistent throughout
        make the brand experience memorable. We now take care of all Reginos Pizza design work.</p>
  </div>
    <div class="item-column">


    <div class="item-column-inner">
      <!-- 1st -->
      <div class="item1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/reginos-pizzia-portfolio-photo-1.png" alt="" class="image">
      </div>
      <div class="item1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/reginos-pizza-portfolio-photo-2.png" alt="" class="image">
      </div>
    </div>
    <div class="item-column-inner">
      <!-- 1st -->
      <div class="item1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/reginos-pizzia-portfolio-photo-1.png" alt="" class="image">
      </div>
      <div class="item1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/reginos-pizza-portfolio-photo-2.png" alt="" class="image">
      </div>
    </div>
    </div>

  </div>



</section>

<!-- section-getintouch-->
<section id="section-getintouch" class="blue">
  <div class="container">
    <a href="<?php echo get_permalink(get_page_by_path( 'contact' )); ?>"><button type="button" name="button">Let's Get Started!</button></a>
  </div>
</section>





<?php get_footer(); ?>
