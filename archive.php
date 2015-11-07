<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<div class="blue-bg top-block">
  <div class="row">
    <div class="medium-12 columns">
      <h1>TAGS</h1>
    </div>
  </div>
</div>

    <div class="row">
      <div class="medium-12 columns">
	<h2 class="orange"><?php single_tag_title(); ?></h2>
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

	      <div id="modal-<?php echo get_the_ID(); ?>" class="reveal-modal full chicken-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
		<div class="row">
		  <div class="medium-4 columns">
		    <h3><?php the_title(); ?></h3>
		    <hr>
		    <?php the_field("column_1"); ?>
		  </div>
		  <div class="medium-6 columns">
		    <?php the_field("column_2"); ?>
		  </div>
		  <div class="medium-2 columns">
		    <div class="modal-paging">
		     <!-- FIXME -->
		    </div>

		  </div>
		</div>
		<a class="close-reveal-modal" aria-label="Close"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/c3k_x.png"></a>
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
