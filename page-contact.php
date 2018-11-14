<?php get_header(); ?>


<div class="container no-bottom-padding">
  <h1>Contact Us<span class="big-dot blue">.</span></h1>
</div>
<section id="section-contact">
  <div class="container">

    <div class="row flex-row">
      <div class="contact-type flex1">
        <i class="fas fa-mobile-alt"></i>
        <h4>Phone Number</h4>
        <p>647-712-6119</p>
        <i class="fas fa-envelope-open"></i>
        <h4>E-mail</h4>
        <p>contact@blueflowermedia.com</p>
        <i class="fas fa-map-marker-alt"></i>
        <h4>Location</h4>
        <p>3214 Danforth Ave,<br>Toronto, ON M1L 1C1</p>
        <i class="fas fa-clock"></i>
        <h4>Hours</h4>
        <p>10 AM to 6 PM</p>

      </div>

      <!-- <div class="contact-map flex2">
        <iframe src="https://snazzymaps.com/embed/76304" width="100%" height="500px" style="border:none;"></iframe>
      </div> -->
      <div class="contact-form flex3" >
        <!-- <h2>Get in touch!</h2> -->
        <?php echo do_shortcode( '[contact-form-7 id="42" title="Contact Form"]' ) ?>
      </div>
    </div>
  </div>
</section>

<section class="contact-map">
  <div class="contact-map ">
    <iframe src="https://snazzymaps.com/embed/76304" width="100%" height="500px" style="border:none;"></iframe>
  </div>
</section>
<!-- <section id="contact-form">
  <div class="container">
    <h2>Get in touch!</h2>
    <?php echo do_shortcode( '[contact-form-7 id="54" title="Contact Form 1"]' ) ?>
  </div>
</section> -->


<!-- section-getintouch ---------------------------------------------------->
<?php get_template_part('template-parts/getintouch'); ?>

<?php get_footer(); ?>
