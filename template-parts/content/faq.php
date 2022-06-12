<div class="col-md-6">
  <button class="d-flex align-items-center text-left border-0 text-dark btn-block rounded-0 py-4" type="button"
    data-toggle="collapse" data-target="<?php the_ID(); ?>" aria-expanded="false" aria-controls="multiCollapseExample0">
    <i class="m-0 ml-3 far fa-question-circle h2 font-weight-light mr-3 primary-golden-color"></i>
    <h5 class="m-0 d-inline font-weight-bold"><?php the_title(); ?></h5>
    <i class="fas fa-caret-down ml-auto mr-3"></i>
  </button>
  <div class="collapse multi-collapse" id="<?php the_ID(); ?>">
    <div class="card card-body"><?php the_content(); ?></div>
  </div>
</div>