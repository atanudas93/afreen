
  
            <div class="col-md-3">
                <a href="<?php echo get_the_permalink(); ?> " class="related-item">
                     <div class="related-image">
                      
                                            <?php
                                                $url = get_post_meta(get_the_ID(), 'helpwp_url', true);
                                                $yt_id = youtube_id($url);

                                            if($url != ''):?>                                               
                                                <a href= "<?php echo get_the_permalink(); ?>"> 

                                                    <img src="https://img.youtube.com/vi/<?php echo esc_html($yt_id)?>/maxresdefault.jpg" >      


                                                </a>
                                                <?php else:  ?> 

                                                <img src="<?php the_post_thumbnail()?>" > 
                                                <?php endif;  ?>    
                        </div>
                        <div class="related-content">
                            <h5 class="related-title"><?php echo get_the_title(); ?></h5>
                        </div>
                    
                    </a>
               
                
                
            </div>
       
  
