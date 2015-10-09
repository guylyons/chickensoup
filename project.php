<?php
/* Template Name: Project */
?>

<?php $loop = new WP_Query( array( 'post_type' => 'project_item', 'posts_per_page' => -1 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  The stuff you want to loop goes in here
<?php endwhile; wp_reset_query(); ?>
