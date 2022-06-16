<!-- Testimonials-->
<section class="testimonials text-center py-5" id="testimonials">
  <div class="container">
    <h2 class="section-title mb-5">From Our Investors</h2>

		<?php
			$args = [
				'post_type'				=> 'testimonial',
				'posts_per_page'	=> 7,
				'orderby'					=> 'rand'
			];

			$testimonials = new WP_Query( $args );

			if ( $testimonials->have_posts() ) { ?>
				<div class="owl-carousel">
				<?php
				while ( $testimonials->have_posts() ) {
					$testimonials->the_post();
					get_template_part( 'template-parts/content/testimonial' );
				} ?>
				</div>
			<?php } else {
				echo '<p class="text-center w-100">No testimonials found!</p>';
			}

			wp_reset_postdata();
		?>

  </div>
</section>
<!-- testimonials-end-->
