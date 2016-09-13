<?php

$parallax_pattern = get_field( 'buffer1-image' );

get_header(); ?>

<!-- landing -->
<div class="intro" id="top">
    <div class="row intro-body">

        <div class="show-for-small-only">
            <img src="<?php the_field('small_logo') ?>" alt="Chicken 3000 Small Logo">
        </div>

        <div class="show-for-medium-up">
            <img src="<?php the_field('big_logo') ?>" alt="Chicken 3000 Big Logo">
        </div>

    </div>
</div>

<!-- parallax scroll -->
<?php if (get_field('quote_3')): ?>
    <div class="show-for-medium-up parallax" data-parallax="scroll" style="background-image: url('<?php echo $parallax_pattern; ?>');">

        <div class="parallax__content">
            <div class="row text-justify">
                <div class="medium-12 columns">
                    <h2><?php the_field('quote_3'); ?></h2>
                </div>
            </div>
        </div>

    </div><!-- buffer end -->
<?php endif; ?>

<!-- recent projects -->
<div class="recent-projects" id="recent-projects">

    <div class="row">
        <div class="medium-12 columns">
            <?php the_field( 'recent_projects' ); ?>
        </div>
    </div>

    <!-- packery -->
    <div class="row">
        <div class="medium-12 columns">

            <div id="packery">
                <div class="gutter-sizer"></div>
                <div class="grid-sizer"></div>

                <!-- start the loop -->
                <?php do_action('foundationpress_before_content'); ?>
                <?php
                $args = array(
                    'post_type'      =>  'c3k_project',
                    'posts_per_page' =>  '6'
                );

                $project_query = new WP_Query( $args );
                ?>
                <?php while ($project_query->have_posts()) : $project_query->the_post(); ?>

                    <?php if( is_front_page() ): ?>
                        <?php $project_bool = get_field( 'recent_project' ); ?>
                        <?php if( $project_bool == true ): ?>
                            <?php get_template_part('parts/packery'); ?>
                        <?php endif; ?>
                    <?php endif; ?>

                <?php endwhile; wp_reset_query(); ?><!-- loop end -->

            </div><!-- packery end -->

        </div>
    </div><!-- row end -->


    <?php if (get_field('attention_grabber')): ?>
        <!-- Want to see more? -->
        <div class="row">
            <h2 class="show-for-large-up text-center attention-grabber">
                <a href="/projects/"><?php the_field('attention_grabber'); ?></a>
            </h2>
        </div>
    <?php endif ?>

</div><!-- recent projects end -->


<?php if (get_field('quote_1')): ?>
    <!-- quote field 1 -->
    <div class="show-for-medium-up buffer-2 block">
        <div class="row">
            <div class="small-12">
                <blockquote>"<?php the_field('quote_1'); ?>"</blockquote>
            </div>
        </div>
    </div>
<?php endif; ?>



<?php if (get_field('big_box_1')): ?>
    <!-- What the heck is Chicken 3000? -->
    <div class="tilted-container" id="triangle">
        <div class="diagonal-blue-lines"></div>
        <div class="tilted-background"></div>
        <article class="row tilted-contents">
            <?php the_field('big_box_1'); ?>
        </article>
        <div class="diagonal-blue-lines-bottom"></div>
    </div>
<?php endif; ?>



<?php if (get_field('big_box_2')): ?>
    <!-- What can C3K do for you? -->
    <div class="big_box_2">

        <div class="row">
            <div class="large-12 columns">
                <?php the_field('big_box_2'); ?>
            </div>
        </div>

        <div class="row c3k-lists">
            <div class="medium-4 columns small-12 columns"><?php the_field('big_box_2_a'); ?></div>
            <div class="medium-4 columns small-12 columns"><?php the_field('big_box_2_b'); ?></div>
            <div class="medium-4 columns small-12 columns"><?php the_field('big_box_2_c'); ?></div>
        </div>
    </div>
<?php endif; ?>



<?php if (get_field('quote_2')): ?>
    <!-- quote field 2 -->
    <div class="row show-for-large-up text-center">
        <div class="small-12 columns block">
            <h2><?php the_field('quote_2'); ?></h2>
        </div>
    </div>
<?php endif; ?>



<!-- triangle of power -->
<div class="triangle-of-power" id="triangle-of-power">
    <div class="row">
        <div class="medium-12 columns">
            <h1>The C3K Triangle of Power</h1>
        </div>
    </div>

    <div class="row">

        <div class="small-12 medium-4 columns">
            <div class="text-justify triangle-bios">
                <h2 class="show-for-small-only">
                    <?php the_field( 'name_a' ); ?>
                </h2>
                <img alt="bio image" src="<?php the_field('headshot_a'); ?>">
                <h2 class="show-for-medium-up">
                    <?php the_field( 'name_a' ); ?>
                </h2>
                <?php the_field('bio_a'); ?>
            </div>
        </div>

        <div class="small-12 medium-4 columns">
            <div class="text-justify triangle-bios">
                <h2 class="show-for-small-only">
                    <?php the_field( 'name_b' ); ?>
                </h2>
                <img alt="bio image" src="<?php the_field('headshot_b'); ?>">
                <h2 class="show-for-medium-up">
                    <?php the_field( 'name_b' ); ?>
                </h2>
                <?php the_field('bio_b'); ?>
            </div>
        </div>


        <div class="small-12 medium-4 columns">
            <div class="text-justify triangle-bios">
                <h2 class="show-for-small-only">
                    <?php the_field( 'name_c' ); ?>
                </h2>
                <img alt="bio image" src="<?php the_field('headshot_c'); ?>">
                <h2 class="show-for-medium-up">
                    <?php the_field( 'name_c' ); ?>
                </h2>
                <?php the_field('bio_c'); ?>
            </div>
        </div>

    </div>
</div>

<!-- contact form -->
<div class="blue-bg contact-form" id="contact">
    <div class="row" id="email">
        <div class="small-12 medium-6  medium-offset-3 columns">
            <h1>email us</h1>
            <?php  echo do_shortcode( '[contact-form-7 id="2288" title="Landing Contact Form"]' ); ?>
        </div>
    </div>
</div>

<?php
$randomizer  = get_field( 'randomizer' );
$rand_length = count( $randomizer ) - 1;
$rand_range  = rand( 0, $rand_length );
$random_content = $randomizer[$rand_range]['anything'];
?>
<div class="randomizer">
    <div class="row">
        <div class="medium-12 columns">
            <h2 class="randomizer__content"><?php echo $random_content; ?></h2>
        </div>
    </div>
</div>

<?php get_footer(); ?>
