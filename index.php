<?php get_header(); ?>


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

    

<div class="body-container float">
  <div class="content-container article-list">
    <div class="card-container card-articles">
      <div class="card-list">

	  <?php
	  if ( have_posts() ) {
		while ( have_posts() ) {
	 
			the_post(); 
	 
			get_template_part( 'template-parts/content/content');

			 #the_content(); 
	
		 }
	}
			?>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
