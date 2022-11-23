<?php
//frontend styles
function ecfilter_frontend_styles(){
    wp_enqueue_style('ecfilter-frontend-styles', ECFILTER_URL . '/assets/css/blog-filter.css', [], TIME());
}

add_action('wp_enqueue_scripts', 'ecfilter_frontend_styles', 100);

//frontend script
function ecfilter_frontend_scripts(){
    wp_enqueue_script('ecfilter-isotope', ECFILTER_URL . '/assets/js/isotope.js', ['jquery'], TIME(), true);
    wp_enqueue_style( 'load-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' );
    wp_enqueue_script('ecfilter-frontend-scripts', ECFILTER_URL . '/assets/js/main.js', ['jquery'], TIME(), true);
    wp_localize_script( 'ecfilter-frontend-scripts', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}

add_action('wp_enqueue_scripts', 'ecfilter_frontend_scripts', 100);


?>