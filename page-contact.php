<?php get_header(); ?>

<section id="section-contact">
  <div class="container">
    <h1>Contact Us<span class="big-dot blue">.</span></h1>
    <div class="row flex-row">
      <div class="contact-type flex1">
        <i class="fas fa-map-marker-alt"></i>
        <h4>Location</h4>
        <p>3214 Danforth Ave,<br>Toronto, ON M1L 1C1</p>
        <i class="fas fa-mobile-alt"></i>
        <h4>Phone Number</h4>
        <p>647-712-6119</p>
        <i class="fas fa-envelope-open"></i>
        <h4>E-mail</h4>
        <p>contact@blueflowermedia.com</p>
      </div>

      <div class="contact-map flex2">
        <iframe src="https://snazzymaps.com/embed/76304" width="100%" height="500px" style="border:none;"></iframe>
      </div>

    </div>
  </div>
</section>

<section id="contact-form">
  <div class="container">
    <h2>Get in touch!</h2>
    <?php echo do_shortcode( '[contact-form-7 id="42" title="Contact Form"]' ) ?>
  </div>
</section>

<?php get_footer(); ?>
