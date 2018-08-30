<?php 
    //Register Nav Walker
    require_once('wp_bootstrap_navwalker.php');

    
    //Theme
    function wpb_theme_setup(){
    register_nav_menus(array(
    'primary' => ('Primary Menu')

    ));
    }

    add_action('after_setup_theme','wpb_theme_setup');