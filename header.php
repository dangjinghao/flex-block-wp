<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
  <meta charset="<?php bloginfo( 'charset' )?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#3367D6"/>

  <!--
  

  
    
    <meta name="keywords" content="blog">--?>
  

  
    <meta name="author" content="captain">
    <meta name="description" content=<?php bloginfo('description'); ?>>

  -->
  

  

  

    <title><?php bloginfo('name'); ?>-<?php bloginfo('description'); ?></title>




    <link rel="icon" href=<?php site_icon_url( ); ?>>
  
    <?php site_url(   );?>
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/typeface-source-code-pro@1.1.3/index.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/highlightjs@9.16.2/styles/monikai.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css">


</head>
<body>
  <div class="root-container">
    <!-- navbar -->
<nav class="navbar">
  <div class="navbar-content">
    <!-- logo -->
    <div class="navbar-logo">
      <a href="">
        
          <?php wp_site_icon(  );?>
        
      </a>
    </div>
    <!-- link -->
    <div class="navbar-link">
      <div class="navbar-btn">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </div>
</nav>

    
<!-- header container -->
<header class="header-container">

  
  
    <div class="header-content ">
      
        <div class="post-image" style="background-image: url(https://qiniu.miiiku.xyz/src/images/banner.jpg)"></div>
      
      
      <div class="post-text">
        <h1 class="title-wrap"><?php bloginfo('name'); ?></h1>
        
          <h2 class="title-sub-wrap"><?php bloginfo('description'); ?></h2>
        
      </div>

       
    </div>
 
</header>
