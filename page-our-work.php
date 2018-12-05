<?php get_header(); ?>

<section id="portfolio">
  <div class="container flex-column">
    <h1>Our Work<span class="big-dot blue">.</span></h1>

    <!-- first row -->
    <div class="item-row">
      <!-- 1st -->
      <div class="item">
        <img class = "mySlides" src="<?php echo get_template_directory_uri(); ?>/images/our-work/bfm-our-work-india-journal-1.png" alt="" class="image">
        <img class = "mySlides" src="<?php echo get_template_directory_uri(); ?>/images/our-work/bfm-our-work-india-journal-2.png" alt="" class="image">
        <img class = "mySlides" src="<?php echo get_template_directory_uri(); ?>/images/our-work/bfm-our-work-india-journal-3.png" alt="" class="image">
        <h4>India Journal</h4>
        <div class="project-tags">
          <button class="tag web" disabled>Web design</button>
          <button class="tag graphics" disabled>Plugin Development</button>
          <button class="tag web" disabled>Graphic Design</button>
        </div>
      </div>
      <!-- 2nd -->
      <div class="item">
        <!-- <a  class="mySlides1" href="<?php echo get_permalink(get_page_by_path( 'portfolio-reginos-pizza' )); ?>">  <img src="<?php echo get_template_directory_uri(); ?>/images/our-work/bfm-our-work-reginos-1.png" alt="" class="image"></a>
        <a  class="mySlides1" href="<?php echo get_permalink(get_page_by_path( 'portfolio-reginos-pizza' )); ?>">  <img src="<?php echo get_template_directory_uri(); ?>/images/our-work/bfm-our-work-reginos-2.png" alt="" class="image"></a> -->

       <img class="mySlides1" src="<?php echo get_template_directory_uri(); ?>/images/our-work/bfm-our-work-reginos-1.png" alt="" class="image">
       <img class="mySlides1" src="<?php echo get_template_directory_uri(); ?>/images/our-work/bfm-our-work-reginos-2.png" alt="" class="image">
        <h4>Reginos Pizza</h4>
        <div class="project-tags">
          <button class="tag web" disabled>Flyer Design</button>
          <button class="tag graphics" disabled>Graphic Design</button>
          <button class="tag web" disabled>Brand Style Guide</button>
        </div>
      </div>
      <!-- 3rd -->

      <div class="item">
       <img class="mySlides2" src="<?php echo get_template_directory_uri(); ?>/images/our-work/bfm-our-work-luxmark-1.png" alt="" class="image">
       <img class="mySlides2" src="<?php echo get_template_directory_uri(); ?>/images/our-work/bfm-our-work-luxmark-2.png" alt="" class="image">
        <h4>Luxmark</h4>
        <div class="project-tags">
          <button class="tag web" disabled>Web design</button>
          <button class="tag graphics" disabled>Plugin Development</button>
          <button class="tag web" disabled>Graphic Design</button>
        </div>
      </div>

    </div>


    <!-- second row -->
    <div class="item-row">
      <!-- 1st -->
      <div class="item">
        <img class="mySlides4" src="<?php echo get_template_directory_uri(); ?>/images/our-work/bfm-our-work-playcation-1.png" alt="" class="image">
        <img class="mySlides4" src="<?php echo get_template_directory_uri(); ?>/images/our-work/bfm-our-work-playcation-2.png" alt="" class="image">
        <h4>Playcation</h4>
        <div class="project-tags">
          <button class="tag web" disabled>Web design</button>
          <button class="tag graphics" disabled>Graphic Design</button>
        </div>
      </div>
      <!-- 2nd -->
      <div class="item">
        <img class="mySlides3" src="<?php echo get_template_directory_uri(); ?>/images/our-work/bfm-our-work-tdot-canna-1.png" alt="" class="image">
        <img class="mySlides3" src="<?php echo get_template_directory_uri(); ?>/images/our-work/bfm-our-work-tdot-canna-2.png" alt="" class="image">
        <img class="mySlides3" src="<?php echo get_template_directory_uri(); ?>/images/our-work/bfm-our-work-tdot-canna-3.png" alt="" class="image">

        <h4>Tdot Canna</h4>
        <div class="project-tags">
          <!-- <button class="tag web" disabled>Web Desisergn</button> -->
          <button class="tag web" disabled>Logo Design</button>
          <button class="tag graphics" disabled>E-Commerce Design</button>
          <button class="tag web" disabled>Web/Print Design</button>
        </div>
      </div>
      <!-- 3rd item -->
      <div class="item">
        <img class="mySlides5" src="<?php echo get_template_directory_uri(); ?>/images/our-work/bfm-our-work-tech-beluga-1.png" alt="" class="image">
        <img class="mySlides5" src="<?php echo get_template_directory_uri(); ?>/images/our-work/bfm-our-work-tech-beluga-2.png" alt="" class="image">
        <!-- <img class="mySlides6" src="<?php echo get_template_directory_uri(); ?>/images/animations/lawyer.svg" alt="" class="image" >
        <img class="mySlides6" src="<?php echo get_template_directory_uri(); ?>/images/animations/barber.svg" alt="" class="image" >
        <img class="mySlides6" src="<?php echo get_template_directory_uri(); ?>/images/animations/chef.svg" alt="" class="image" > -->


        <h4>Tech Beluga</h4>
        <div class="project-tags">
          <button class="tag web" disabled>Web design</button>
          <button class="tag graphics" disabled>E-Commerce Design</button>
          <button class="tag web" disabled>Graphic Design</button>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- section-getintouch-->
<?php get_template_part('template-parts/getintouch'); ?>




<?php get_footer(); ?>
