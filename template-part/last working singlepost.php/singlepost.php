
 <!-- This dov section taken from single blog post -->
 <div class="card-blog_default">
    

<section class="block-pb">
        <div class="container">
            <div class="text-widget">
                <div class="card-blog_default">
           
               

                        <div class="blog_default-image">
                            <?php
                                                $url = get_post_meta(get_the_ID(), 'helpwp_url', true);
                                                $yt_id = youtube_id($url);

                                            if($url != ''):?>                                               
                                                <a href= "<?php echo get_the_permalink(); ?>"> 

                                                    <img src="https://img.youtube.com/vi/<?php echo esc_html($yt_id)?>/maxresdefault.jpg" >      


                                                </a>
                                                <?php else:  ?> 

                                              <a href="<?php echo get_the_permalink(); ?>" class="go-more">
                                    <?php the_post_thumbnail()?> 

                                    </a>
                                                <?php endif;  ?>




                                
                            </div>

           
            


                <h1 class="single-heading"><?php echo get_the_title();?></h1>
                <p class="post-date"><?php echo get_the_date('d/m/Y'); ?></p>
                <p>
                  <?php the_content();?>
                </p>
            </div>
            <div class="single-post-metas">
                <div class="single-post-comments">
                    <a href="">0 Comments</a>
                </div>
                <ul class="shareable-lists">
                    <li class="shareable-title">
                        <span>Share</span>
                    </li>
                    <li>
                        <a href="" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="" title="Twitter"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="" title="Pinterest"><i class="fab fa-pinterest-p"></i></a>
                    </li>
                </ul>
            </div>
        </div>
       </div>  
    </section>

    </div>

