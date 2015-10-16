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

<!-- landing -->
<div class="intro">
  <div class="row">
    <div class="show-for-small-only small-12 columns block">
      <img src="<?php the_field("small_logo") ?>" alt="Chicken 300 Small Logo">
    </div>
    <div class="show-for-medium-up medium-12 columns text-center block">
      <img src="<?php the_field("big_logo") ?>" alt="Chicken 300 Big Logo">
    </div>
  </div>
</div>

<!-- buffer -->
<div class="show-for-medium-up buffer block">&nbsp</div>

<div class="row">
  <div class="small-12 columns">
    <?php the_field("recent_projects"); ?>
  </div>
</div>

<div class="row">
  <div class="medium-12 columns">
    <div id="container">

      <?php do_action( 'foundationpress_before_content' ); ?>
      <!-- begin image grid loop -->
      <?php $loop = new WP_Query( array( 'post_type' => 'c3k_project', 'posts_per_page' => 8 ) ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<div class="grid-item">
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
	</div>

	<div id="modal-<?php echo get_the_ID(); ?>" class="reveal-modal full chicken-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
	  <div class="row">
	    <div class="medium-4 columns">
	      <?php the_field("column_1"); ?>
	    </div>
	    <div class="medium-4 columns">
	      <?php the_field("column_2"); ?>
	    </div>
	    <div class="medium-4 columns">
	
	    </div>
	  </div>
	  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
	  <?php else: ?>
	  <?php the_content(); ?>
	  <?php endif; ?>
	</div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>
  <!-- end image grid loop -->
  <?php do_action( 'foundationpress_after_content' ); ?>
</div>


<?php if(get_field("attention_grabber")): ?>
  <!-- Want to see more? -->
  <div class="row">
    <h1 class="show-for-large-up text-center block">
      <?php the_field("attention_grabber"); ?>
    </h1>
  </div>
<?php endif ?>

<?php if(get_field("quote_1")): ?>
  <!-- buffer-2 -->
  <div class="show-for-medium-up buffer-2 block">
    <div class="row">
      <div class="small-12">
	<blockquote>"<?php the_field("quote_1"); ?>"</blockquote>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php if(get_field( "big_box_1" ) ): ?>
  <!-- what the heck -->
  <div class="row">
    <div class="small-12 columns">
      <h3>What the heck is Chicken 3000?</h3>
    </div>
  </div>
  <div class="blue-bg block">
    <div class="row">
      <div class="small-12 columns">
	<?php the_field("big_box_1"); ?>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php if(get_field("big_box_2") ): ?>
  <div class="row what-can-c3k-do-for-you show-for-large-up block">
    <div class="large-12 columns">
      <?php the_field("big_box_2"); ?>
    </div>
  </div>
<?php endif; ?>

<?php if(get_field("quote_2") ): ?>
  <!-- c3k quote block -->
  <div class="row">
    <div class="show-for-large-up large-12 columns text-center block">
      <blockquote><?php the_field("quote_2"); ?></blockquote>
    </div>
  </div>
<?php endif; ?>


<!-- triangle of power -->
  <div class="row">
    <div class="medium-12 columns">
      <h2>The C3K Triangle of Power</h2>
    </div>
  </div>

  <div class="row">
    
    <div class="small-12 large-4 columns triangle-of-power text-center">
      <img src="<?php the_field("headshot_a"); ?>">
      <div class="text-justify">
	<?php the_field("bio_a"); ?>
      </div>
    </div>


    <div class="small-12 large-4 columns triangle-of-power text-center">
      <img src="<?php the_field("headshot_b"); ?>">
      <div class="text-justify">
	<?php the_field("bio_b"); ?>
      </div>
    </div>


    <div class="small-12 large-4 columns triangle-of-power text-center">
      <img src="<?php the_field("headshot_c"); ?>">
      <div class="text-justify">
	<?php the_field("bio_c"); ?>
      </div>
    </div>
  </div>

<?php if(get_field("quote_3") ): ?>
  <div class="row">
    <div class="show-for-large-only large-12 columns text-center block">
      <blockquote><?php the_field("quote_3"); ?></blockquote>
    </div>
  </div>
<?php endif; ?>

</div>
</div>
</div>
</div>
<?php get_footer(); ?>
