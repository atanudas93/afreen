
<!-- <div> -->
    <h3 class="s-category-title text-center">NEW VIDEOS</h3>
                <div class="videobar">
                    <div class="owl-carousel owl-theme video_slider">

                                    <?php
                                $blog = new WP_Query(array('post_type' => 'home-videos', 'posts_per_page' => 10, 'order' => 'desc'));

                                if ($blog->have_posts()) :
                                while ($blog->have_posts()) :
                                $blog->the_post();
                                ?>

                        <div class="slide-item">
                            <div class="card-video">
                                
                                <a href="<?php echo get_the_permalink(); ?>">
                               

                                    <div class="video-poster">
                                        
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
                                    <div class="video-playicon">
                                                    <i class="far fa-play-circle"></i>
                                                </div>
                                   
                                    <div class="video-content">
                                        <div>

                                        	<a href="<?php echo get_the_permalink(); ?>">
                                        	 	</a>
										 <a href="<?php echo get_the_permalink(); ?>">
                                            <h5 class="video-title text-center">
                                                <?php echo get_the_title(); ?>
                                            </h5></a>
                                            <div class="video-date text-center">
                                                <span><?php echo get_the_date('d/m/Y'); ?></span>
                                            </div>
                                            
                                            
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
<!-- </div>
</div> -->