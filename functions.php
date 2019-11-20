<?php
 
// Video Thumbnail from link function
function youtube_id($url){

	$vid_id ="";
	$flag = false;
	if (isset($url) && !empty($url)){

		$parts = explode ("?", $url);
 		if (isset($parts) && !empty($parts) && is_array($parts) && count($parts)>1){
			$params = explode("&", $parts[1]); 

			if (isset($params) && !empty($params) && is_array($params)){

				foreach ($params as $param) {
	
					$kv = explode("=", $param);
					if (isset($kv) && !empty($kv) && is_array($kv) && count($kv)>1){

						if ($kv[0]== 'v'){
							$vid_id = $kv[1];
							$flag = true;
							break;


						}
					}
				}
			}		
		}

	 	if(!$flag){
		 	$needle = "youtu.be/";
		 	$pos = null;
		 	$pos = strpos($url, $needle);

	 		if($pos !== false){
		 		$start = $pos + strlen($needle);
		 		$vid_id = substr($url, $start, 11);
		 		$flag = true;
	 		}
	 	}
 	}
 	return $vid_id;
}




//CSS-JS function
require_once(dirname(__FILE__) . '/inc/css-js.php');



//Menu funciton
require_once(dirname(__FILE__) . '/inc/afreen-menu.php');


//navwalker for menu
require_once(dirname(__FILE__) . '/inc/wp_bootstrap_navwalker.php');



//Custom post type for Homeslider
require_once(dirname(__FILE__) .'/inc/production.php');

//Custom post type for video
require_once(dirname(__FILE__) .'/inc/videoslider.php');



//Redux framework 
require_once(dirname(__FILE__) .'/inc/redux-framework.php');
require_once(dirname(__FILE__) .'/inc/afreen_theme_options.php');

add_theme_support ('post-content');
add_theme_support('custom-fields');
add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
// add_image_size('blog-img',720,675,true);
add_theme_support('html5',array('search-form'));

function cut_limit($string, $words = 1) {
    $string = strip_tags($string);
    $string = strip_shortcodes($string);
    return implode(' ', array_slice(explode(' ', $string), 0, $words));
}


//Custom Ajax

include_once(dirname(__FILE__) .'/inc/ajax.php');
require_once(dirname(__FILE__) . '/inc/custom_action.php');
require_once(dirname(__FILE__) . '/inc/meta-boxes.php');
require_once(dirname(__FILE__) . '/inc/contact_us.php');
// Contact form custom post 
require_once(dirname(__FILE__) .'/inc/contact.php');

// if(isset($_POST['sub'])){


// $name = $_POST['name'];

// $message = $_POST['message'];

// $arg = array(

//     'post_type' => 'contact',
//     'post_title' => $name,
//     'post_content' => $message,
//     'post_status' => 'publish' 

// );

// wp_insert_post($arg);


// }