<?php get_header();
$webdesign = get_permalink(get_page_by_path( 'web-design' ));
$graphicdesign = get_permalink(get_page_by_path( 'graphic-design' ));
$digitalmarketing = get_permalink(get_page_by_path( 'digital-marketing' ));
$socialmediamarketing = get_permalink(get_page_by_path( 'social-media-marketing' ));
$mediapublishingmanagement = get_permalink(get_page_by_path( 'media-and-publishing-management' ));
$cloudhosting = get_permalink(get_page_by_path( 'cloud-hosting' ));
?>

<!-- section header -->
<section id="section-header">
  <!-- <div id="particles"></div> -->
  <div class="container">
    <div class="header-text">
      <h2>Digital Success For</h2>
      <h2 class="sa">Small Businesses</h2>
      <h4><hr class="line-left">Branding | Web Design | Digital Marketing<hr class="line-right"></h4>
      <div class="schedule-now sr">
        <p>Ready to start discussing your business goals?<br>Schedule your free consultation now!</p>
          <a href="<?php echo get_permalink(get_page_by_path( 'book-an-appointment' )); ?>"><button type="button" name="button">SCHEDULE NOW</button></a>
      </div>
    </div>
    <div class="header-image">
      <img class="sr" src="<?php echo get_template_directory_uri(); ?>/images/homepage1/bfm-2.0-buildings.svg" alt="">
    </div>
  </div>
</section>


<!-- section-aboutus ---------------------------------------------------->
<section id="section-aboutus">
  <div class="container flex-row">
    <div class="left">
      <h1 class="white">About Us<span class="big-dot yellow">.</span></h1>
      <p class="white">We are a <b>Toronto based digital agency</b> specializing in creating, improving, and managing your digital footprints. We work with clients from the ground up - from brainstorming branding concepts to developing and launching projects for mass market use. With an emphasis on user experience, we make your website/app intuitive and accessible to all your clients. We do all of our work in house with our team of experts.</p>
    </div>
    <div class="fbox" id="fbox1" style="transform: rotate(45deg);" data-rellax-speed="4">
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/about-icons/rocket.svg" alt="" style="transform: rotate(-45deg);"> -->
    </div>
    <div class="fbox" id="fbox2" style="transform: rotate(45deg);" data-rellax-speed="5">
    </div>
    <div class="fbox" id="fbox3" style="transform: rotate(45deg);" data-rellax-speed="10">
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/about-icons/target.svg" alt="" style="transform: rotate(-45deg);"> -->
    </div>
  </div>
</section>

<!-- section-ourprocess ---------------------------------------------------->

<section id="section-ourprocess">
  <!-- <div id="particles"></div> -->

  <div class="container flex-column">
    <h1>Our Workflow<span class="big-dot blue-n">.</span></h1>

    <!-- 1nd -->
    <div class="process flex-row">
      <div class="process-pic flex1">
        <a href="https://www.youtube.com/watch?v=09q57zoPIOw" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/images/homepage1/bfm-2.0-conceptualize.svg" alt="" class="image"></a>
      </div>
      <div class="circle1">
        <div class="middle">
          <div class="vertical-line">
          </div>
        </div>
      </div>

      <div class="process-title flex1 flex-column">
        <h2>Conceptualization</h2>
        <p>Identify your markets, conceptualize your brand personality & create a growth plan.
        </p>
      </div>
    </div>
    <!-- 2th -->
    <div class="process flex-row">
      <div class="process-title right flex1 flex-column">
        <h2>Design & Develop</h2>
        <p>Design a brand that moves your customers & develop websites/applications that allow for maximum results.
        </p>
      </div>
      <div class="circle1">

      </div>
      <div class="process-pic flex1">
        <a href="https://www.youtube.com/watch?v=NUf2ak3p4BE" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/homepage1/bfm-2.0-design-develop.svg" alt="" class="image"></a>
      </div>
    </div>
    <!-- 3th -->
    <div class="process flex-row">
      <div class="process-pic flex1">
        <a href="https://www.youtube.com/watch?v=fWDYwY2rHx8" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/homepage1/bfm-2.0-market-your-business.svg" alt="" class="image"></a>
      </div>
      <div class="circle1">

      </div>
      <div class="process-title flex1 flex-column">
        <h2>Market your Business</h2>
        <p>Create short term and long term marketing strategies that value your investment.
        </p>
      </div>
    </div>
    <!-- end  -->
  </div>

</section>

