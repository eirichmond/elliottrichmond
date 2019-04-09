<?php
	
	
add_action( 'wp_enqueue_scripts', 'elliottrichmond_theme_styles' );
function elliottrichmond_theme_styles() {
 
    $parent_style = 'parent-style'; // This is 'twentyninteen-style' for the Twenty Nineteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    
    wp_enqueue_script( 'activate-menu', get_stylesheet_directory_uri() . '/assets/js/custom.js', false, '1.0', true );
}

?>