<?php get_header(); ?>

<!-- landing -->
<div class="intro" id="top">
  <div class="row intro-body">

    <div class="show-for-small-only">
      <img src="<?php the_field('small_logo') ?>" alt="Chicken 3000 Small Logo">
    </div>

    <div class="show-for-medium-up">
      <img src="<?php the_field('big_logo') ?>" alt="Chicken 3000 Big Logo">
    </div>

  </div>
</div>


<!-- buffer -->
<!-- <div class="show-for-medium-up buffer">&nbsp;</div><!-- buffer end -->

<?php if (get_field('attention_grabber')): ?>
  <div class="show-for-medium-up parallax-window" data-parallax="scroll" data-image-src="<?php the_field('buffer1-image'); ?>">&nbsp;</div><!-- buffer end -->
<?php endif; ?>

<!-- recent projects -->
<div class="recent-projects" id="recent-projects">

  <div class="row text-justify">
    <div class="medium-12 columns">
      <?php the_field('recent_projects'); ?>
    </div>
  </div>

  <div class="row">
    <div id="packery" class="medium-12 columns">
      <div class="gutter-sizer"></div>
      <div class="grid-sizer"></div>

      <!-- start the loop -->
      <?php do_action('foundationpress_before_content'); ?>
      <?php $loop = new WP_Query(array('post_type' => 'c3k_project', 'posts_per_page' => 6)); ?>
      <?php while ($loop->have_posts()) : $loop->the_post(); ?>

    	<!-- get packery items -->
    	<?php get_template_part('parts/packery'); ?>

      <?php endwhile; wp_reset_query(); ?><!-- loop end -->

    </div><!-- packery end -->
  </div><!-- row end -->


  <?php if (get_field('attention_grabber')): ?>
    <!-- Want to see more? -->
    <div class="row">
      <h2 class="show-for-large-up text-center">
	       <a href="/blahg/"><?php the_field('attention_grabber'); ?></a>
      </h2>
    </div>
  <?php endif ?>

</div><!-- recent projects end -->


<?php if (get_field('quote_1')): ?>
  <!-- quote field 1 -->
  <div class="show-for-medium-up buffer-2 block">
    <div class="row">
      <div class="small-12">
	       <blockquote>"<?php the_field('quote_1'); ?>"</blockquote>
      </div>
    </div>
  </div>
<?php endif; ?>



<?php if (get_field('big_box_1')): ?>
  <!-- What the heck is Chicken 3000? -->
  <div class="tilted-container" id="triangle">
    <div class="diagonal-blue-lines"></div>
    <div class="tilted-background"></div>
      <article class="row tilted-contents">
        <?php the_field('big_box_1'); ?>
      </article>
      <div class="diagonal-blue-lines-bottom"></div>
  </div>
<?php endif; ?>



<?php if (get_field('big_box_2')): ?>
  <!-- What can C3K do for you? -->
  <div class="big_box_2">
    <div class="row">
      <div class="large-12 columns">
	<?php the_field('big_box_2'); ?>
      </div>
    </div>
    <div class="row">
      <div class="medium-4 columns small-12 columns"><?php the_field('big_box_2_a'); ?></div>
      <div class="medium-4 columns small-12 columns"><?php the_field('big_box_2_b'); ?></div>
      <div class="medium-4 columns small-12 columns"><?php the_field('big_box_2_c'); ?></div>
    </div>
  </div>
<?php endif; ?>



<?php if (get_field('quote_2')): ?>
  <!-- quote field 2 -->
  <div class="row show-for-large-up text-center">
    <div class="small-12 columns block">
      <h2><?php the_field('quote_2'); ?></h2>
    </div>
  </div>
<?php endif; ?>



<!-- triangle of power -->
<div class="triangle-of-power" id="triangle-of-power">
  <div class="row">
    <div class="medium-12 columns">
      <h1>The C3K Triangle of Power</h1>
    </div>
  </div>

  <div class="row">

    <div class="small-12 medium-4 columns">
      <div class="text-justify triangle-bios">
      	<img alt="bio image" src="<?php the_field('headshot_a'); ?>">
      	<?php the_field('bio_a'); ?>
      </div>
    </div>

    <div class="small-12 medium-4 columns">
      <div class="text-justify triangle-bios">
      	<img alt="bio image" src="<?php the_field('headshot_b'); ?>">
      	<?php the_field('bio_b'); ?>
      </div>
    </div>


    <div class="small-12 medium-4 columns">
      <div class="text-justify triangle-bios">
      	<img alt="bio image" src="<?php the_field('headshot_c'); ?>">
      	<?php the_field('bio_c'); ?>
      </div>
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



<?php if (get_field('quote_3')): ?>
  <!-- quote field 3 -->
  <div class="quote_3">
    <div class="row">
      <div class="small-12 columns text-center block">
	<h2><?php the_field('quote_3'); ?></h2>
      </div>
    </div>
  </div>
<?php endif; ?>



<?php get_footer(); ?>