<!-- section-services -------------------------------------------------->
<section id="section-services">
  <div class="container">
    <h1 class="">Services<span class="big-dot yellow">.</span></h1>
    <div class="services flex-row">
      <!-- service names begin --->
      <!-- service 1 --->
      <div class="service">
        <a class="service-anchor" href="<?php echo $webdesign; ?>">
          <div class="logo">
            <img class="serv-logo" src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons\bfm-2.0-web-design-icon.svg" alt="bfm-web-design-icon">
            <h3>Web Design</h3>
          </div>
        </a>
        <div class="service-content">

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
            <img class="serv-logo" src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-2.0-graphic-design-icon.svg" alt="bfm-graphic-design-icon">
            <h3 >Graphic Design</h3>
          </div>
        </a>
        <div class="service-content">

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
            <img class="serv-logo" src="<?php echo get_template_directory_uri(); ?>/images/ServicesIcons/bfm-2.0-digital-marketing-icon.svg" alt="bfm-digital-marketing-icon">
            <h3>Digital Marketing</h3>
          </div>
        </a>
        <div class="service-content">

          <ul class="service-list">
            <li>Google Adwords Campaign Management</li>
            <li>Content Marketing</li>
            <li>Digital Advertising</li>
            <li>Website Analytics & Reports</li>
            <li>Influencer Marketing</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- service names end --->
  </div>
</section>

<!-- section clients and testimonials -->
<section id="section-clients-testimonials">
  <div class="container">
    <div class="row">
      <div class="clients-images">
        <h2>Our Clients</h2>
        <div class="row1">
          <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/client-logos/bfm-bedessee-logo.svg" alt="Bedessee logo">
          <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/client-logos/bfm-canada-foundation-logo.svg" alt="Canada Foundation logo">
          <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/client-logos/bfm-india-journal-logo.svg" alt="bfm-india-journal-logo logo">
        </div>
        <div class="row1">
          <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/client-logos/bfm-luxmark-logo.svg" alt="bfm-luxmark-logo logo">
          <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/client-logos/bfm-mobilinq-logo.svg" alt="bfm-mobilinq-logo">
          <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/client-logos/bfm-oak-park-logo.svg" alt="bfm-oak-park-logo">
        </div>
        <div class="row1">
          <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/client-logos/bfm-playcation-logo.svg" alt="bfm-playcation-logo">
          <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/client-logos/bfm-reginos-logo.svg" alt="bfm-reginos-logo">
          <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/client-logos/bfm-tdot-canna-logo.svg" alt="bfm-tdot-canna-logo">
        </div>
      </div>
      <div class="testimonials-slider">
        <h2>What They Say</h2>
        <div class="row owl-carousel slider-items">
          <div>
            <p><i class="fas fa-quote-left"></i><br>Blueflower Media created my e-commerce website for my artwork from scratch. In a short period of time the website was up and working with great visuals and smooth functionality for visitors. Staff are friendly, flexible and the project was completed on budget. I recommend them.<br><i class="fas fa-quote-right"></i></p>
            <p>Christian <br>CT Paintings</p>
          </div>
          <!-- <div >
            <p><i class="fas fa-quote-left"></i>What a talented group of next-gen creative minds can do for your business. They put it in the spotlight with an exciting website with eye-captivating visuals and contents and give you the tools that can conquer the world of your business - these nerds are creative, neat, very intimidating, cool and always evolving.<i class="fas fa-quote-right"></i></p>
            <p>Shail India Journal</p>
          </div> -->
        </div>
      </div>
    </div>

  </div>
</section>



<!-- section-client-slider ---------------------------------------------------->
<!-- <section id="section-client-slider">
  <div class="container">
    <div class="row">
      <h2>Our Clients<span class="big-dot blue">.</span></h2>
    </div>
    <div class="owl-carousel client-logo-slider">
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
</section> -->

<!-- section-testomonials ---------------------------------------------------->
<!-- <section id="section-testomonials">
  <div class="container">
    <div class="row">
      <h2>Testimonials<span class="big-dot yellow">.</span></h2>
    </div>
    <div class="row flex-row testimonials"> -->

      <!--   Testimonial 1 begin -->
      <!-- <div class="test">
        <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/testimonial/Christian Turner_2531-300x200.jpg" alt="">
        <p class="test-message">Blueflower Media created my e-commerce website for my artwork from scratch. In a short period of time the website was up and working with great visuals and smooth functionality for visitors. Staff are friendly, flexible and the project was completed
          on budget. I recommend them :)</p>
        <p class="author">Christian</p>
        <p class="company">CT Paintings</p>
      </div> -->
      <!--   Testimonia 1 end -->
      <!--   Testimonial 2 begin -->
      <!-- <div class="test">
        <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/client-logos/bfm-india-journal-logo.png" alt="">
        <p class="test-message">What a talented group of next-gen creative minds can do for your business. They put it in the spotlight with an exciting website with eye-captivating visuals and contents and give you the tools that can conquer the world of your business - these
          nerds are creative, neat, very intimidating, cool and always evolving.</p>
        <p class="author">Shail</p>
        <p class="company">India Journal</p>
      </div> -->
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
