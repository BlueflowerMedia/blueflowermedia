<?php get_header(); ?>

<section id="portfolio">
  <div class="container flex-column">
    <h1>Our Work<span class="big-dot blue">.</span></h1>

    <!-- first row -->
    <div class="item-row">
      <!-- 1st -->
      <div class="item">
        <a href="<?php echo get_permalink(get_page_by_path( 'portfolio-india-journal' )); ?>">  <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/india-journal-portfolio-photo-1.png" alt="" class="image"></a>
        <h4>India Journal</h4>
        <div class="project-tags">
          <button class="tag web" disabled>Web design</button>
          <button class="tag graphics" disabled>Plugin Development</button>
          <button class="tag web" disabled>Graphic Design</button>
        </div>
      </div>
      <!-- 2nd -->
      <div class="item">
        <a href="<?php echo get_permalink(get_page_by_path( 'portfolio-reginos-pizza' )); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/reginos-pizzia-portfolio-photo-1.png" alt="reginos-pizzia-portfolio-photo" class="image"></a>
        <h4>Reginos Pizza</h4>
        <div class="project-tags">
          <button class="tag web" disabled>Flyer Design</button>
          <button class="tag graphics" disabled>Graphic Design</button>
          <button class="tag web" disabled>Brand Style Guide</button>
        </div>
      </div>
      <!-- 3rd -->
      <div class="item">
        <a href="<?php echo get_permalink(get_page_by_path( 'portfolio-reginos-pizza' )); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/reginos-pizzia-portfolio-photo-1.png" alt="reginos-pizzia-portfolio-photo" class="image"></a>
        <h4>Reginos Pizza</h4>
        <div class="project-tags">
          <button class="tag web" disabled>Flyer Design</button>
          <button class="tag graphics" disabled>Graphic Design</button>
          <button class="tag web" disabled>Brand Style Guide</button>
        </div>
      </div>

    </div>


    <!-- second row -->
    <div class="item-row">
      <!-- 1st -->
      <div class="item">
        <a href="<?php echo get_permalink(get_page_by_path( 'portfolio-master-pizzeria' )); ?>">  <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/master-pizzeria-portfolio-photo-3.png" alt="" class="image"></a>
        <h4>Master Pizzeria</h4>
        <div class="project-tags">
          <button class="tag web" disabled>Web design</button>
          <button class="tag graphics" disabled>Plugin Development</button>
          <button class="tag web" disabled>Graphic Design</button>
        </div>
      </div>
      <!-- 2nd -->
      <div class="item">
        <a href="<?php echo get_permalink(get_page_by_path( 'portfolio-mobilekare' )); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/mobile-kare-portfolio-photo-1.png" alt="" class="image"></a>
        <h4>Mobicare</h4>
        <div class="project-tags">
          <!-- <button class="tag web" disabled>Web Desisergn</button> -->
          <button class="tag web" disabled>Logo Design</button>
          <button class="tag graphics" disabled>E-Commerce Design</button>
          <button class="tag web" disabled>Product/Inventory Management</button>
          <button class="tag graphics" disabled>Multi Platform Product Upload Automation</button>
          <button class="tag web" disabled>Web/Print Design</button>
        </div>
      </div>

      <!-- 3rd -->
      <div class="item">
        <a href="<?php echo get_permalink(get_page_by_path( 'portfolio-mobilekare' )); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/mobile-kare-portfolio-photo-1.png" alt="" class="image"></a>
        <h4>Mobicare</h4>
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

  </div>

</section>

<!-- section-getintouch-->
<?php get_template_part('template-parts/getintouch'); ?>




<?php get_footer(); ?>
