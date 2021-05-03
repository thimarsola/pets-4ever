<?php

//REGISTER CSS
function loadCSS()
{
    if(is_home()){
        wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css', [], '1.0.0', 'all');
    }else if(is_page('Petshop')){
        wp_enqueue_style('style-petshop', get_template_directory_uri() . '/assets/css/style-petshop.min.css', [], '1.0.0', 'all');
    }else if(is_page('Banho & Tosa')){
        wp_enqueue_style('style-banho-e-tosa', get_template_directory_uri() . '/assets/css/style-banho-e-tosa.min.css', [], '1.0.0', 'all');
    }else if(is_page('DayCare & Hotel')){
        wp_enqueue_style('style-daycare-e-hotel', get_template_directory_uri() . '/assets/css/style-daycare-e-hotel.min.css', [], '1.0.0', 'all');
    }else if(is_page('Clínica Veterinária')){
        wp_enqueue_style('style-clinica-veterinaria', get_template_directory_uri() . '/assets/css/style-clinica-veterinaria.min.css', [], '1.0.0', 'all');
    }else if(is_page('Dicas')){
        wp_enqueue_style('style-dicas', get_template_directory_uri() . '/assets/css/style-dicas.min.css', [], '1.0.0', 'all');
    }else if(is_page('Contato')){
        wp_enqueue_style('style-contato', get_template_directory_uri() . '/assets/css/style-contato.min.css', [], '1.0.0', 'all');
    }else if(is_404()){
        wp_enqueue_style('style-error', get_template_directory_uri() . '/assets/css/style-error.min.css', [], '1.0.0', 'all');
    }
}

add_action('wp_enqueue_scripts', 'loadCSS');