<?php get_header(); ?>

<!-- Page Banner-->
<section class="page-banner">
  <div class="page-banner__content">
    <h2 class="page-banner__title">Our Investment Opportunities</h2>
    <p class="page-banner__description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas explicabo
      necessitatibus earum voluptatem, commodi quae?</p>
  </div>
</section>
<!-- page-banner-end-->

<!-- All Investment Opportunities-->
<section class="investments py-5">
  <div class="container">
    <h2 class="section-title">All Investment Opportunities</h2>
    <div class="row">
      <?php
				$args = [
					'post_type'				=> 'investment',
					'posts_per_page'	=> -1
				];

				$investments = new WP_Query( $args );

				if ( $investments->have_posts() ) {
					while ( $investments->have_posts() ) {
						$investments->the_post();
						get_template_part( 'template-parts/content/investment' );
					}
				} else {
					echo '<p class="text-center w-100">No investments found</p>';
				}

				wp_reset_postdata();
			?>
    </div>
  </div>
</section>
<!-- all-investment-opportunities-end-->

<?php get_footer(); ?>