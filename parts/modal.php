<?php
/**
 * Template part for modals
 *
 * @package WordPress
 */
?>
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
	<?php
	$next_post = get_previous_post();
	if (!empty( $next_post )): ?>
	  <a href="#" data-reveal-id="modal-<?php echo $next_post->ID; ?>">Next</a>

	<?php endif; ?>
	
	<?php
	$previous_post = get_next_post();
	if (!empty( $previous_post )): ?>
	  <br>
	  <a href="#" data-reveal-id="modal-<?php echo $previous_post->ID; ?>">Previous</a>

	<?php endif; ?>
      </div>

    </div>
  </div>
  <a class="close-reveal-modal" aria-label="Close"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/c3k_x.png" width="50%" height="50%"></a>
</div>
