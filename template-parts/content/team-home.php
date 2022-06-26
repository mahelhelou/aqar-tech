<div class="col-md-3 mt-4 mt-md-0">
  <div class="team__img">
    <?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'post-thumbnail', ['class' => 'img-fluid'] );
			} else {
				echo '<img class="img-fluid" src="' . get_template_directory_uri() . '/app/assets/images/team-avatar.png">';
			}
		?>
  </div>
  <div class="team__info">
    <h3 class="team__name"><?php the_title(); ?></h3>
  </div>
</div>
