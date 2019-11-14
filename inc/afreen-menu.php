<?php


// Menu option enable on WP
add_theme_support('menus');

// Menu Item function enabling
function afreen_menu() {
    register_nav_menus(

    	array('primary-nav' => "Top Menu")

);
}

add_action('init', 'afreen_menu');