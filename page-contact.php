<?php get_header(); ?>


<div class="container no-bottom-padding">
  <h1>Get in Touch<span class="big-dot blue">.</span></h1>
</div>


<!-- <section id="section-contact">
  <div class="contact-container flex-row">
    <div class="contact-details-container">
        <div class="contact-items flex1">
          <div class="contact">
            <div class="contact-left">
              <i class="fas fa-mobile-alt"></i>
            </div>
            <div class="contact-right">
              <p>(647) 712 6119</p>
            </div>
          </div>
          <div class="contact">
            <div class="contact-left">
              <i class="far fa-envelope"></i>
            </div>
            <div class="contact-right">
              <p>contact@blueflowermedia.com</p>
            </div>
          </div>

          <div class="contact">
            <div class="contact-left">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="contact-right">
              <p>3214 Danforth Ave<br>Toronto, Ontario, Canada</p>
            </div>
          </div>

          <div class="contact">
            <div class="contact-left">
              <i class="far fa-clock"></i>
            </div>
            <div class="contact-right">
              <p>MON - FRI: 10:00 AM to 6:00 PM EST</p>
            </div>
          </div>
        </div>
    </div>


    <div class="contact-form-container">
      <div class="contact-form flex1" >
        <?php echo do_shortcode( '[contact-form-7 id="54" title="Contact form 1"]' ) ?>
      </div>
    </div>
  </div>
</section> -->

<section id ="section-contact">
  <div class="container-contact">
    <!-- <h2>Get in Touch.</h2> -->
    <p>Contact us to know how we can help you. Or just say Hi.</p>
    <div class="contact-form flex-row">
      <?php echo do_shortcode( '[contact-form-7 id="42" title="Contact Form"]' ) ?>
    </div>
    <div class="contact-info">
      <div class="info-left">
          <i class="fas fa-mobile-alt"></i>
          <p>(647) 712 6119</p>
      </div>
      <div class="info-center">
          <i class="far fa-envelope"></i>
          <p>contact@blueflowermedia.com</p>

      </div>
      <div class="info-right">
          <i class="far fa-clock"></i>
          <p>MON - FRI: 10:00 AM to 6:00 PM EST</p>
      </div>

    </div>
  </div>
</section>
<section class="contact-map">
  <div class="contact-map ">
    <iframe src="https://snazzymaps.com/embed/129550" width="100%" height="500px" style="border:none;"></iframe>
  </div>
</section>

<?php get_footer(); ?>
