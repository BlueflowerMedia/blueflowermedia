<?php get_header(); ?>

<section id="section-contact">
  <div class="container">
    <h1>Contacts<span class="big-dot blue">.</span></h1>
    <section id="section-contact-buttons" class="flex-row">
      <button id="form-btn1" class="form-button" type="button" onclick="formSwitch('#form1','#form2');"><h4>Small Businesses</h4></button>
      <button id="form-btn2" class="form-button" type="button" onclick="formSwitch('#form2','#form1');"><h4>Agencies</h4></button>
    </section>

    <section id="section-contact-forms">
      <div class="container">
        <div class="form active" id="form1">
          <h1>Form1 </h1>
        </div>

        <div class="form" id="form2">
          <h1>Form2</h1>
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
        (647) 712-6119
      </p>
      <p>
        contact@blueflowermedia.com
      </p>
      <p>
        3214 Danforth Ave Scarborough ON - M1L 1C1 CANADA
      </p>
    </div>
    <div class="contact-map flex1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2884.863675380137!2d-79.2851469842383!3d43.692597457899666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4ce9bdc8b190f%3A0x9d406f3db94cb529!2sBlueFlower+Media!5e0!3m2!1sen!2sca!4v1525381550004"
        width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</section>

<?php get_footer(); ?>