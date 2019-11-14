
<?php global $afreen;?>

                <div class="col-md-4 c-mb">
                    <div class="card-aboutme text-center">
                        <h5 class="s-category-title text-center"><?php echo $afreen['aboutme_title'];?></h5>
                        <div class="about-avater">
                            <img src="<?php echo $afreen['aboutme_img']['url'];?>" alt="Afreen">
                                

                        </div>
                        <div class="about-note">
                            <p>
                               <?php echo $afreen['aboutme_desc'];?>
                            </p>
                        </div>
                        <div class="about-subscribe-bar">
                            <button type="button" class="btn btn-about-subscribe" data-toggle="modal" data-target="#subscribeModal">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>