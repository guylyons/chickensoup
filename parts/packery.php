<?php
/**
 * Template part for packery grid
 *
 * @package WordPress
 */
?>

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

     </figure></a>

   <?php else: ?>
    <?php the_field("column_1"); ?>
  <?php endif; ?>
  <?php do_action( 'foundationpress_after_content' ); ?>

</div><!-- item end -->

<!-- get modal -->
<?php get_template_part( 'parts/modal' ); ?>
