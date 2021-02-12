<div class="card-item img">
            <article>

            <?php 
              $getThumbnail = wp_get_attachment_image_url( get_post_thumbnail_id(get_the_ID( ) ),full);?>
             <div class="card-cover" style="background-image: url(<?php echo $getThumbnail;?>)"></div>
              <a class="article-link card-link" href="<?php the_permalink(  )?>" itemprop="url"></a>
              
              <h2 class="article-title"><?php the_title(); ?></h2>
              <div class="article-meta">
                <strong><?php the_author(); ?></strong>
                <span>发布于</span>
                
                <a  class="article-date">
                  <time itemprop="datePublished"><?php the_date(); ?></time>
                </a>

              </div>
              <div class="article-category">
                
              </div>
            </article>
          </div>