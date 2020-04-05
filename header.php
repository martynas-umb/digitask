<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Drivitty
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="intro-background">
  <header id="masthead" class="site-header">

    <nav id="site-navigation" class="main-navigation">
      <div class="main-container">
        <div class="site-logo">
          <?php the_custom_logo(); ?>
        </div>
        <div class="menus-wrapper">
          <div class="left-menu">
            <?php
              wp_nav_menu(array(
                'theme_location' => 'left-menu',
              ));
            ?>
          </div>
          <div class="right-menu">
            <?php
              wp_nav_menu(array(
                'theme_location' => 'right-menu',
              ));
            ?>
          </div>
        </div>
        <div id="menuToggle">
          <input type="checkbox"/>
          <span></span>
          <span></span>
          <span></span>
          <div class="mobile-menu">
            <?php
              wp_nav_menu(array(
                'theme_location' => 'left-menu',
              ));
            ?>
            <?php
              wp_nav_menu(array(
                'theme_location' => 'right-menu',
              ));
            ?>
          </div>
        </div>

      </div>
    </nav><!-- #site-navigation -->
  </header><!-- #masthead -->

