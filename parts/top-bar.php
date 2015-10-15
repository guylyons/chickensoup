<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<div class="fixed">
<div class="top-bar-container">
  <nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area top-bar-<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>">
      <?php if(get_field("nav_logo")): ?>
	<li class="name">
	  <h1>
	    <a href="<?php home_url(); ?>">
	      <img src="<?php the_field("nav_logo"); ?>">
	    </a>
	  </h1>
	</li>
      <?php else: ?>
	<li class="name">
          <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	</li>
      <?php endif; ?>
	<li class="toggle-topbar menu-icon"><a href="#"><span><img src="<?php the_field("nav_logo"); ?>"></span></a></li>
    </ul>
    <section class="chicken-links">
      <?php foundationpress_top_bar_l(); ?>
      <?php foundationpress_top_bar_r(); ?>
    </section>
  </nav>
</div>
</div>
