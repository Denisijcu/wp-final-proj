<!DOCTYPE html>
<html lang="en">
<head>
   <?php wp_head(); ?>
</head>
<body>
<header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>WAD</strong></a></h1>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
      <nav class="main-navigation">
          <ul>
            <li><a href="/">Home</a></li>
            <li <?php if (is_page('about') or wp_get_post_parent_id(0) == 132) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about') ?>">About Us</a></li>
            <li <?php if (get_post_type() == 'event') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/services'); ?>">Services</a></li>
            <li <?php if (get_post_type() == 'post') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
            
            <li></li>
            <li></li>
        </ul>
        
        
      </nav>
        
     
      
    </div>
  </header>