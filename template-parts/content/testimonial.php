<div class="testimonials__item px-4">
	<div class="testimonials__item-quote">
		<i class="fas fa-quote-left mb-3 text-danger"></i>
		<p class="testimonials__item-text"><?php the_content(); ?></p>
	</div>
	<h4 class="text-danger mt-3"><?php the_title(); ?></h4>
	<h6 class="mb-3 font-italic font-weight-bold"><?php the_field( 'quote_owner_position' ); ?></h6>
</div>
