<?php

//REGISTER JS
function loadJS()
{
    if(is_home()){
        wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/script-home.min.js', [], '1.0.0', true);
    }else if(is_page('Petshop')){
        wp_enqueue_script('scripts-pages', get_template_directory_uri() . '/assets/js/script-petshop.min.js', [], '1.0.0', true);
    }
}

add_action('wp_enqueue_scripts', 'loadJS');