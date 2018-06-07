<?php get_header();
$webdesign = get_permalink(get_page_by_path( 'services-web-design' ));
$graphicdesign = get_permalink(get_page_by_path( 'services-graphic-design' ));
$digitalmarketing = get_permalink(get_page_by_path( 'services-digital-marketing' ));
$socialmediamanagement = get_permalink(get_page_by_path( 'services-social-media-management' ));
$mediapublishingmanagement = get_permalink(get_page_by_path( 'services-media-and-publishing-marketing' ));
$cloudhosting = get_permalink(get_page_by_path( 'services-cloud-hosting' ));
?>

<!-- section header -->
<section id="section-header" class="sr">
  <div id="particles"></div>
  <div class="container">
    <h1 class="sr blue">Let's make your business bloom!</h1>
    <h3>The Digital World is vast and ever-changing. <br> We keep your business at the Digital Frontier.</h3>
  </div>
</section>


<!-- section-aboutus ---------------------------------------------------->
<section id="section-aboutus">
  <div class="container flex-row">
    <div class="left">
      <h1 class="white">About Us<span class="big-dot yellow">.</span></h1>
      <p class="white">We are a <b>Toronto based digital agency</b> specializing in creating, improving, and managing your digital footprints. We work with clients from the ground up - anything from brainstorming branding concepts to developing and launching projects
        for mass market use. With an emphasis on user experience, we make your website/app intuitive and accessible to all your clients. We do all of our work in house so our people are well-versed and the very core of BlueFlower Media.</p>
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
    <p>Our in house services are flexible and tailored to each of our clients' unique needs. Here are our general services we provide, simply contact us to tailor a customized plan for your vision!</p>
    <div class="services flex-row">
      <!-- service names begin --->
      <!-- service 1 --->
      <div class="service">
        <a class="service-anchor" href="<?php echo $webdesign; ?>">
          <div class="logo">
            <img id="pic4" src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-web-design-icon.svg" alt="bfm-web-design-icon">
            <h3 class="underline blue-underline">Web Design</h3>
          </div>
        </a>
        <div class="service-content">
          <p>We build result- oriented intuitive websites guaranteed to leave a lasting impression.</p>
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
        <a class="service-anchor" href="<?php echo $graphicdesign; ?>">
          <div class="logo">
            <img id="pic4" src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-graphic-design-icon.svg" alt="bfm-graphic-design-icon">
            <h3 class="underline blue-underline">Graphic Design</h3>
          </div>
        </a>
        <div class="service-content">
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
        <a class="service-anchor" href="<?php echo $digitalmarketing; ?>">
          <div class="logo">
            <img id="pic4" src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-digital-marketing-icon.svg" alt="bfm-digital-marketing-icon">
            <h3 class="underline blue-underline">Digital Marketing</h3>
          </div>
        </a>
        <div class="service-content">
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
      <div class="service">
        <a class="service-anchor" href="<?php echo $socialmediamanagement; ?>">
          <div class="logo">
            <img id="pic4" src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-social-icon.svg" alt="bfm-social-icon">
            <h3 class="underline blue-underline">Social Media Management</h3>
          </div>
        </a>
        <div class="service-content">
          <p>We manage social profiles across all platforms. Engage with your audience effectivly in real time.</p>
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
        <a class="service-anchor" href="<?php echo $mediapublishingmanagement; ?>">
          <div class="logo">
            <img id="pic4" src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-media-icon.svg" alt="bfm-media-icon">
            <h3 class="underline blue-underline">Media & Publishing Marketing</h3>
          </div>
        </a>
        <div class="service-content">
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
        <a class="service-anchor" href="<?php echo $cloudhosting; ?>">
          <div class="logo">
            <img id="pic4" src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-hosting-icon.svg" alt="bfm-hosting-icon">
            <h3 class="underline blue-underline">Cloud Hosting</h3>
          </div>
        </a>
        <div class="service-content">
          <p>Host your website/application on our secure platform. Both Affordable & Reliable.</p>
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
  <div class="container">
    <div class="row flex-row">

    <div class="item container-item-1 flex1">
      <h2>Small Business<span class="big-dot yellow">?</span></h2>
      <div class="image-1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/bfm-new-small-business-icon.svg" alt="Image-1">
      </div>
      <p class="white">Looking to grow your business online?<br> We work closely with small business owners to understand their business goals & the problems that keep them up at night. This helps us create custom tailored solutions for the.</p>
      <!-- <button class="agency-business" type="button" name="button">Small Business</button> -->
    </div>


    <div class="item container-item-2 flex1">
      <h2>Agency<span class="big-dot yellow">?</span></h2>
      <div class="image-2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/bfm-new-agency-icon.svg" alt="Image-2">
      </div>
      <p class="white">Does your agency need a helping hand with its development/design work? We partner with agencies worldwide to help them exceed client expectations with our white labeled services.</p>
      <!-- <button class="agency-business" type="button" name="button">Agency</button> -->
    </div>
  </div>
  <div class="goto-contact">
    <a href="<?php echo get_the_title(get_page_by_path( 'contact' )); ?>"><button class="agency-business" type="button" name="button">Get in Touch</button></a>
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
