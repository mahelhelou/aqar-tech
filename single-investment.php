<?php get_header(); ?>

<section class="single-investment py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="single-investment__img">
          <?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'img-fluid' ] ) ?>
        </div>
        <div class="single-investment__content py-5">
          <h2 class="single-investment__content-title">About <?php the_title(); ?> Investment Opportunity</h2>
          <p><?php the_content(); ?></p>
        </div>
      </div>
      <div class="col-md-4">
        <h1 class="single-investment__title"><?php the_title(); ?></h1>
        <p class="single-investment__description">
          <?php if ( has_excerpt() ) {
						the_except();
					} else {
						echo wp_trim_words( get_the_content(), 18 );
					} ?>
        </p>
      </div>
    </div>
  </div>
</section>
<section class="related-posts py-5">
  <div class="container">
    <h2 class="section-title section-title--left section-title--half-margin">Other Great Opportunities</h2>
    <div class="row">
      <?php
				$args = [
					'post_type'				=> 'investment',
					'posts_per_page'	=> 4
				];

				$related_posts = new WP_Query( $args );

				if ( $related_posts->have_posts() ) {
					while ( $related_posts->have_posts() ) {
						$related_posts->the_post(); ?>
      <div class="col-md-3 mb-5 mb-md-0">
        <?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'img-fluid' ] ); ?>
        <h3><?php the_title(); ?></h3>
        <p><?php echo wp_trim_words( get_the_content(), 18 ); ?></p>
        <a class="link-danger mt-4" href="<?php the_permalink(); ?>">View Opportunity</a>
      </div>
      <?php }
				}
				wp_reset_postdata();
			?>
    </div>
  </div>
</section>

<?php get_footer(); ?>