<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />

    <?php get_template_part( 'parts/favicon' ); ?>

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php do_action( 'foundationpress_after_body' ); ?>
    <?php do_action( 'foundationpress_layout_start' ); ?>

    <?php get_template_part( 'parts/top-bar' ); ?>

    <!-- back to top -->
    <div class="back-to-top">
      <a href="#top">
        <span class="icon-c3k-abbrev top-bar-image">
        </span>
      </a>
    </div><!-- end back to top -->

    <section class="container" role="document">
      <?php do_action( 'foundationpress_after_header' ); ?>
