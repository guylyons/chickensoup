<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="top-bar-container fixed show-for-small-up">
    <nav class="top-bar" data-topbar data-options="scrolltop: false">
        <ul class="title-area">
            <li class="name">
                <a href="<?php echo home_url(); ?>"><span class="icon-c3k-abbrev top-bar-image"></span></a>
            </li>
            <li class="toggle-topbar menu-icon"><a href=""><span>Menu</span></a></li>
        </ul>
        <section class="top-bar-section">
            <?php foundationPress_top_bar_l(); ?>
            <?php foundationPress_top_bar_r(); ?>
        </section>
    </nav>
</div>
