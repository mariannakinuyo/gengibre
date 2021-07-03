<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="GENgiBRe">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css?25859">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,700;0,800;1,400;1,500;1,700;1,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"  rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>

<body>

<header class="header">
  
  <div class="menu-home container-fluid d-none d-lg-block">
    <div class="row">
      <div class="col-12">
        <div class="d-flex justify-content-between">
          <div class="logo-home d-flex">
            <a class="opacity" href="<?php bloginfo('siteurl'); ?>">
              <img class="logo-gen" src="<?php bloginfo('template_url'); ?>/src/images/logo-menu.svg" alt="">
              <img class="logo-gengibre-menu" src="<?php bloginfo('template_url'); ?>/src/images/logo-gengibre-menu.svg" alt="">
            </a>
          </div>
          <div class="menu-home-list d-flex">
            <?php
              wp_nav_menu( array( 'menu' => 'menu-home', 'container' => FALSE, 'menu_class' => 'menu-home', 'menu_id' => false ) );
              wp_nav_menu( array( 'menu' => 'language', 'container' => FALSE, 'menu_class' => 'menu-home', 'menu_id' => false ) );
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container d-lg-none d-block menu-mobile">
    <div class="row">
      <div class="col-12">
        <nav role='navigation' class="mobile-menu">
          <div class="logo-menu">
            <a href="<?php echo home_url() ?>">
              <img class="logo-gen" src="<?php bloginfo('template_url'); ?>/src/images/logo-menu.svg" alt="gengibre">
              <img class="logo-gengibre-menu" src="<?php bloginfo('template_url'); ?>/src/images/logo-mobile.svg" alt="gengibre">
            </a>
          </div>
          <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu-mobile">
              <div>
                <?php  wp_nav_menu( array( 'menu' => 'menu-home', 'container' => FALSE, 'menu_class' => 'menu-home', 'menu_id' => false ) ); ?>
              </div>
              <div>
                <?php  wp_nav_menu( array( 'menu' => 'language', 'container' => FALSE, 'menu_class' => 'menu-language', 'menu_id' => false ) ); ?>
              </div>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>

</header>
