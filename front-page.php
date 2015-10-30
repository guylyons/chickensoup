<?php get_header(); ?>

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
<div class="show-for-medium-up buffer block">&nbsp;</div>



<!-- recent projects -->
<a name="projects"></a>
<div class="row">
  <div class="small-12 columns text-justify">
    <?php the_field("recent_projects"); ?>
  </div>
</div>



<div class="row">
  <div class="medium-12 columns">
    <div id="packery">
      <div class="gutter-sizer"></div>
      <div class="grid-sizer"></div>
      <?php do_action( 'foundationpress_before_content' ); ?>
      <!-- begin image grid loop -->
      <?php $loop = new WP_Query( array( 'post_type' => 'c3k_project', 'posts_per_page' => 6 ) ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
  <?php do_action( 'foundationpress_after_content' ); ?>
</div>



<?php if(get_field("attention_grabber")): ?>
  <!-- Want to see more? -->
  <div class="row">
    <h2 class="show-for-large-up text-center block">
      <a href="/blahg/"><?php the_field("attention_grabber"); ?></a>
    </h2>
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



<!-- what the heck -->
<a name="triangle"></a>
<?php if(get_field( "big_box_1" ) ): ?>

  <div class="row">
    <div class="small-12 columns">
      <h1>What the heck is Chicken 3000?</h1>
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
  <div class="row what-can-c3k-do-for-you block">
    <div class="large-12 columns">
      <?php the_field("big_box_2"); ?>
    </div>
  </div>
<?php endif; ?>



<!-- c3k quote block -->
<?php if(get_field("quote_2") ): ?>
  <div class="row">
    <div class="show-for-large-up large-12 columns text-center block">
      <h2><?php the_field("quote_2"); ?></h2>
    </div>
  </div>
<?php endif; ?>



<!-- triangle of power -->
<div class="row">

  <div class="medium-12 columns">
    <h1>The C3K Triangle of Power</h1>
  </div>
  
</div>

<div class="row">  

  <div class="small-12 medium-4 columns">
    <div class="text-justify triangle-of-power">
      <img src="<?php the_field("headshot_a"); ?>">
      <?php the_field("bio_a"); ?>
    </div>
  </div>

  <div class="small-12 medium-4 columns">
    <div class="text-justify triangle-of-power">
      <img src="<?php the_field("headshot_b"); ?>">
      <?php the_field("bio_b"); ?>
    </div>
  </div>


  <div class="small-12 medium-4 columns">
    <div class="text-justify triangle-of-power">
      <img src="<?php the_field("headshot_c"); ?>">
      <?php the_field("bio_c"); ?>
    </div>
  </div>

</div>


<!-- contact form -->
<div class="blue-bg contact-form">
  <div class="row" id="email">
    <div class="small-12 medium-6  medium-offset-3 columns">

      <h1>
	email us
      </h1>
      <form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/assets/php/contact.php">

	<label>name</label>
	<input name="name" placeholder="Mr./Mrs. Client">
	<label>email</label>
	<input name="email" type="email" placeholder="awesomeclient@moneytoburn.com">

	<label>message</label>
	<textarea name="comments" placeholder="I must hire Chicken 3000 for my next project! Name your price!"></textarea>

	<input id="submit" name="submit" type="submit" value="Submit" class="btn-default">

      </form>

    </div>

  </div>
</div>



<?php if(get_field("quote_3") ): ?>
  <div class="row">
    <div class="small-12 columns text-center block">
      <h2><?php the_field("quote_3"); ?></h2>
    </div>
  </div>
<?php endif; ?>



<?php get_footer(); ?>
