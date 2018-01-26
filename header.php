<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <div id="container" class="site-container">
    <header id="main-header" class="site-header">
      <div class="site-branding">
        <div class="site-logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
          </a>
        </div>
        <div class="site-tagline">
          <?php bloginfo( 'description' ); ?>
        </div>
      </div>

      <nav id="main-navigation" class="site-navigation" role="navigation">
        <?php wp_nav_menu( array(
          'theme_location'  => 'header-navigation',
          'menu_id'         => 'main-nav-top',
          'menu_class'      => 'main-nav',
        ) ); ?>
      </nav>

    </header>
    <div id="content" class="site-content">
