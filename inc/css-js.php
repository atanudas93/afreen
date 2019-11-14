<?php

define("TROOT", get_stylesheet_directory_uri());
define("ASS", TROOT . "/assets/");
define("IMG", TROOT . "/images/");
define("CSS", TROOT . "/css/");
define("JS", TROOT . "/js/");
define("PLUGINS", TROOT . "/plugins/");


function afreen_scripts() {

   	wp_enqueue_style( 'owl-carousel', ASS . 'plugins/owl/assets/owl.carousel.min.css');
	wp_enqueue_style( 'theme-owl-default', ASS . 'plugins/owl/assets/owl.theme.default.min.css');

	wp_enqueue_style( 'theme-owl-default', ASS . 'plugins/owl/assets/owl.theme.default.css');
	

	wp_enqueue_style('google-font-roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap');
    wp_enqueue_style('google-font-playfair', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700&display=swap');
	 wp_enqueue_style('ion-icons', 'https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css');
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.7.1/css/all.css');
    wp_enqueue_style('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css');
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('theme-style', ASS.'css/style.css');

    
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper-js','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',array('jquery'),'1.14.7', true);
    wp_enqueue_script('bootstrap-js','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',array('jquery'),'4.3.1', true);
    wp_enqueue_script('parallax-js', ASS. 'plugins/parallax/parallax.min.js',array('jquery'), false, true);
    wp_enqueue_script('owl-js', ASS. 'plugins/owl/owl.carousel.min.js',array('jquery'), false, true);
    wp_enqueue_script('script', ASS. 'js/script.js',array('jquery'), false, true);
	//Loadmore 

    wp_enqueue_script('loadmore', ASS. 'js/loadmore.js',array('jquery'), false, true);   
}

add_action('wp_enqueue_scripts', 'afreen_scripts');