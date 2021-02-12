<?php get_header( );?>



<?php the_post(); ?>
<!-- header container -->
<header class="header-container post">

  
  

  
  

  
  

  
  

  
  
    <div class="header-content">
        <?php $getThumbnail = wp_get_attachment_image_url( get_post_thumbnail_id(get_the_ID( ) ),full);?>
        <div class="post-image" style="background-image: url(<?php echo $getThumbnail;?>"></div>
      

      <div class="post-text">
        <div class="type-wrap">
          
        </div>
        <h1 class="title-wrap"><?php the_title(); ?></h1>
        <h2 class="title-sub-wrap">
          <strong><?php the_author(); ?></strong>
          <span>发布于</span>
          
  <a href="javascript:;" class="article-date">
    <time  itemprop="datePublished"><?php the_date(); ?></time>
  </a>

        </h2>
      </div>
    </div>
  

  
  
  
</header>

    <!-- 文章 -->

<!-- 文章内容 -->

<div class="body-container">
  <article class="content-container article-container">
    <div class="article-content">
      
      

      <section class="article-entry">
      <?php the_content(); ?>

      </section>

      <section class="article-footer">
        
      </section>
        
      <section class="article-navs">
        
<nav class="card-container card-article-nav">
  <div class="card-list">

    
      <div id="article-nav-older" class="card-item">
        <article>
        <?php  $prev_post = get_adjacent_post(false, '', true);
        if(!empty($prev_post)) {
          echo '
          <a class="card-link article-nav-link" href="' . get_permalink($prev_post->ID) . '"></a>
          <strong class="article-nav-caption">下一篇</strong>
          <p class="article-nav-title">' . $prev_post->post_title . '</p>'; }
          else {
            echo '
            <a class="card-link article-nav-link" href="#"></a>
            <strong class="article-nav-caption">Older</strong>
            <p class="article-nav-title">
              
                (no title)
            </p>
  
            ';
          }

          ?>
        </article>
      </div>
    
  </div>
</nav>

      </section>
    </div>
  </article>
</div>

<?php get_footer();?>
 