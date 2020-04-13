<?php

add_action('wp_enqueue_scripts', 'functionNAME'); // хук срабатывает при подключении стандартных стилей, срабатывает при запуске функции wp_head(); в любом другом файле, обычно ставят в хеадер перед закрытием </head> на вход принимает 1) название операции на которую вешают хук 2) название исполняемой функции
add_action('wp_footer', 'footer_scripts');// та же тема но для футера ХУК
add_action('after_setup_theme', 'mymenu'); // хук на регистрацию темы, регистрируем туда и свое меню тоже




function functionNAME(){
	wp_enqueue_style('style', get_stylesheet_uri()); // обязательная функция для подключения главного файла стилей style.css
wp_enqueue_style('default', get_template_directory_uri()."/assets/css/style.scss");
wp_enqueue_style('layout', get_template_directory_uri()."/assets/css/style-dist.css");// подключает стили, 1) хз зачем тут имя 2)путь до файла
wp_enqueue_style('media-queries', get_template_directory_uri()."/assets/css/media-queries.css");
}

function footer_scripts(){

	wp_enqueue_script('script', get_template_directory_uri()."/assets/js/script.js"); // подключаем скрипты (в футер)
}
function mymenu(){
	register_nav_menu( 'top', 'Меню в шапке' );//регистрирует наше меню
	register_nav_menu( 'foot', 'Меню в конце' );//регистрирует наше меню
	add_theme_support('title-tag'); //  делаем автоматическуб генерацию титлов на всех страницах
	add_theme_support( 'post-thumbnails', array( 'post' ) ); // дает возможность пихать превью пики к постам!!
	add_image_size( 'post_thumb', 1300, 500, true); // регистрирует новый размер картинок!
	add_image_size( 'main_pic_size', 1300, 500, true); // регистрирует новый размер картинок!
	add_image_size( 'post_full', 1920, 1080, true); // регистрирует новый размер картинок!
	add_filter( 'excerpt_more', 'new_excerpt_more' );////  регистрируем фильтр для красивого отображения в постах кнопки читать дальше
	add_filter( 'document_title_separator', 'filter_title' );//регаю фильтр для изменения вывода тайтла на страницах

	function new_excerpt_more( $more ){
	global $post;
	return '<a href="'. get_permalink($post) . '">  Читать дальше...</a>'; // фильтр для красивого отображения в постах кнопки читать дальше
}

function filter_title( $sep ){
	// filter...
	$sep = ' -> ';
	return $sep;
}

}

?>