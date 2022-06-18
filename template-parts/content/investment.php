<div class="col-md-4 mt-3">
  <div class="card">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'card-img' ] ); ?>
    </a>
    <div class="card-body">
      <a class="text-decoration-none text-dark" href="<?php the_permalink(); ?>">
        <h5 class="card-title"><?php the_title(); ?></h5>
      </a>
      <div class="investment-info">
        <h6 class="investment-info__industry">
          <span>Industry</span>
          <span><?php the_field( 'investment_industry' ); ?></span>
        </h6>
        <h6>
          <span>Raised</span>
          <span>$<?php the_field( 'investment_amount_raised' ); ?></span>
        </h6>
        <h6>
          <span>Preferred Return</span>
          <span><?php the_field( 'investment_preferred_return' ); ?>%</span>
        </h6>
        <h6>
          <span>Equity Multiple</span>
          <span><?php the_field( 'investment_equity_multiple' ); ?></span>
        </h6>
        <h6>
          <span>Minimum Investment</span>
          <span>$<?php the_field( 'investment_minimum_investment' ); ?></span>
        </h6>
      </div>
      <div class="text-center mt-4">
        <a class="link-danger" href="single-investment.html<?php the_permalink(); ?>">View Opportunity</a>
      </div>
    </div>
  </div>
</div>