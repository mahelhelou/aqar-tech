<?php get_header(); ?>

<!-- Page Banner-->
<section class="page-banner">
  <div class="page-banner__content">
    <h1 class="page-banner__title">Most Frequently Asked Questions</h1>
  </div>
</section>
<!-- page-banner-end-->

<section class="faqs py-5">
  <div class="container">
    <div class="row">
      <?php
			$args = [
				'post_type'				=> 'faq',
				'posts_per_page'	=> -1
			];

			$faqs = new WP_Query($args);

			if ( $faqs->have_posts() ) {
				while ( $faqs->have_posts() ) {
					$faqs->the_post();
					get_template_part( 'template-parts/content/faq' );
				}
			} else {
				echo '<p class="text-center w-100">No FAQs found</p>';
			}
				wp_reset_postdata();
			?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
