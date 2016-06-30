<?php 

/**
* Загружаемые стили и скрипты
**/
function load_style_script(){
	wp_enqueue_script('libs', get_template_directory_uri() . '/js/libs.js');
	wp_enqueue_script('common', get_template_directory_uri() . 'js/common.js');

	wp_enqueue_style('fonts.min', get_template_directory_uri() . '/css/fonts.min.css');	
	wp_enqueue_style('header.min', get_template_directory_uri() . '/css/header.min.css');	
	wp_enqueue_style('main.min', get_template_directory_uri() . '/css/main.min.css');	
	wp_enqueue_style('media.min', get_template_directory_uri() . '/css/media.min.css');	
	wp_enqueue_style('vars.min', get_template_directory_uri() . '/css/vars.min.css');	
}

/**
* Загружаем стили и скрипты
**/

add_action('wp_enqueue_scripts', 'load_style_script');

/**
* поддержка миниатюр
**/

add_theme_support('post-thumbnails');

/**
* меню
**/
add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'header_menu' => 'Меню в шапке',
		'sidebar_menu' => 'Меню сбоку'
	) );
});
// register_nav_menu('menu', 'Меню');

/**
* Сайдбар
**/
register_sidebar(array(
	'name' => 'Виджеты сайдбара',
	'id' => 'sidebar',
	'description' => 'Здесь размещайте виджеты сайдбара',
/*	'before_widget' => '<div class="menu">',
	'after_widget' => '</div>'*/
	));

/*add_filter( 'widget_title', 'hide_widget_title' );
function hide_widget_title( $title ) {
    if ( empty( $title ) ) return '';
    if ( $title[0] == '!' ) return '';
    return $title;
}*/

 ?>