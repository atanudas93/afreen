<section class="block-pb">
        <div class="container">
            <div class="text-widget">
                
                 <?php
                   $url = esc_url( get_post_meta( get_the_ID(), 'video_embed', 1 ) );

                   if($url != ''):?>

                   <a href= "<?php echo get_the_permalink(); ?>"class="go-more"> 

    
                    <div class="embed-responsive embed-responsive-16by9">
                                            
                         <a href= "<?php echo get_the_permalink(); ?>"class="go-more"> 

                                                      <?php echo wp_oembed_get( $url ); ?>

                         </a>

                    </div>

                     <?php else:  ?> 

                <figure>
                    <img class="img-fluid" src="<?php the_post_thumbnail()?>">
                     
                </figure>

                <?php endif;  ?>

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
    </section>
    

