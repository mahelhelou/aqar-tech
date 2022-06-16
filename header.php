<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Mahmoud El Helou">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Fallback javascript-->
  <noscript>
    <div class="alert alert-danger" role="alert">- The website may not work as intended to be, since there is a heavy
      depends on Javascript and now it's disabled in your browser, please <a class="alert-link"
        href="https://www.enable-javascript.com/" target="_blank">enable it</a>, then reload the page.</div>
  </noscript>

  <!-- Navbar-->
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light px-3 py-4">
    <div class="container">
			<a class="navbar-brand" href="<?php echo site_url( '/' ); ?>">
        <div class="navbar-brand__box">
          <h3>Aqar Tech</h3>
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
        aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="main-menu">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active"><a class="nav-link" href="<?php echo site_url( '/' ); ?>">Home<span
                class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url( '/investments' ); ?>">Investments</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo get_post_type_archive_link( 'faq' ); ?>">FAQs</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo get_post_type_archive_link( 'team' ); ?>">Team</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url( '/about-us' ); ?>">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url( '/contact' ); ?>">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar-end-->
