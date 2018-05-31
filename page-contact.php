<?php get_header(); ?>

<section id="section-contact">
  <div class="container">
    <h1>Contacts<span class="big-dot blue">.</span></h1>
    <section id="section-contact-buttons" class="flex-row">
      <button id="form-btn1" class="form-button" type="button"><h4>Small Businesses</h4></button>
      <button id="form-btn2" class="form-button" type="button"><h4>Agencies</h4></button>
    </section>

    <section id="section-contact-forms">
      <div class="container">
        <div class="form active" id="form1">
          <?php echo do_shortcode( '[contact-form-7 id="55" title="Small Business"]' ); ?>
        </div>

        <div class="form" id="form2">
          <?php echo do_shortcode( '[contact-form-7 id="56" title="Agency"]' ); ?>
        </div>
      </div>
    </section>

  </div>
</section>

<section id="contact-map">
  <div class="container flex-row">
    <div class="contact-info flex1">
      <h3>INFO<span class="big-dot blue">.</span></h3>
      <p>
        <a href=""><i class="fas fa-phone-volume" style="color:#3B5998"></i></a>
        (647) 712-6119
      </p>
      <p>
        <a href=""><i class="fas fa-envelope-square" style="color:#3B5998"></i></a>
        contact@blueflowermedia.com
      </p>
      <p>
        <a href=""><i class="fas fa-map-marker" style="color:red"></i></a>
        3214 Danforth Ave Scarborough, M1L 1C1 (ON) CANADA
      </p>
    </div>
    <div class="contact-map flex1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2884.863675380137!2d-79.2851469842383!3d43.692597457899666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4ce9bdc8b190f%3A0x9d406f3db94cb529!2sBlueFlower+Media!5e0!3m2!1sen!2sca!4v1525381550004"
        width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</section>

<?php get_footer(); ?>
