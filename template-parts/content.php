<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blueflowedmedia
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				blueflowermedia_posted_on();
				blueflowermedia_posted_by();
				
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php blueflowermedia_post_thumbnail(); ?>

	<div class="container-blog-content">
		<div class="entry-content">
			<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'blueflowermedia' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blueflowermedia' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->
		<!-- Social media -->
		<div class="social-media flex-column">
			<!-- <i class="fab fa-youtube fa-2x"></i> -->
			<!-- <i class="fab fa-facebook-square fa-2x"></i>
			<i class="fab fa-twitter-square fa-2x"></i> -->
		</div>
		<!-- Social media -->

	</div>

	<footer class="entry-footer">
		<?php blueflowermedia_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
