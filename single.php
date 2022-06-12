<?php get_header(); ?>

<!-- Post template -->
<section class="py-5">
  <div class="container">
    <?php
		while ( have_posts() ) {
			the_post();
			?>
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
    <?php } ?>
  </div>
</section>

<?php get_footer(); ?>