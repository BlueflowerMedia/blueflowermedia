<?php get_header(); ?>

<div class="page-top">
</div>

<?php $query = new WP_Query(" "); ?>

<section>
  <div class="posts">
    <?php if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post(); ?>
      <div class="post">
        <div class="post-image">
          <?php the_post_thumbnail(); ?>
        </div>
        <div class="post-info">
          <?php the_time('M j, Y'); ?>

          <?php $categories = get_the_category(); ?>
          <ul>
            <?php
            foreach($categories as $category) {
                  echo ("<li>".$category->name. ", "."</li>");
                }
            ?>
          </ul>
          <h2><?php the_title(); ?></h2>
          <?php the_excerpt(); ?>
        </div>
      </div>
    <?php endwhile; else: ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
