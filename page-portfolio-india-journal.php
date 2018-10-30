<?php get_header(); ?>

<section id="portfolio">
  <div class="container flex-column">
    <h4>Case Study</h4>
    <h1 id="remove-margin" >India Journal</h1>
    <div class="project-tags">
      <button class="tag web" disabled>Web design</button>
      <button class="tag graphics" disabled>Plugin Development</button>
      <button class="tag web" disabled>Graphic Design</button>
    </div>

    <div class="short-description">
      <p>India Journal was distributing up to 45000 copies physically without an online presence prior to meeting us. The goal was to make an digital presence for India Journal that would allow the admins to upload content intuitively, while allowing the
        customers to view the website had to be user friendly and attention grabbing on all platforms.</p>
    </div>
    <div class="item-column">


    <div class="item-column-inner">
      <!-- 1st -->
      <div class="item1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/india-journal-portfolio-photo-1.png" alt="" class="image">
      </div>
      <div class="item1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/india-journal-portfolio-photo-2.png" alt="" class="image">
      </div>
    </div>
    <div class="item-column-inner">
      <!-- 1st -->
      <div class="item1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/india-journal-portfolio-photo-3.png" alt="" class="image">
      </div>
      <div class="item1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Portfolio Photos/india-journal-portfolio-photo-1.png" alt="" class="image">
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
