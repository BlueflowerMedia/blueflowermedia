<?php get_header(); ?>

<?php
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination

  $query = new WP_Query( array(
      'post_type' => '',
      'paged' => $paged,
      'posts_per_page' => 5)
  );
?>

<section id="blog">
  <div class="container flex-column">
    <h1>Blog<span class="big-dot blue">.</span></h1>
  </div>
</section>
<hr style="width:100vw;">

<?php get_search_form();?>


<section>
  <div class="container5">
    <div class="posts">
      <?php if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post(); ?>
        <div class="post">
          <div class="post-image">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          </div>
          <div class="post-info">
            <a href="<?php the_permalink(); ?>" title="Read"><h2><?php the_title(); ?></h2></a>
            <p class="date"><?php echo  get_the_time('M j, Y'); ?></p>
            <?php the_excerpt(); ?>
            <a href="<?php echo get_permalink(); ?>" class="read-more"> Read More
              <span class="arrow">
                <i class="fas fa-angle-double-right"></i>
              </span>
            </a>
          </div>
        </div>
      <?php endwhile;?>
      <div id="emptybox">

      </div>
      <?php

      $total_pages = $query->max_num_pages;

      if ($total_pages > 1){

        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __('« PREV'),
            'next_text'    => __('NEXT »'),
        ));
      }?>

      <?php else: ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>

    </div>
  </div>
</section>

<?php
  wp_reset_postdata(); // Rest Data
 ?>

<?php get_footer(); ?>
