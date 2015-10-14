<?php
/**
 * custom home.php for blog
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="row">
    
  <?php if ( function_exists( 'wp_tag_cloud' ) ) : ?>
    <div class="medium-12 columns">
      <?php wp_tag_cloud( 'smallest=14&largest=25' ); ?>
    </div>
  <?php endif; ?>

  <div class="medium-12 columns">
    <div id="container">
      <?php if ( have_posts() ) : ?>

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>
	  
	  <div class="grid-item">
	    <a href="<?php echo post_permalink();?>">
	      <figure class="text-overlay">
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
		  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		  <img src="<?php echo $image[0]; ?>">
		<?php endif; ?>

		<figcaption>
		  <h3><?php the_title(); ?></h3>
		</figcaption>
	      </figure>

	    </a>
	  </div>
	  
	<?php endwhile; wp_reset_query(); ?>
    </div>
  </div>
  
  <!-- end image grid loop -->

      <?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>

		<?php do_action( 'foundationpress_before_pagination' ); ?>

      <?php endif;?>



      <?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
	<nav id="post-nav">
	  <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
	  <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
	</nav>
      <?php } ?>

      <?php do_action( 'foundationpress_after_content' ); ?>

</div>
</div>
<?php get_footer(); ?>
