<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

</section>

<!-- footer -->
<div class="diagonals">
  <!-- diagonals go here -->
</div>
<footer class="blue-bg">
  <div class="row footer">
    <?php do_action( 'foundationpress_before_footer' ); ?>
    <?php dynamic_sidebar( 'footer-widgets' ); ?>
    <?php do_action( 'foundationpress_after_footer' ); ?>
  </div>

  <!-- copyright information -->
  <div class="black-bg">
    <div class="row">
      <div class="small-12 columns copy">
	copyright © 2015 Chicken 3000
      </div>
    </div>
  </div>
</div>

<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>

  <a class="exit-off-canvas"></a>
<?php endif; ?>

<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
</div>
</div>
<?php endif; ?>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
