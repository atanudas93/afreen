<section>
        <div class="container">
            <div class="hero-featured c-mb">
                <div class="owl-carousel owl-theme hero-featured_slider">
                    <?php
                    $blog = new WP_Query(array('post_type' => 'home-slider', 'posts_per_page' => 8, 'order' => 'desc'));

                    if ($blog->have_posts()) :
                    while ($blog->have_posts()) :
                    $blog->the_post();
                    ?>

                    <div class="slide-item">
                        <div class="card-hero_blog">
                            <div>
                                <?php the_post_thumbnail('home-slider')?>
                            </div>
                            <div class="hero_blog-content">
                                <div class="hero_blog-content-block">
                                    <h2 class="hero_blog-title"><a href=""><?php echo get_the_title();?></a></h2>
                                    <div class="hero_blog-text">
                                        <?php echo cut_limit(get_the_content(), 5); ?>
                                    </div>
                                </div>
                            </div>
                            <a href="" class="link-overlay"></a>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>