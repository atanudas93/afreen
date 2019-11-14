<section class="block-pb has-col-mb">
        <div class="container">
            <div class="row post-featured-about">

             <?php
                $blog = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 1, 'orderby' => 'rand'));

                if ($blog->have_posts()) :
                while ($blog->have_posts()) :
                $blog->the_post();
                ?>
                <div class="col-md-8 c-mb">
                    <div class="card-blog_default-large">
                        <a href="">
                            <div class="blog_default-image">
                              <a href="<?php echo get_the_permalink(); ?>" class="go-more">
                                    <?php the_post_thumbnail()?> 
                                </a>
                            </div>
                        </a>
                        <div class="blog_default-denote">
                           <h4 class="blog_default-title">
                                <a href="<?php echo get_the_permalink(); ?>" class="go-more"><?php echo get_the_title(); ?></a>
                            </h4>
                             <div class="blog_default-text">
                                <p>
                                   <?php echo cut_limit(get_the_content(), 40); ?>
                                </p>
                                <a href="<?php echo get_the_permalink(); ?>" class="go-more">Read more</a>
                            </div>
                            <div class="blog-metas">
                                <div class="dropdown dropdown-metas">
                                    <a class="dropdown-metas-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="far fa-share-square"></i> Share
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                                        <a class="dropdown-item" href="#"><i class="fab fa-twitter"></i> Twitter</a>
                                        <a class="dropdown-item" href="#"><i class="fab fa-pinterest-p"></i> Pinterest</a>
                                    </div>
                                </div>
                                <div class="blog-comments">
                                    <a href=""><i class="far fa-comments"></i> 0 Comments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                endwhile;
                endif;
                ?>

                    <?php get_template_part('template-part/home-about');?>
