<?php get_header(); ?>

<section id="portfolio">
  <div class="container flex-column">
    <h1>Our Portfolio<span class="big-dot blue">.</span></h1>

    <div class="item-row">
      <!-- 1st -->
      <div class="item">
        <a href="<?php echo get_the_title(get_page_by_path( 'portfolio-india-journal' )); ?>">  <img src="<?php echo get_template_directory_uri(); ?>/images/portfolios/1.png" alt="" class="image"></a>
        <h4>India Journal</h4>
        <div class="project-tags">
          <button class="tag web" disabled>Web design</button>
          <button class="tag graphics" disabled>Plugin Development</button>
          <button class="tag web" disabled>Graphic Design</button>
        </div>
      </div>
      <!-- 2nd -->
      <div class="item">
        <a href="<?php echo get_the_title(get_page_by_path( 'portfolio-reginos-pizza' )); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/portfolios/2.gif" alt="" class="image"></a>
        <h4>Reginos Pizza</h4>
        <div class="project-tags">
          <button class="tag web" disabled>Flyer Design</button>
          <button class="tag graphics" disabled>Graphic Design</button>
          <button class="tag web" disabled>Brand Style Guide</button>
        </div>
      </div>
    </div>

    <div class="item-row">
      <!-- 1st -->
      <div class="item">
        <a href="<?php echo get_the_title(get_page_by_path( 'portfolio-master-pizzeria' )); ?>">  <img src="<?php echo get_template_directory_uri(); ?>/images/portfolios/1.png" alt="" class="image"></a>
        <h4>Master Pizzeria</h4>
        <div class="project-tags">
          <button class="tag web" disabled>Web design</button>
          <button class="tag graphics" disabled>Plugin Development</button>
          <button class="tag web" disabled>Graphic Design</button>
        </div>
      </div>
      <!-- 2nd -->
      <div class="item">
        <a href="<?php echo get_the_title(get_page_by_path( 'portfolio-mobilekare' )); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/portfolios/2.gif" alt="" class="image"></a>
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
<section id="section-getintouch" class="blue">
  <div class="container">
    <a href="<?php echo get_the_title(get_page_by_path( 'contact' )); ?>"><button type="button" name="button">Let's Get Started!</button></a>
  </div>
</section>





<?php get_footer(); ?>
