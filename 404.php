<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package blueflowedmedia
 */

get_header();
?>

<!-- section-aboutus -->
<section id="section-404">
  <div class="text5 container">
    <h1>Oops!</h1>
    <p>ERROR 404</p><br>
    <p>The page you are looking for can't be found.</p>
    <p>Here are some pages that might help;</p><br>
    <a href="http://localhost/blueflowermedia">Home</a>
    <a href="<?php echo get_permalink(get_page_by_path( 'about-us' )); ?>">About</a><br>
    <a href="<?php echo get_permalink(get_page_by_path( 'web-design' )); ?>">Web Design</a><br>
    <a href="<?php echo get_permalink(get_page_by_path( 'graphic-design' )); ?>">Graphic Design</a><br>
    <a href="<?php echo get_permalink(get_page_by_path( 'digital-marketing' )); ?>">Digital Marketing</a><br>
    <a href="<?php echo get_permalink(get_page_by_path( 'portfolio' )); ?>">Our Work</a><br>
    <a href="<?php echo get_permalink(get_page_by_path( 'blog' )); ?>">Blog</a><br>
    <a href="<?php echo get_permalink(get_page_by_path( 'book-an-appointment' )); ?>">Book Consultation</a><br>
    <a href="<?php echo get_permalink(get_page_by_path( 'contact' )); ?>">Contact Us</a>
  </div>

</section>


<?php
get_footer();
