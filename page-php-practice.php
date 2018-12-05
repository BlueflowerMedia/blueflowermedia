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
      <h2>We provide small businesses:</h2><br>
      <span id="staticText"><span id="typeline" ></span></span>
      <!-- <h4><hr class="line-left">Branding | Web Design | Digital Marketing<hr class="line-right"></h4> -->
      <hr class="line1">
      <div class="schedule-now sr">
        <p>Want to discuss your business goals?<br>Schedule your free consultation now!</p>
        <a href="<?php echo get_permalink(get_page_by_path( 'book-an-appointment' )); ?>"><button type="button" name="button">SCHEDULE NOW</button></a>
      </div>
    </div>
    <div class="header-image">
      <img class="animation-item item2" src="<?php echo get_template_directory_uri(); ?>/images/animations/person.png" alt="">
      <img class="animation-item item1" src="<?php echo get_template_directory_uri(); ?>/images/animations/house.svg" alt="">
      <img class="animation-item item3" src="<?php echo get_template_directory_uri(); ?>/images/animations/banner.svg" alt="">


    </div>
  </div>
</section>

<!-- section-getintouch ---------------------------------------------------->
<?php get_template_part('template-parts/getintouch'); ?>


<?php get_footer(); ?>
