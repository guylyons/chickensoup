<?php
/**
 * custom home.php for blog
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="blue-bg top-block">
  <div class="row">
    <div class="medium-12 columns">
      <h1>BLAHG</h1>
    </div>
  </div>
</div>


<?php if ( function_exists( 'wp_tag_cloud' ) ) : ?>
  <div class="row">
    <div class="medium-12 columns c3k-tagcloud">
      <strong><?php wp_tag_cloud( 'smallest=12&largest=35' ); ?></strong>
    </div>
  </div>
<?php endif; ?>

<div class="row">
  <div class="medium-12 columns">
    <div id="packery">
      <div class="gutter-sizer"></div>
      <div class="grid-sizer"></div>
      <?php if ( have_posts() ) : ?>

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>

	  <div class="item">
	    <?php if (has_post_thumbnail( $post->ID ) ): ?>
	      <a href="#" data-reveal-id="modal-<?php echo get_the_ID(); ?>">
		<figure class="text-overlay">
		  
		  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		  <img src="<?php echo $image[0]; ?>">

		  <figcaption>
		    <h3><?php the_title(); ?></h3>
		    <?php the_excerpt(); ?>
		    <!-- insert overlay field here -->
		  </figcaption>
		</figure>
	      </a>

	    <?php else: ?>
	      <?php the_field("column_1"); ?>
	    <?php endif; ?>
	    
	  </div>

	  <?php get_template_part( 'parts/modal' ); ?>

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
