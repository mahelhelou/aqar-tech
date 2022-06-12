<?php get_header(); ?>

<!-- Page Banner-->
<section class="page-banner">
  <div class="page-banner__content">
    <h1 class="page-banner__title">Our Collaborative Team</h1>
    <p class="page-banner__description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, accusantium.
    </p>
  </div>
</section>
<!-- page-banner-end-->

<section class="team py-5">
  <div class="container">
    <?php
		$args = array(
			'post_type'				=> 'team',
			'posts_per_page'	=> -1,
		);

		$team = new WP_Query( $args );

		if ( $team->have_posts() ) {
			while ( $team->have_posts() ) {
				$team->the_post();
				get_template_part( 'template-parts/content/team' );
			}
		}
			wp_reset_postdata();
		?>
  </div>
</section>

<?php get_footer(); ?>