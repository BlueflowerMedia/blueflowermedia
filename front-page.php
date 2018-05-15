<?php get_header(); ?>

<!-- section header -->
<section id="section-header" class="sr">
  <div id="particles"></div>
  <div class="container">
    <h1 class="sr blue">Let us help make your business bloom.</h1>
    <h3>The digital world is changing at an ever growing rate. <br> our job is to make sure your business adapts to market demands.</h3>
  </div>
</section>


<!-- section-aboutus ---------------------------------------------------->
<section id="section-aboutus">
  <div class="container flex-row">
    <div class="left">
      <h1 class="white">About Us<span class="big-dot yellow">.</span></h1>
      <p class="white">We are a <b>Toronto based digital agency</b> specializing in creating, improving, and managing your digital footprints. We work with clients from the ideation phase - brainstorming branding concepts, to developing and launching projects for mass
        market use. With an emphasis on user experience, we aim to make your website/app as intuitive and pleasant as possible. As we do all of our work in house, our people are the core of our company.</p>
    </div>
    <div class="fbox" id="fbox1" style="transform: rotate(45deg);" data-rellax-speed="4">
      <img src="<?php echo get_template_directory_uri(); ?>/images/about-icons/rocket.svg" alt="" style="transform: rotate(-45deg);">
    </div>
    <div class="fbox" id="fbox2" style="transform: rotate(45deg);" data-rellax-speed="5">
    </div>
    <div class="fbox" id="fbox3" style="transform: rotate(45deg);" data-rellax-speed="10">
      <img src="<?php echo get_template_directory_uri(); ?>/images/about-icons/target.svg" alt="" style="transform: rotate(-45deg);">
    </div>
  </div>
</section>

<!-- section-services -------------------------------------------------->
<section id="section-services">
  <div class="container">
    <h1>Services<span class="big-dot blue">.</span></h1>
    <p>Our in house services are flexible and customized based on our clients needs. Here are our general services we provide, talk to us to create a customized plan to help you achieve your specific goals!</p>
    <div class="services flex-row">
      <!-- service names begin --->
      <!-- service 1 --->
      <div class="service ">
        <div class="logo sr">
          <a href="<?php echo get_the_title(get_page_by_path( 'services-web-design' )); ?>"><img id="pic4" src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-web-design-icon.svg" alt="bfm-web-design-icon"></a>
        </div>
        <div class="service-content">
          <a href="<?php echo get_the_title(get_page_by_path( 'services-web-design' )); ?>"><h3 class="underline blue-underline">Web Design</h3></a>
          <p>We build results oriented intuitive websites that leave a lasting impression.</p>
          <ul class="service-list">
            <li>Wordpress Theme Development</li>
            <li>Web Application Development</li>
            <li>Database Management</li>
            <li>UI/UX Creation</li>
            <li>Search Engine Optimization</li>
            <li>Website Management</li>
          </ul>
        </div>
      </div>

      <!-- service 2 --->
      <div class="service ">
        <div class="logo sr">
          <a href="<?php echo get_the_title(get_page_by_path( 'services-graphic-design' )); ?>"><img id="pic4" src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-graphic-design-icon.svg" alt="bfm-graphic-design-icon"></a>
        </div>
        <div class="service-content">
          <a href="<?php echo get_the_title(get_page_by_path( 'services-graphic-design' )); ?>"><h3 class="underline blue-underline">Graphic Design</h3></a>
          <p>“Good design is good business” <br>- Thomas J. Watson Jr.</p>
          <ul class="service-list">
            <li>Logo Design</li>
            <li>Branding/Style Guides</li>
            <li>Posters/Signs</li>
            <li>Print Materials</li>
          </ul>
        </div>
      </div>

      <!-- service 3 --->
      <div class="service ">
        <div class="logo sr">
          <a href="<?php echo get_the_title(get_page_by_path( 'services-digital-marketing' )); ?>"><img id="pic4" src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-digital-marketing-icon.svg" alt="bfm-digital-marketing-icon"></a>
        </div>
        <div class="service-content">
          <a href="<?php echo get_the_title(get_page_by_path( 'services-digital-marketing' )); ?>"><h3 class="underline blue-underline">Digital Marketing</h3></a>
          <p>“The only thing left to do after you build your business, is to grow your business!” <br>- BlueFlower Media</p>
          <ul class="service-list">
            <li>Google Adwords Campaign Management</li>
            <li>Content Marketing</li>
            <li>Digital Advertising</li>
            <li>Website Analytics & Reports</li>
            <li>Influencer Marketing</li>
          </ul>
        </div>
      </div>

      <!-- service 4 --->
      <div class="service ">
        <div class="logo sr">
          <a href="<?php echo get_the_title(get_page_by_path( 'services-social-media-management' )); ?>"><img id="pic4" src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-social-icon.svg" alt="bfm-social-icon"></a>
        </div>
        <div class="service-content">
          <a href="<?php echo get_the_title(get_page_by_path( 'services-social-media-management' )); ?>"><h3 class="underline blue-underline">Social Media Management</h3></a>
          <p>We manage social profiles across all platforms. Engage with your audience real time and effectively.</p>
          <ul class="service-list">
            <li>Social Media Account Setup</li>
            <li>Content & Art Creation</li>
            <li>Post Management</li>
            <li>Social Advertising Management</li>
            <li>Content Writing/Marketing</li>
          </ul>
        </div>
      </div>

      <!-- service 5 --->
      <div class="service ">
        <div class="logo sr">
          <a href="<?php echo get_the_title(get_page_by_path( 'services-media-management' )); ?>"><img id="pic4" src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-media-icon.svg" alt="bfm-media-icon"></a>
        </div>
        <div class="service-content">
          <a href="<?php echo get_the_title(get_page_by_path( 'services-media-management' )); ?>"><h3 class="underline blue-underline">Media & Publishing Marketing</h3></a>
          <p>Grow your media business with newspaper/magazine design, advertiser management services, and more!</p>
          <ul class="service-list">
            <li>Newspaper/Magazine Design</li>
            <li>Content Management</li>
            <li>Adsense, DoubleClick For Publishers, and other Media Advertiser Tools</li>
            <li>Advertiser Portal Creation</li>
          </ul>
        </div>
      </div>

      <!-- service 6 --->
      <div class="service ">
        <div class="logo sr">
          <a href="<?php echo get_the_title(get_page_by_path( 'services-cloud-hosting' )); ?>"><img id="pic4" src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-hosting-icon.svg" alt="bfm-hosting-icon"></a>
        </div>
        <div class="service-content">
          <a href="<?php echo get_the_title(get_page_by_path( 'services-cloud-hosting' )); ?>"><h3 class="underline blue-underline">Cloud Hosting</h3></a>
          <p>Host your website/application on our secure platform. Affordable & Reliable.</p>
          <ul class="service-list">
            <li>Website/Web App Hosting</li>
            <li>Website/Web App Backup</li>
            <li>SSL Certificates</li>
            <li>Website Security and Management</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- service names end --->
  </div>
