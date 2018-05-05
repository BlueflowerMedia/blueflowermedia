<?php get_header(); ?>

<?php $query = new WP_Query(" "); ?>

<section>
  <div class="container">
    <div class="posts">
      <?php if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post(); ?>
        <div class="post">
          <div class="post-image">
            <?php the_post_thumbnail(); ?>
            <div class="post-info">
              <a href="<?php the_permalink(); ?>" title="Read"><h2><?php the_title(); ?></h2></a>
              <?php the_time('M j, Y'); ?>
              <?php the_excerpt(); ?>
              <a href="<?php echo get_permalink(); ?>" class="read-more"> Read More <span class="arrow">></span> </a>
            </div>
          </div>
        </div>
      <?php endwhile; else: ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php
/*
//First version
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
*/
 ?>

<?php get_footer(); ?>
