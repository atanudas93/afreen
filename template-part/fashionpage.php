 <div class="row my-blogpost" id="blogContent">

             <?php
                $blog = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3, 'order' => 'desc', 'paged' =>$paged));

                if ($blog->have_posts()) :
                while ($blog->have_posts()) :
                $blog->the_post();
                ?>
                    <?php get_template_part('template-part/home-blogcontent');?>
                
                     <?php
                endwhile;
                endif;
                ?>
                  
              
            </div>

<div class="row">
      <div class="col-md-12 c-mb text-center">
                <button type="buttton" class="btn-loadmore mb5 loadmore" data-page="1" data-url ="<?php echo admin_url('admin-ajax.php') ?>" id="loadmore">Load more posts</button>
                   
                </div>
</div>


