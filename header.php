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
  

  

  

    <title>
      <?php if (is_home(  )) {bloginfo('name'); echo '-'; bloginfo('description');}elseif (is_single()){ the_title(  );echo '-' ;bloginfo( 'name' );} 
      # code...
     ?></title>




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
      <a href="<?php bloginfo( 'wpurl' );?>">
        
          <?php the_custom_logo()?>
        
      </a>
    </div>
    <!-- link -->
	<!--
    <div class="navbar-link">

	
      <div class="navbar-btn">
        <div></div>
        <div></div>
        <div></div>

	
      </div>
	  -->
      <ul class="navbar-list">
	  <?php wp_nav_menu( array( 'menu' => 'mymenu', 'depth' => 1) );?>
	  

	</ul>
    </div>
  </div>
</nav>
