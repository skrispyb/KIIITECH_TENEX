<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="site-header-wrapper">
      <div class="site-branding">
      <?php
      if (!is_front_page()) :
        if (has_custom_logo()) :
      ?>

          <a class="site-title" href="<?php home_url('/'); ?>">
            <?php the_custom_logo(); ?>
          </a>

        <?php
        else :
        ?>
          <a class="site-title" href="<?php home_url('/'); ?>">
            <?php bloginfo('name'); ?>
          </a>
        <?php
        endif;
      else :
        ?>

        <a class="site-title">
          <?php
          if (has_custom_logo()) :
            the_custom_logo();
          else :
            bloginfo('name');
          endif;
          ?>
        </a>
      <?php
      endif;
      ?>
      </div> <!-- .site-branding -->
      <nav id="site-navigation" class="main-navigation">
        <button class="btn-main" id="menu-button">
          <i class="fas fa-bars"></i>
          <span class="screen-reader-text">Main</span>
        </button>
      </nav><!-- #site-navigation -->
      <div class="menu-container-main hidden">
        <div class="close_menu_btn" id="closeMenu"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22 2L2 22" stroke="#4F4F4F" stroke-width="4" stroke-linecap="round" />
            <path d="M2 2L22 22" stroke="#4F4F4F" stroke-width="4" stroke-linecap="round" />
          </svg>
        </div>
        <?php
        wp_nav_menu(array(
          'theme_location'  =>    'main_menu',
          'container'       =>     'div',
          'container_class' =>     'menu-main'
        ));
        ?>
      </div>
      <div class="menu-container-main-lg">
        <?php
        wp_nav_menu(array(
          'theme_location'  =>    'main_menu',
          'container'       =>     'div',
          'container_class' =>     'menu-main'
        ));
        ?>
      </div>
    </div>
  </header><!-- #masthead -->

  <div id="primary" class="content-area">
    <main id="main" class="site-main">