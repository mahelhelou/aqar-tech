<!-- Team-->
<section class="our-team py-5">
  <h2 class="section-title">Meet Our Team</h2>
  <div class="container">
    <div class="row">
			<?php
				$args = [
					'post_type'				=> 'team',
					'posts_per_page'	=> 4,
				];

				$team = new WP_Query( $args );

				if ( $team->have_posts() ) {
					while ( $team->have_posts() ) {
						$team->the_post();
						get_template_part( 'template-parts/content/team-home' );
					}
				} else {
					echo '<p class="text-center w-100">No team members found!</p>';
				}
			?>
    </div>
  </div>
</section>
<!-- team-end-->
