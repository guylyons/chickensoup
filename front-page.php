<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="row">
  <div class="small-12 columns">
    <h2>Recent Projects</h2>
    <p>
      Ornare arcu dui vivamus arcu felis, bibendum ut tristique et, egestas quis. Quam quisque id diam vel quam elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem ipsum?
    </p>
  </div>
</div>

<div class="row">
  <div class="medium-12 columns">
    <div id="container">

      <!-- begin image grid loop -->
      <?php $loop = new WP_Query( array( 'post_type' => 'c3k_project', 'posts_per_page' => 8 ) ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<div class="grid-item">
	  <a href="#" data-reveal-id="myModal">
	    <figure class="text-overlay">
	      <?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<img src="<?php echo $image[0]; ?>">
	      <?php endif; ?>
	      <figcaption>
		<h3><?php the_title(); ?></h3>
		<?php the_excerpt(); ?>
		<?php the_author(); ?>
	      </figcaption>
	    </figure>
	  </a>
	</div>
	
	<div id="myModal" class="reveal-modal full chicken-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
	  <div class="row">
	    <div class="medium-12 columns">
	      <?php the_content(); ?>
	    </div>
	  </div>
	  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
	</div>
      <?php endwhile; wp_reset_query(); ?>
      
      <!-- end image grid loop -->

    </div>
  </div>
</div>

</div>
<?php get_footer(); ?>
