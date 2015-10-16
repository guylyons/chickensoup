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


<footer class="blue-bg">
  <div class="row footer">
    <div class="small-8 medium-4 columns">
      <ul>
	<li class="underline">Contact</li>
	<?php the_field("footer_col1"); ?>
      </ul>
    </div>
    <div class="small-4 medium-2 columns">
      <ul>
	<li class="underline">Social Media</li>
	<?php the_field("footer_col2"); ?>
      </ul>
    </div>

    <div class="hide-for-small-only medium-6 columns feet">
      <!-- chicken feet are delicious -->
    </div>

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
