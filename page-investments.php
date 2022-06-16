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

<!-- Current Investment Opportunities-->
<section class="investments py-5">
  <div class="container">
    <h2 class="section-title">Current Investment Opportunities</h2>
    <div class="row">
      <?php $args = [
				'post_type'				=> 'investment',
				'posts_per_page'	=> -1
			];

			$investments = new WP_Query( $args );

			if ( $investments->have_posts() ) {
				while ( $investments->have_posts() ) {
					$investments->the_post(); ?>

      <div class="col-md-4 mt-3">
        <div class="card">
          <a href="single-investment.html">
            <img class="card-img" src="https://picsum.photos/200/300?random=1">
          </a>
          <div class="card-body">
            <a class="text-decoration-none text-dark" href="#">
              <h5 class="card-title">Lorem ipsum dolor sit emet.</h5>
            </a>
            <div class="investment-info">
              <h6 class="investment-info__industry"><span>Industry</span><span>Wholesale</span></h6>
              <h6><span>Raised</span><span>$240,000</span></h6>
              <h6><span>Preferred Return</span><span>7%</span></h6>
              <h6><span>Equity Multiple</span><span>1X</span></h6>
              <h6>
                <span>Minimum Investment</span>
                <span>$10,000</span>
              </h6>
            </div>
            <div class="text-center mt-4">
              <a class="link-danger" href="single-investment.html">View Opportunity</a>
            </div>
          </div>
        </div>
      </div>
      <?php }
					wp_reset_postdata();
				}
			?>
    </div>
  </div>
</section>
<!-- current-investment-opportunities-end-->

<!-- Coming Soon Investment Opportunities-->
<section class="investments py-5">
  <div class="container">
    <h2 class="section-title">Current Investment Opportunities</h2>
    <div class="row">
      <?php $args = [
				'post_type'				=> 'investment',
				'posts_per_page'	=> -1
			];

			$investments = new WP_Query( $args );

			if ( $investments->have_posts() ) {
				while ( $investments->have_posts() ) {
					$investments->the_post(); ?>

      <div class="col-md-4 mt-3">
        <div class="card">
          <a href="single-investment.html">
            <img class="card-img" src="https://picsum.photos/200/300?random=1">
          </a>
          <div class="card-body">
            <a class="text-decoration-none text-dark" href="#">
              <h5 class="card-title">Lorem ipsum dolor sit emet.</h5>
            </a>
            <div class="investment-info">
              <h6 class="investment-info__industry"><span>Industry</span><span>Wholesale</span></h6>
              <h6><span>Raised</span><span>$240,000</span></h6>
              <h6><span>Preferred Return</span><span>7%</span></h6>
              <h6><span>Equity Multiple</span><span>1X</span></h6>
              <h6>
                <span>Minimum Investment</span>
                <span>$10,000</span>
              </h6>
            </div>
            <div class="text-center mt-4">
              <a class="link-danger" href="single-investment.html">View Opportunity</a>
            </div>
          </div>
        </div>
      </div>
      <?php }
					wp_reset_postdata();
				}
			?>

    </div>
  </div>
</section>
<!-- coming-soon-investment-opportunities-end-->

<?php get_footer(); ?>
