<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Required meta tags -->
       <meta charset="<?php bloginfo('charset'); ?>">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <?php wp_head(); ?>


</head>


<body<?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-gray-primary navbar-for_desktop"style ="margin-top:-20px";>
        <div class="container-fluid">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav nav-search">
                    <li class="nav-item">
                        <a href="#" class="nav-link" role="" data-toggle="modal" data-target="#searchModal"><i class="fas fa-search"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav mx-auto">
                    <?php
                   wp_nav_menu(
                    array(
                        'menu' => 'top-menu',
                        'theme_location' => 'primary-nav',
                        'depth' => 1,
                        'container' => false,
                        'menu_class' => 'navbar-nav mx-auto',
                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                        'walker' => new wp_bootstrap_navwalker()
                    )
                );
                ?>
                
                </ul>
                <ul class="navbar-nav nav-subscribe">
                    <li class="nav-item"><a href="#" role="button" class="nav-link" data-toggle="modal" data-target="#subscribeModal">Subscribe</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-gray-primary navbar-for_mobile">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div>
                <ul class="navbar-nav navbar-metanav">
                    <li class="nav-item">
                        <a href="#" class="nav-link" role="" data-toggle="modal" data-target="#searchModal"><i class="fas fa-search"></i></a>
                    </li>
                    <li class="nav-item"><a href="#" role="button" class="nav-link" data-toggle="modal" data-target="#subscribeModal">Subscribe</a></li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto">
                    <?php
                   wp_nav_menu(
                    array(
                        'menu' => 'top-menu',
                        'theme_location' => 'primary-nav',
                        'depth' => 3,
                        'container' => false,
                        'menu_class' => 'navbar-nav mx-auto',
                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                        'walker' => new wp_bootstrap_navwalker()
                    )
                );
                ?>

                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="modal fade modal-search" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="search-box">
                
                <?php get_search_form();?>


                </div>
            </div>
        </div>
    </div>