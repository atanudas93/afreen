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
require get_template_directory() .' /inc/css-js.php';

//Menu funciton
require get_template_directory() .' /inc/afreen-menu.php';


//navwalker for menu
require get_template_directory() .'/inc/wp_bootstrap_navwalker.php';



//Custom post type for Homeslider
require get_template_directory() .' /inc/production.php';

//Custom post type for video
require get_template_directory() .' /inc/videoslider.php';



//Redux framework 
require get_template_directory() .' /inc/redux-framework.php';
require get_template_directory() .' /inc/afreen_theme_options.php';

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

include_once(dirname(__FILE__) .' /inc/ajax.php');
require_once(dirname(__FILE__) . '/inc/custom_action.php');
require_once(dirname(__FILE__) . '/inc/meta-boxes.php');



