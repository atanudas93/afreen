<?php global $afreen; 


 
$insta_token = $afreen['insta-access-token'];
$insta_count = $afreen['insta-count'];
$ig_user_id = 'self';
$insta_api_url = "https://api.instagram.com/v1/users/" . $ig_user_id . "/media/recent/?access_token=" . $insta_token . "&count=".$insta_count;
if ($insta_token != ''):
    $remote_wp = wp_remote_get($insta_api_url);
    $instagram_response = json_decode($remote_wp['body']);
  ?> 



</section>
    <section class="block-py pb-0 bg-gray-secondary">
        <div class="container-fluid container-fluid-px-lg">
            <h3 class="s-category-title text-center">INSTAGRAM</h3>
            <div class="row no-gutters instagram-bar">
                 <?php
                if ($remote_wp['response']['code'] == 200):
                    foreach ($instagram_response->data as $m):
                        ?>


                <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                    <a href="" class="instagram-item">
                        <div class="instagram-image">
                             <img src="<?php echo $m->images->thumbnail->url; ?>"
                                         alt="<?php echo $m->caption->text; ?>"
                                         title="<?php echo $m->caption->text; ?>">
                        
                        </div>
                        <div class="instagram-content">
                            <i class="fab fa-instagram"></i>
                        </div>
                    </a>
                </div>
               <?php
                    endforeach;
                elseif ($remote_wp['response']['code'] == 400):
                    echo '<b>' . $remote_wp['response']['message'] . ': </b>' . $instagram_response->meta->error_message;
                endif;
                ?>
               
            </div>
        </div>
    </section>
    <?php endif; ?>