<?php

//REGISTER JS
function loadJS()
{
    if(is_home()){
        wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/script-home.min.js', [], '1.0.0', true);
    }else if(is_page('Petshop')){
        wp_enqueue_script('scripts-petshop', get_template_directory_uri() . '/assets/js/script-petshop.min.js', [], '1.0.0', true);
    }else if(is_page('Banho & Tosa')){
        wp_enqueue_script('scripts-banho-e-tosa', get_template_directory_uri() . '/assets/js/script-banho-e-tosa.min.js', [], '1.0.0', true);
    }else if(is_page('DayCare & Hotel')){
        wp_enqueue_script('scripts-daycare-e-hotel', get_template_directory_uri() . '/assets/js/script-daycare-e-hotel.min.js', [], '1.0.0', true);
    }else if(is_page('Clínica Veterinária')){
        wp_enqueue_script('scripts-clinica-veterinaria', get_template_directory_uri() . '/assets/js/script-clinica-veterinaria.min.js', [], '1.0.0', true);
    }else if(is_page('Dicas')){
        wp_enqueue_script('scripts-dicas', get_template_directory_uri() . '/assets/js/script-dicas.min.js', [], '1.0.0', true);
    }else if(is_page('Contato')){
        wp_enqueue_script('scripts-contato', get_template_directory_uri() . '/assets/js/script-contato.min.js', [], '1.0.0', true);
    }
}

add_action('wp_enqueue_scripts', 'loadJS');