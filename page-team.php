<?php get_header(); ?>

<section id="team-about">
  <div class="container flex-row">
    <div class="head">
      <h1>About Us<span class="big-dot blue">.</span></h1>
      <p>Doing What we love to do!</p>
      <p>We are a Toronto Development & Marketing Agency helping small businesses from all industries.
        With a combined 50+ years of experience solving digital problems for clients, we are confident in our ability to improve performance and increase results.<br>
      Our Toronto base is convenient for our local clients to have in person meetings to discuss projects and get to know us better.</p>
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
          <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/team/team-noman.jpg" alt="Noman Hossain">
          <h3>Noman Hossain</h3>
          <p>[ Lead Designer ]<br>[ Project Manager ]</p>
          <p>I am the guy who talks to you on phone.</p>
        </div>
        <div class="member sr">
          <img id="pic2" src="<?php echo get_template_directory_uri(); ?>/images/team/team-fahim.jpg" alt="Fahim Shahreer">
          <h3>Fahim Shahreer</h3>
          <p>[ Lead Developer ]<br>[ Project Manager ]</p>
          <p>Office never has enough coffee for me.</p>
        </div>
      </div>

      <div id="member-row-2" class="flex-row member-row">
        <div class="member sr">
          <img id="pic3" src="<?php echo get_template_directory_uri(); ?>/images/team/team-altab.jpg" alt="Altab Hossain">
          <h3>Altab Hossain</h3>
          <p>[ Full-Stack Developer ]</p>
          <p>I have my PHD in Computer Science. I like using my technical knowledge to practically solve real world client problems.</p>
        </div>
        <div class="member sr">
          <img id="pic4" src="<?php echo get_template_directory_uri(); ?>/images/team/team-ali.jpg" alt="Ali Akbar Sarkarati">
          <h3>Ali Akbar Sarkarati</h3>
          <p>[ Full-Stack Developer ]</p>
          <p>I have a passion for the subjective arts. This surprisingly lead me to a career in web design. I also love making Music.</p>
        </div>
        <div class="member sr">
          <img id="pic5" src="<?php echo get_template_directory_uri(); ?>/images/team/team-zulfiqur.jpg" alt="Zulfiqur Rahman">
          <h3>Zulfiqur Rahman</h3>
          <p>[ Front-End Developer ]</p>
          <p>People say I am the funniest person in the office and I agree.</p>
        </div>
      </div>


        <div id="member-row-3" class="flex-row member-row">
        <div class="member sr">
          <img id="pic6" src="<?php echo get_template_directory_uri(); ?>/images/team/team-binod.jpg" alt="Zulfiqur Rahman">
          <h3>Binod Thapa</h3>
          <p>[ Front-End Developer ]</p>
          <p>I love visiting new places to get inspiration for our design work.</p>
        </div>
        <div class="member sr">
          <img id="pic7" src="<?php echo get_template_directory_uri(); ?>/images/team/team-rif.jpg" alt="Zulfiqur Rahman">
          <h3>Rifaquat Nabi</h3>
          <p>[ Digital Marketing Manager ]</p>
          <p>I am the one who knocks.</p>
        </div>
        <div class="member sr">
          <img id="pic8" src="<?php echo get_template_directory_uri(); ?>/images/team/team-chandra.jpg" alt="Zulfiqur Rahman">
          <h3>Chandra Shrestha</h3>
          <p>[ Front-End Developer ]</p>
          <p>There’s nothing I love more than travelling, web design and my family - maybe not in that order.</p>
        </div>
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
