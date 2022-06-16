<?php get_header(); ?>

<!-- Showcase-->
<section class="showcase">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h1 class="mt-0 mt-md-5 pt-5 font-weight-bolder">Aqar Tech Is Where Profitable Investment Opportunities Exist.
        </h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic sapiente accusamus iste rem
          explicabo esse. Reprehenderit, praesentium quibusdam odio inventore placeat ex porro aliquam similique.</p>
      </div>
      <div class="col-lg-6">
        <div class="showcase__image"><img class="img-fluid" src="https://picsum.photos/200/300?random=2" alt=""></div>
      </div>
    </div>
  </div>
</section>
<!-- showcase-end-->

<?php get_template_part( 'template-parts/about-us' ); ?>
<?php get_template_part( 'template-parts/how-it-works' ); ?>

<!-- Featured Investment Opportunities-->
<section class="investments py-5">
  <div class="container">
    <h2 class="section-title">Featured Investment Opportunities</h2>
    <div class="row">
      <?php
				$args = [
					'post_type'				=> 'investment',
					'posts_per_page'	=> 3,
					'category_name'		=> 'featured'
				];


				$featured_investments = new WP_Query( $args );

				if ( $featured_investments->have_posts() ) {
					while ( $featured_investments->have_posts() ) {
						$featured_investments->the_post();
						get_template_part( 'template-parts/investment-card' );
					}
				} else {
					echo '<p class="text-center w-100">No featured investments found!</p>';
				}

				wp_reset_postdata();
			?>
    </div>
  </div>
</section>
<!-- featured-investment-opportunities-end-->

<!-- Current Investment Opportunities-->
<section class="investments py-5">
  <div class="container">
    <h2 class="section-title">Current Investment Opportunities</h2>
    <div class="row">
      <?php
				$args = [
					'post_type'				=> 'investment',
					'posts_per_page'	=> 6,
					'category_name'		=> 'current'
				];

				$current_investments = new WP_Query( $args );

				if ( $current_investments->have_posts() ) {
					while ( $current_investments->have_posts() ) {
						$current_investments->the_post();
						get_template_part( 'template-parts/investment-card' );
					}
				} else {
					echo '<p class="text-center w-100">No current investments found!</p>';
				}

				wp_reset_postdata();
			?>
    </div>
  </div>
</section>
<!-- current-investment-opportunities-end-->

<!-- Coming Soon Investment Opportunities-->
<section class="investments py-5">
  <div class="container">
    <h2 class="section-title">Coming Soon Investment Opportunities</h2>
    <div class="row">
      <?php
				$args = [
					'post_type'				=> 'investment',
					'posts_per_page'	=> 3,
					'category_name'		=> 'coming'
				];

				$coming_investments = new WP_Query( $args );

				if ( $coming_investments->have_posts() ) {
					while ( $coming_investments->have_posts() ) {
						$coming_investments->the_post();
						get_template_part( 'template-parts/investment-card' );
					}
				} else {
					echo '<p class="text-center w-100">No coming investments found!</p>';
				}

				wp_reset_postdata();
			?>
    </div>
  </div>
</section>
<!-- coming-soon-investment-opportunities-end-->

<?php get_template_part( 'template-parts/testimonials' ); ?>
<?php get_template_part( 'template-parts/team' ); ?>

<?php get_footer(); ?>
