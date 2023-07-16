<?php
function enqueue_child_theme_styles() {
   wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles' );
?>