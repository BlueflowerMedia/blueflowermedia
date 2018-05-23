<?php get_header(); ?>

<section id="services">
  <div class="container flex-row">
    <div class="flex1 services-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-web-design-icon.svg" alt="" class="image">
    </div>
    <div class="txtservice flex2">
      <h1>Web Design<span class="big-dot blue">.</span></h1>
      <p>We build result- oriented intuitive websites guaranteed to leave a lasting impression.
      </p>
    </div>
  </div>
</section>
<!-- section prices -->
<section id="section-prz">
  <div class="container flex-row">
    <!--   price 1 begin -->
    <div class="prz">
      <!-- <img src="https://placeimg.com/150/100/arch" alt=""> -->
      <h3 class="prz-message ">Single Page</h3>
      <h2 class="price">$1,300</h2>
      <hr>
      <p>Customized Wordpress Theme</p>
      <hr>
      <p>Google Maps</p>
      <hr>
      <p>Social Media Integration</p>
      <hr>
      <p>Google Analytics Integration</p>
      <hr>
      <p>4 Menu Items</p>
      <hr>
      <p>Gallery (up to 24 Images)</p>
      <hr>
      <p>2 Rounds of Design Revisions</p>
      <hr>
    </div>
    <!--   price 2 begin -->
    <div class="prz">
      <!-- <img src="https://placeimg.com/150/100/arch" alt=""> -->
      <h3 class="prz-message ">Standard 5 page</h3>
      <h2 class="price">$2,200</h2>
      <hr>
      <p>Customized Wordpress Theme</p>
      <hr>
      <p>Google Maps</p>
      <hr>
      <p>Social Media Integration</p>
      <hr>
      <p>Google Analytics Integration</p>
      <hr>
      <p>XML Sitemap</p>
      <hr>
      <p>Mailing List</p>
      <hr>
      <p>4 Custom Icons</p>
      <hr>
      <p>5 Pages</p>
      <hr>
      <p>Gallery (up to100 Images)</p>
      <hr>
      <p>3 Rounds of Design Revisions</p>
      <hr>
    </div>
    <!--   price 3 begin -->
    <div class="prz">
      <!-- <img src="https://placeimg.com/150/100/arch" alt=""> -->
      <h3 class="prz-message ">Ecommerce</h3>
      <h2 class="price">$3,600</h2>
      <hr>
      <p>Customized Wordpress Theme</p>
      <hr>
      <p>Google Maps</p>
      <hr>
      <p>Social Media Integration</p>
      <hr>
      <p>Google Analytics Integration</p>
      <hr>
      <p>XML Sitemap</p>
      <hr>
      <p>Mailing List</p>
      <hr>
      <p>4 Custom Icons</p>
      <hr>
      <p>6 Pages (excluding category pages)</p>
      <hr>
      <p>Advanced product lters</p>
      <hr>
      <p>3 Custom Website Banners</p>
      <hr>
      <p>50 Products Uploads</p>
      <hr>
      <p>Custom Shipping Rates</p>
      <hr>
      <p>3 Rounds of Design Revisions</p>
      <hr>
			<p>* client is expected to provide product photos, names, and prices Comment on text</p>
    </div>
    <!--   price 3 end -->
  </div>

</section>
<!-- end web design ------------------------------------------------------------------------------>

<!-- section-getintouch-->
<section id="section-getintouch">
  <div class="container">
    <a href="<?php echo get_the_title(get_page_by_path( 'contact' )); ?>"><button type="button" name="button">Let's Get Started!</button></a>
  </div>
</section>



<?php get_footer(); ?>
