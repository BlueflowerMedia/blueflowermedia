<?php get_header(); ?>

<section id="team-about">
  <div class="container flex-row">
    <div class="head">
      <h1>About Us<span class="big-dot blue">.</span></h1>
      <p>Doing What we love to do!</p>
      <p>We are a Toronto Development & Marketing Business helping small businessess from all industries.</p>
    </div>
    <div class="slide">
      <img src="<?php echo get_template_directory_uri(); ?>/images/team/slider/ts1.jpg" alt="" class="image active">
      <img src="<?php echo get_template_directory_uri(); ?>/images/team/slider/ts2.jpg" alt="" class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/team/slider/ts3.jpg" alt="" class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/team/slider/ts4.jpg" alt="" class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/team/slider/ts5.jpg" alt="" class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/team/slider/ts6.jpg" alt="" class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/team/slider/ts7.jpg" alt="" class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/team/slider/ts8.jpg" alt="" class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/team/slider/ts9.jpg" alt="" class="image">
    </div>
  </div>
</section>

<section id="our-team">

  <div class="container">

    <div class="row center">
      <h2>Meet The Team<span class="big-dot blue">.</span></h2>
    </div>

    <div class="row">

      <div id="member-row-1" class="flex-row member-row">
        <div class="member sr">
          <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/team/team-noman-1.jpg" alt="Noman Hossain">
          <h3>Noman Hossain</h3>
          <p>[ Lead Designer<br>Project Manager ]</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="member sr">
          <img id="pic2" src="<?php echo get_template_directory_uri(); ?>/images/team/team-fahim-1.jpg" alt="Fahim Shahreer">
          <h3>Fahim Shahreer</h3>
          <p>[ Lead Developer<br>Project Manager ]</p>
          <p>Office never has enough coffee for me.</p>
        </div>
      </div>

      <div id="member-row-2" class="flex-row member-row">
        <div class="member sr">
          <img id="pic3" src="<?php echo get_template_directory_uri(); ?>/images/team/team-altab-1.jpg" alt="Altab Hossain">
          <h3>Altab Hossain</h3>
          <p>[ Backend Developer ]</p>
          <p>I just want to solve difficult problems.</p>
        </div>
        <div class="member sr">
          <img id="pic4" src="<?php echo get_template_directory_uri(); ?>/images/team/team-ali-1.jpg" alt="Ali Akbar Sarkarati">
          <h3>Ali Akbar Sarkarati</h3>
          <p>[ Front-end Developer ]</p>
          <p>Technology is my passion.</p>
        </div>
        <div class="member sr">
          <img id="pic5" src="<?php echo get_template_directory_uri(); ?>/images/team/team-zulfiqur-1.jpg" alt="Zulfiqur Rahman">
          <h3>Zulfiqur Rahman</h3>
          <p>[ Junior Developer ]</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- section-getintouch-->
<section id="section-getintouch" class="blue">
  <div class="container">
    <a href="<?php echo get_the_title(get_page_by_path( 'contact' )); ?>"><button type="button" name="button">Let's Get Started!</button></a>
  </div>
</section>



<?php get_footer(); ?>
