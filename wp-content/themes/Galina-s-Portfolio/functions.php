<?php
// allow SVG uploads
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
  $existing_mimes['svg'] = 'image/svg+xml';
  return $existing_mimes;
}
function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
 }
 add_action('admin_head', 'fix_svg');




add_action('wp_enqueue_scripts', 'functionNAME'); // хук срабатывает при подключении стандартных стилей, срабатывает при запуске функции wp_head(); в любом другом файле, обычно ставят в хеадер перед закрытием </head> на вход принимает 1) название операции на которую вешают хук 2) название исполняемой функции
add_action('wp_footer', 'footer_scripts');// та же тема но для футера ХУК
add_action('after_setup_theme', 'mymenu'); // хук на регистрацию темы, регистрируем туда и свое меню тоже




function functionNAME(){
	wp_enqueue_style('stylesheet', get_stylesheet_uri()); // обязательная функция для подключения главного файла стилей style.css
wp_enqueue_style('default', get_template_directory_uri()."/assets/css/style.scss");
wp_enqueue_style('owl_mini', get_template_directory_uri()."/assets/owl/owl.carousel.min.css");
wp_enqueue_style('owl_theme', get_template_directory_uri()."/assets/owl/owl.theme.default.min.css");
}

function footer_scripts(){
	wp_enqueue_script('owl_js', get_template_directory_uri()."/assets/owl/owl.carousel.js"); 
	wp_enqueue_script('Jqs', get_template_directory_uri()."/assets/js/jQscrit.js");// подключаем скрипты (в футер)
}
function mymenu(){
	register_nav_menu( 'top', 'Меню в шапке' );//регистрирует наше меню
	register_nav_menu( 'social', 'Меню в середине' );//регистрирует наше меню
	register_nav_menu( 'foot', 'Меню в конце' );//регистрирует наше меню
	add_theme_support('title-tag'); //  делаем автоматическуб генерацию титлов на всех страницах
	add_theme_support( 'post-thumbnails', array( 'post' ) ); // дает возможность пихать превью пики к постам!!
	add_image_size( 'post_thumb', 1300, 500, true); // регистрирует новый размер картинок!
	add_image_size( 'main_pic_size', 330, 500, true); // регистрирует новый размер картинок!
	add_image_size( 'mobile_pic', 120, 120, true); // регистрирует новый размер картинок!
	add_image_size( 'post_full', 1920, 1080, true); // регистрирует новый размер картинок!
	add_image_size( 'social', 300, 300, true); // регистрирует новый размер картинок!
	add_image_size( 'awards', 400, 290, true); // регистрирует новый размер картинок!
	add_image_size( 'comment', 120, 120, true); // регистрирует новый размер картинок!
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