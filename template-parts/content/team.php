<div class="row">
  <div class="col-md-3 team__img">
    <?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'post-thumbnail', ['class' => 'img-fluid'] );
			} else {
				echo '<img class="img-fluid" src="' . get_template_directory_uri() . '/assets/images/team-avatar.jpg" alt="">';
			}
		?>
  </div>
  <div class="col-md-9 team__info">
    <h3 class="team__name"><?php the_title(); ?></h3>
    <p><?php the_content(); ?></p>
  </div>
</div>