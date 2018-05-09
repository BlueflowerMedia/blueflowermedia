<?php get_header(); ?>

<section id="team-about">
  <div class="container flex-row">
    <div class="head">
      <h1>About Us<span class="big-dot">.</span></h1>
      <p>Doing What we love to do!</p>
      <p>We are a Toronto Development & Marketing Business helping small businessess from all industries.</p>
    </div>
    <div class="slide">
      <img src="https://placeimg.com/300/300/arch" alt="" class="image active">
      <img src="https://placeimg.com/360/310/arch" alt="" class="image">
      <img src="https://placeimg.com/350/270/arch" alt="" class="image">
      <img src="https://placeimg.com/250/300/arch" alt="" class="image">
      <img src="https://placeimg.com/320/280/arch" alt="" class="image">
    </div>
  </div>
</section>

<section id="our-team">

  <div class="container">

    <div class="row center">
      <h2>Meet The Team<span class="big-dot">.</span></h2>
    </div>

    <div class="row">

      <div id="member-row-1" class="flex-row member-row">
        <div class="member sr">
          <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/team-noman-1.jpg" alt="Noman Hossain">
          <h3>Noman Hossain</h3>
          <p>&#60; Lead Designer . Project Manager &#62;</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="member sr">
          <img id="pic2" src="<?php echo get_template_directory_uri(); ?>/images/team-fahim-1.jpg" alt="Fahim Shahreer">
          <h3>Fahim Shahreer</h3>
          <p>{{ Lead Developer . Project Manager }}</p>
          <p>Office never has enough coffee for me.</p>
        </div>
      </div>

      <div id="member-row-2" class="flex-row member-row">
        <div class="member sr">
          <img id="pic3" src="<?php echo get_template_directory_uri(); ?>/images/team-altab-1.jpg" alt="Altab Hossain">
          <h3>Altab Hossain</h3>
          <p><span class="red">?php</span> <span class="blue">$role</span> = Backend Developer; <span class="red">?></span></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="member sr">
          <img id="pic4" src="<?php echo get_template_directory_uri(); ?>/images/team-ali-1.jpg" alt="Ali Akbar Sarkarati">
          <h3>Ali Akbar Sarkarati</h3>
          <p>{Frontend Developer}</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="member sr">
          <img id="pic5" src="<?php echo get_template_directory_uri(); ?>/images/team-zulfiqur-1.jpg" alt="Zulfiqur Rahman">
          <h3>Zulfiqur Rahman</h3>
          <p>[Junior Developer]</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="getintouch">
  <div class="container">
    <h2 class="white">What? You Still haven't called us?!?!</h2>
  </div>
</section>





<?php get_footer(); ?>