</section>

<!-- section-split-contacts ---------------------------------------------------->
<section id="section-split-contacts">
  <div class="container flex-row">

    <div class="item container-item-1 flex1">
      <h2>Small Business<span class="big-dot yellow">?</span></h2>
      <div class="image-1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/bfm-small-business-icon-1.png" alt="Image-1">
      </div>
      <p class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
      <button class="agency-business" type="button" name="button">Small Business</button>
    </div>


    <div class="item container-item-2 flex1">
      <h2>Agency<span class="big-dot yellow">?</span></h2>
      <div class="image-2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/bfm-agency-icon-1.png" alt="Image-2">
      </div>
      <p class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
      <button class="agency-business" type="button" name="button">Agency</button>
    </div>

  </div>
</section>

<!-- section-client-slider ---------------------------------------------------->
<section id="section-client-slider">
  <div class="container">
    <div class="row">
      <h2>Our Clients<span class="big-dot blue">.</span></h2>
    </div>
    <div class="row owl-carousel client-logo-slider">
      <div>
        <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/client-logos/bfm-india-journal-logo.png" alt="India journal logo">
      </div>
      <div>
        <img id="pic2" src="<?php echo get_template_directory_uri(); ?>/images/client-logos/bfm-master-pizzeria-logo.png" alt="Master Pizzeria logo">
      </div>
      <div>
        <img id="pic3" src="<?php echo get_template_directory_uri(); ?>/images/client-logos/bfm-mobile-kare-logo.png" alt="Mobile Kare logo">
      </div>
      <div>
        <img id="pic4" src="<?php echo get_template_directory_uri(); ?>/images/client-logos/bfm-mobilinq-logo.png" alt="Mobilinq logo">
      </div>
      <div>
        <img id="pic5" src="<?php echo get_template_directory_uri(); ?>/images/client-logos/bfm-reginos-logo.png" alt="Reginos logo">
      </div>
      <div>
        <img id="pic6" src="<?php echo get_template_directory_uri(); ?>/images/client-logos/bfm-tba-logo.png" alt="TBA logo">
      </div>
    </div>
  </div>
</section>

<!-- section-testomonials ---------------------------------------------------->
<section id="section-testomonials">
  <div class="container">
    <div class="row">
      <h2>Testimonials<span class="big-dot yellow">.</span></h2>
    </div>
    <div class="row flex-row testimonials">

      <!--   Testimonial 1 begin -->
      <div class="test">
        <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/testimonial/Christian Turner_2531-300x200.jpg" alt="">
        <p class="test-message">Blueflower Media created my e-commerce website for my artwork from scratch. In a short period of time the website was up and working with great visuals and smooth functionality for visitors. Staff are friendly, flexible and the project was completed
          on budget. I recommend them :)</p>
        <p class="author">Christian</p>
        <p class="company">CT Paintings</p>
      </div>
      <!--   Testimonia 1 end -->
      <!--   Testimonial 2 begin -->
      <div class="test">
        <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/client-logos/bfm-india-journal-logo.png" alt="">
        <p class="test-message">What a talented group of next-gen creative minds can do for your business. They put it in the spotlight with an exciting website with eye-captivating visuals and contents and give you the tools that can conquer the world of your business - these
          nerds are creative, neat, very intimidating, cool and always evolving.</p>
        <p class="author">Shail</p>
        <p class="company">India Journal</p>
      </div>
      <!--   Testimonia 2 end -->


    </div>
  </div>
</section>

<!-- section-getintouch ---------------------------------------------------->
<section id="section-getintouch">
  <div class="container">
    <a href="<?php echo get_the_title(get_page_by_path( 'contact' )); ?>"><button type="button" name="button">Let's Get Started!</button></a>
  </div>
</section>

<?php get_footer(); ?>