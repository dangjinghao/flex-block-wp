<?php get_header(); ?>
<!-- header container -->
<header class="header-container ">

  
  
    <div class="header-content ">
      
        <div class="post-image" style="background-image: url(<?php echo get_background_image(  );?>)"></div>
      
      
      <div class="post-text">
        <h1 class="title-wrap"><?php bloginfo('name');?></h1>


        
          <h2 class="title-sub-wrap"><?php bloginfo('description'); ?></h2>
        
      </div>

       
    </div>
 
</header>



    

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
