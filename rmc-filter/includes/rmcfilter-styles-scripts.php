<?php
//frontend styles
function filter_frontend_styles(){
    wp_enqueue_style('filter-frontend-styles', BLOG_FILTER_URL . '/assets/css/blog-filter.css', [], TIME());
}

add_action('wp_enqueue_scripts', 'filter_frontend_styles', 100);

//frontend script
function filter_frontend_scripts(){
    wp_enqueue_script('filter-isotope', BLOG_FILTER_URL . '/assets/js/isotope.js', ['jquery'], TIME(), true);
    wp_enqueue_style( 'load-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' );
    wp_enqueue_script('filter-frontend-scripts', BLOG_FILTER_URL . '/assets/js/main.js', ['jquery'], TIME(), true);
    wp_localize_script( 'filter-frontend-scripts', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}

add_action('wp_enqueue_scripts', 'filter_frontend_scripts', 100);


?>