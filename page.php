<?php get_header(); ?>

<!-- Page Banner-->
<section class="page-banner">
  <div class="page-banner__content">
    <h1 class="page-banner__title"><?php the_title(); ?></h1>
  </div>
</section>
<!-- page-banner-end-->

<section class="page py-5">
  <div class="container">
    <?php the_content(); ?>
  </div>
</section>

<?php get_footer(); ?>
