<!DOCTYPE html>
<!-- <html lang="zh"> -->
<html <?php language_attributes();?>>
<head>
    <!-- <meta charset="UTF-8"> -->
    <meta charset="<?php bloginfo('charset');?>">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- 这句是显示多设备适应 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document-WP</title> -->
    <!-- <php wp_head(); ?> --> 
        <!-- 出错的地方！！！php前面少了问好,不然怎么能被HTML注释 -->
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url();?>"><strong>Fictional</strong> University</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
            <?php 
            //wp_nav_menu(array(
              //'theme_location' => 'headerMenuLocation'
            //));
            ?>
              <!-- 有域名的时候应该可以这样写  -->
              <!--<li><a href="/privacy-policy">Programs</a></li> -->
              <li <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 25) echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/about-us');?>">About Us</a></li>
              <li><a href="/privacy-policy">Programs</a></li>
              <li <?php if (get_post_type() == 'event') echo 'class="current-menu-item"'?>><a href="<?php echo get_post_type_archive_link('event')?>">Events</a></li>
              <li><a href="#">Campuses</a></li>
              <li <?php if (get_post_type() == 'post') echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/blog');?>">Blog</a></li>
            </ul>
          </nav>
          <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>

