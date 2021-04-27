<?php

//REGISTER CSS
function loadCSS()
{
    if(is_home()){
        wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css', [], '1.0.0', 'all');
    }else if(is_404()){
        wp_enqueue_style('style-error', get_template_directory_uri() . '/assets/css/style-error.min.css', [], '1.0.0', 'all');
    }
}

add_action('wp_enqueue_scripts', 'loadCSS');