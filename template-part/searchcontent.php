<div class="col-md-4 c-mb">
                    <div class="card-blog_default">
                        <a href="">
                            <div class="blog_default-image">
                                 <?php the_post_thumbnail()?>
                            </div>
                        </a>
                        <div class="blog_default-denote">
                            <h4 class="blog_default-title">
                                <a href=""><?php echo get_the_title(); ?></a>
                            </h4>
                            <div class="blog_default-text">
                                <p>
                                   <?php the_content(); ?>
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