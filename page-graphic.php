<?php get_header(); ?>

<section id="services">
  <div class="container flex-row">
    <div class="services-logo flex1">
      <img src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-graphic-design-icon.svg" alt="" class="image">
    </div>
    <div class="txtservice flex2">
      <h1>Graphic Design<span class="big-dot blue">.</span></h1>
      <p>First-impressions can only be made once. Design affects how your audience views your brand along with the emotions they associate with your brand. We love working with clients that have a strong vision in how they want to be remembered. <br><br>
      We work with clients from the very early stages, from brainstorming branding to creating consistent digital and print materials that will leave a lasting impression on the customer.
     </p>
    </div>
  </div>
</section>

<!-- the process -->
<section id="section-process" class="process">

    <div class="txtservice1 flex-row">
      <h1>The Process<span class="big-dot blue">.</span></h1>
    </div>

  <div class="container-process">
    <div class="figures">
      <div class="step">
        <img class="step-number" src="<?php echo get_template_directory_uri(); ?>/images/graphic-new/1.png" alt="" class="image">
        <img class="step-image" src="<?php echo get_template_directory_uri(); ?>/images/graphic-new/order.png" alt="" class="image">

      </div>

      <div class="arrow">
        <img src="<?php echo get_template_directory_uri(); ?>/images/graphic-new/arrow.png" alt="" class="image">
      </div>

      <div class="step">
        <img class="step-number" src="<?php echo get_template_directory_uri(); ?>/images/graphic-new/2.png" alt="" class="image">
        <img class="step-image" src="<?php echo get_template_directory_uri(); ?>/images/graphic-new/research.png" alt="" class="image">
      </div>

      <div class="arrow">
        <img src="<?php echo get_template_directory_uri(); ?>/images/graphic-new/arrow.png" alt="" class="image">
      </div>

      <div class="step">
        <img class="step-number" src="<?php echo get_template_directory_uri(); ?>/images/graphic-new/3.png" alt="" class="image">

        <img class="step-image" src="<?php echo get_template_directory_uri(); ?>/images/graphic-new/web.png" alt="" class="image">
      </div>

      <div class="arrow">
        <img src="<?php echo get_template_directory_uri(); ?>/images/graphic-new/arrow.png" alt="" class="image">
      </div>

      <div class="step">
        <img class="step-number" src="<?php echo get_template_directory_uri(); ?>/images/graphic-new/4.png" alt="" class="image">
        <img class="step-image" src="<?php echo get_template_directory_uri(); ?>/images/graphic-new/design.png" alt="" class="image">
      </div>
    </div>
    <div class="texts">
      <div class="texts-one">
        <p>Brief</p>
      </div>
      <div class="texts-one">
        <p>Research</p>
      </div>
      <div class="texts-one">
        <p>Design</p>
      </div>
      <div class="texts-one">
        <p>Revise</p>
      </div>
    </div>
  </div>

</section>

<!-- what we design section -->
<section id="section-whatwedesign">
  <div class="container">
    <div class="whatwedesign">
      <div class="whatwedesign-logo flex1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-graphic-design-icon.svg" alt="" class="image">
      </div>
      <div class="whatwedesign-text flex1">
        <h4>Logo</h4>
        <p>In a multi-device world, its very important to attract and retain users on as many touch points as </p>
        <h4>Brand Style Guide</h4>
        <p>i-device world, its very important to attract ani-device world, its very important to attract an</p>
        <h4>Website Illustrations & Icons</h4>
        <p>In a multi-device world, its very important to attract and retain users on as many touch points as </p>
        <h4>Print Materials</h4>
        <p>In a multi-device world, its very important to attract and retain users on as many touch points as </p>
        <h4>Outdoor Signs</h4>
        <p>In a multi-device world, its very important to attract and retain users on as many touch points as </p>
      </div>
    </div>
  </div>
</section>


<!-- section i-am-ready-->

<section id-"section-iamready">
  <div class="container">
    <div class="iamready">
      <div class="iamreadyleft">
        <h2>Want to get started?</h2>
        <h5>BlueFlower Media offers phone, email, and in person support for all of our clients.</h5>
      </div>
      <div class="iamreadyright">
        <a href="<?php echo get_the_title(get_page_by_path( 'contact' )); ?>"><button type="button" name="button">I'm Ready!</button></a>
      </div>
    </div>

  </div>
</section>



<?php get_footer(); ?>
