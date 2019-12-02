             <section class="block-py bg-gray-secondary">
        <div class="container">
            <h3 class="s-category-title text-center">RELATED VIDEOS</h3>
            <div class="row no-gutters">
                  <?php
                $blog = new WP_Query(array('post_type' => 'home-videos', 'posts_per_page' => 4, 'order' => 'desc', 'paged' =>$paged));

                if ($blog->have_posts()) :
                while ($blog->have_posts()) :
                $blog->the_post();
                ?>

               
               <div class="col-md-3">
                    <div class="card-video">
                        <a href="">
                            <div class="video-poster">
                                
                                <?php
                                                $url = get_post_meta(get_the_ID(), 'helpwp_url', true);
                                                $yt_id = youtube_id($url);

                                            if($url != ''):?>                                               
                                                

                                                    <img src="https://img.youtube.com/vi/<?php echo esc_html($yt_id)?>/maxresdefault.jpg" >      


                                                
                                                <?php else:  ?> 

                                                <img src="<?php the_post_thumbnail()?>" > 
                                                <?php endif;  ?>    


                            </div>
                            <div class="video-playicon">
                                <i class="far fa-play-circle"></i>
                            </div>
                            <div class="video-content">
                                <div>
                                    <h5 class="video-title text-center">
                                       <?php echo get_the_title(); ?>
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
             <?php
                endwhile;
                endif;
                ?>

            </div>
        </div>
    </section>