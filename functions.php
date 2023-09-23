<?php
// Подключение CSS и JS
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
	wp_enqueue_style( 'style-wsp24', get_stylesheet_uri() );
	// wp_enqueue_script( 'script-wsp24', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

// Отключение глобальных стилей WP и Gutenberg
function disable_gutenberg_wp_enqueue_scripts() {
	wp_dequeue_style('wp-block-library'); //базовые стили редактора блоков
	// wp_dequeue_style( 'wp-block-library-theme' ); //стили редактора блока для темы
	wp_dequeue_style( 'global-styles' ); // глобальные CSS-переменные
      
}
add_filter('wp_enqueue_scripts', 'disable_gutenberg_wp_enqueue_scripts', 100);