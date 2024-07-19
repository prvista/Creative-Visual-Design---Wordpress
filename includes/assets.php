<?php

function cvd_assets(){
    
    wp_enqueue_style('cvd-style', get_template_directory_uri() . "/css/style.css", microtime());
    wp_enqueue_style('cvd-icons', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css", 1.0);
    wp_enqueue_script('cvd-script', get_template_directory_uri() . "/js/script.js", microtime(), [], true );
}
// Hook that will run this function    
add_action('wp_enqueue_scripts', 'cvd_assets');




