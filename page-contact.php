<?php get_header(); ?>


<div class="container no-bottom-padding">
  <h1>Contact Us<span class="big-dot blue">.</span></h1>
</div>


<section id="section-contact">
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

<?php get_footer(); ?>
