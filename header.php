<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="container">
    <?php the_custom_logo(); ?>
    <?php
    wp_nav_menu( [
      'theme_location' => 'menu-1',
      'container' => false,
      'menu_class' => 'main-menu',
    ] );
    ?>
  </div>
</header>
<main class="site-main">
