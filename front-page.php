<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<!-- landing -->
<div class="intro">
  <div class="row">
    <div class="show-for-small-only small-12 columns chicken-logo block">
      <!-- assets/img/chicken-logo-*.png -->
    </div>
    <div class="show-for-medium-up medium-12 columns text-center block">
      <img src="img/chicken-logo-large.png" alt="Chicken 3000 Logo">
    </div>
  </div>
</div>

<!-- buffer -->
<div class="show-for-medium-up buffer block">&nbsp</div>

<div class="row">
  <div class="small-12 columns">
    <h2>Recent Projects</h2>
    <p>
      Ornare arcu dui vivamus arcu felis, bibendum ut tristique et, egestas quis. Quam quisque id diam vel quam elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem ipsum?
    </p>
  </div>
</div>

<div class="row">
  <div class="medium-12 columns">
    <div id="container">

      <?php do_action( 'foundationpress_before_content' ); ?>
      
      <!-- begin image grid loop -->
      <?php $loop = new WP_Query( array( 'post_type' => 'c3k_project', 'posts_per_page' => 8 ) ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<div class="grid-item">
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
	    <a href="#" data-reveal-id="modal-<?php echo get_the_ID(); ?>">
	      <figure class="text-overlay">
		
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<img src="<?php echo $image[0]; ?>">

		<figcaption>
		  <h3><?php the_title(); ?></h3>
		  <?php the_excerpt(); ?>
		</figcaption>
	      </figure>
	    </a>
	  </div>

	  <div id="modal-<?php echo get_the_ID(); ?>" class="reveal-modal full chicken-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
	    <div class="row">
	      <div class="medium-12 columns">
		<?php the_content(); ?>
	      </div>
	    </div>
	    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
	    <?php else: ?>
	    <?php the_content(); ?>
	<?php endif; ?>
	  </div>

      <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>
  <!-- end image grid loop -->
  <?php do_action( 'foundationpress_after_content' ); ?>
</div>


<!-- Want to see more? -->
<div class="row">
  <h1 class="show-for-large-up text-center block">
    Want to see more of the projects we’ve worked on? Check out our BLAHG.
  </h1>
</div>

<!-- buffer-2 -->
<div class="show-for-medium-up buffer-2 block">
  <div class="row">
    <div class="small-12">
      <blockquote>"Great design is better than bad design."</blockquote>
      <h6>~ Albert Einstein</h6>
    </div>
  </div>
</div>

<!-- what the heck -->
<div class="row">
  <div class="small-12 columns">
    <h3>What the heck is Chicken 3000?</h3>
  </div>
</div>
<div class="blue-bg block">
  <div class="row">
    <div class="small-12 columns">
      <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
        quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
        eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit
        qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
    </div>
  </div>
</div>

<!-- triangle of power -->

<div class="row what-can-c3k-do-for-you show-for-large-up block">
  <h3>What can Chicken 3000 do for YOU?</h3>
  <div class="show-for-large-up large-4 columns">
    <ul>
      <h4>Identity and Branding:</h4>
      <li>Pretium.</li>
      <li>Aliquet!</li>
      <li>Sociis?</li>
      <li>Rutrum.</li>
      <li>Ut.</li>
    </ul>
  </div>
  <div class="show-for-large-up large-4 columns">
    <ul>
      <h4>Web Design & Programming</h4>
      <li>Commodo!</li>
      <li>Enim!</li>
      <li>Nisl?</li>
      <li>Massa?</li>
      <li>Sed.</li>
    </ul>
  </div>
  <div class="show-for-large-up large-4 columns">
    <ul>
      <h4>Musicians’ Needs:</h4>
      <li>Vel.</li>
      <li>Urna.</li>
      <li>Mi?</li>
      <li>Etiam.</li>
      <li>Id.</li>
    </ul>
  </div>
</div>

<!-- c3k quote block -->
<div class="row">
  <div class="show-for-large-up large-12 columns text-center block">
    <h1>Anything that needs to be looked at can, and should, be designed well.</h1>
  </div>
</div>

<div class="row">
  <div class="medium-12 columns">
    <h2>The C3K Triangle of Power</h2>
  </div>
</div>

<div class="row">
  <div class="small-12 large-4 columns triangle-of-power text-center">
    <img src="assets/img/doug-portrait.jpg">
    <div class="text-justify">
      <h2>Doug Von</h2>
      <h3>Maestro</h3>
      <a href="">doug(at)chicken3000(dot)com</a>
      <p>
        How to make a Doug: take a New York baby raised in New Jersey, blessed with an eye for composition and color, cultivated with a formal education in Graphic Design and Painting, add 10 years of experience to the mix, and boom!</p>
      <p>Armed with the good sense to keep things simple, and the understanding that information dissemination and visual harmony are conjoined twins, Doug has been able to wrestle many a design challenge to the ground.</p>
    </div>
  </div>


  <div class="small-12 large-4 columns triangle-of-power text-center">
    <img src="assets/img/anna-portrait.jpg">
    <div class="text-justify">
      <h2>Anna O.</h2>
      <h3>Print Jockey</h3>
      <a href="">anna[at]chicken3000.com</a>
      <p>Born and raised in the Garden State, schooled in the ways of graphic design and printmaking, genetically self motivated, and currently living in Portland, Maine; Anna is a diehard printmaker at heart, and brings an appreciation of classic graphic
        design elements to the C3K team. A deep respect for good typography (a regretfully rare thing these days), color, form, line, and composition guides every decision (design and otherwise) that Anna makes.</p>

      <blockquote>“It’s not that I think everything should be a print, it’s just that I know everything would look better if it were printed.”</blockquote>
    </div>
  </div>


  <div class="small-12 large-4 columns triangle-of-power text-center">
    <img src="assets/img/guy-portrait.jpg">
    <div class="text-justify">
      <h2>Guy Lyons</h2>
      <h3>Web Wizard</h3>
      <a href="">guylyons2[at]gmail.com</a>
      <p>Since the dawn of time, when blink tags and 'under construction' gifs were fashionable, Guy has been tinkering with the world wide web. A proponent of all things semantic in code and everything irreverent in life, Guy is proud to consider himself
        "...a total Chicken."</p>
      <blockquote>""Well, if I called the wrong number, why did you answer the phone?" - James Thurber</blockquote>
    </div>
  </div>
</div>

<div class="row">
  <div class="show-for-large-only large-12 columns text-center block">
    <h3>At C3K we’re more than just designers: we’re printmakers, painters, illustrators, and thinkers, researchers and resources, and really nice people. So drop us a line about your project and let’s make something truly awesome together!</h3>
  </div>
</div>

</div>
</div>
</div>
</div>
<?php get_footer(); ?>
