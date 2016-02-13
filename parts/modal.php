<?php
/**
 * Template part for modals.
 */
?>

<div id="modal-<?php echo get_the_ID(); ?>" class="reveal-modal full chicken-modal" data-reveal role="dialog">
<div class="chicken-container">
  <div class="row">

    <div class="medium-4 columns">
      <h3><?php the_title(); ?></h3>
      <hr>
      <?php the_field('column_1'); ?>
    </div>

    <div class="medium-4 columns remove-padding">
      <?php the_field('column_2'); ?>
    </div>

    <div class="medium-4 columns modal-paging">

      <?php
      $next_post = get_previous_post();
      if (!empty($next_post)): ?>

    	<!-- <a href="#" data-reveal-id="modal-<?php echo $next_post->ID; ?>">Next</a> -->
    	<!-- <p><?php echo $next_post->ID; ?></p> -->

      <?php endif; ?>

      <?php
      $previous_post = get_next_post();
      if (!empty($previous_post)): ?>

    	<br>
    	<!-- <a href="#" data-reveal-id="modal-<?php echo $previous_post->ID; ?>">Previous</a> -->
    	<!-- <p><?php echo $previous_post->ID; ?></p> -->

      <?php endif; ?>
    </div>

  </div>
  <a class="close-reveal-modal" aria-label="Close"><span class="icon-c3k-icon-x"></span></a>
</div>
</div>
