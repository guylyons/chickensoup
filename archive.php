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
  </div>

  <div id="packery" class="medium-12 columns">
    <div class="gutter-sizer"></div>
    <div class="grid-sizer"></div>
    <?php if ( have_posts() ) : ?>

      <?php do_action( 'foundationpress_before_content' ); ?>

      <?php while ( have_posts() ) : the_post(); ?>

	<!-- get packery items -->
	<?php get_template_part( 'parts/packery' ); ?>

      <?php endwhile; wp_reset_query(); ?>
  </div>
</div>

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
