<?php


/*

@package afreen

======================

AJAX FUNCCTIONS
======================

*/

add_action( 'wp_ajax_nopriv_afreen_load_more_function','afreen_load_more_function'  );
add_action( 'wp_ajax_afreen_load_more_function','afreen_load_more_function'  );

function afreen_load_more_function(){
 $paged = $_POST['page'] + 1; 


		$blog = new WP_Query(array(
		'post_type' => 'post', 
		'posts_per_page' => 3,  
		'paged' => $paged

		));
 
                if ($blog->have_posts()) :
                while ($blog->have_posts()) :
                $blog->the_post();
                
                    get_template_part('template-part/home-blogcontent');
                
                     
                endwhile;
                endif;
          wp_reset_postdata();      

        die();
}








// function load_posts_by_ajax_callback() {
//     check_ajax_referer('load_more_posts', 'security');
//     $paged = $_POST['page'];
//     $args = array(
//         'post_type' => 'post',
//         'post_status' => 'publish',
//         'posts_per_page' => '2',
//         'paged' => $paged,
//     );
//     $my_posts = new WP_Query( $args );
//     if ( $my_posts->have_posts() ) :
        // 
         // while ( $my_posts->have_posts() ) : $my_posts->the_post();
        //     <h2><?php the_title();</h2>
        //     <?php the_excerpt(); 
        //  endwhile;
        // php
//     endif;
 
//     wp_die();
// }

// add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
// add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');






// add_action( 'wp_ajax_nopriv_btn_loadmore','btn_loadmore'  );
// add_action( 'wp_ajax_btn_loadmore','btn_loadmore'  );

// function btn_loadmore(){

// // function load_posts_by_ajax_callback() {
// //     check_ajax_referer('load_more_posts', 'security');


        
// 	$paged = $_POST["page"];
//     echo $paged;

//                 $blog= new WP_Query(array(
//                     'post_type' => 'post', 
//                      'posts_per_page' => 3, 
//                      'order' => 'desc',
//                     'paged' => $paged,
//                 ));

//                 if ($blog->have_posts()) :
//                 while ($blog->have_posts()) :
//                 $blog->the_post();
                
//                      get_template_part('template-part/home-blogcontent');
                
                     
//                 endwhile;
//                 endif;
            
//                 wp_rest_postdata();

//                     die();
 



// }

// add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
// add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');