<?php
function enqueue_styles() {
	wp_register_style('main-style', get_stylesheet_uri());
	wp_enqueue_style('main-style');
	wp_register_style('font-style', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style('font-style');
	wp_register_style('owl-style', get_template_directory_uri() . '/css/owl.carousel.min.css');
	wp_enqueue_style('owl-style');
	wp_register_style('owl-default-style', get_template_directory_uri() . '/css/owl.theme.default.min.css');
	wp_enqueue_style('owl-default-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
	wp_register_script('googleapis', '../customtheme/js/googleapis.js');
	wp_enqueue_script('googleapis');
	wp_register_script('isotope.pkgd', '../customtheme/js/isotope.pkgd.js');
	wp_enqueue_script('isotope.pkgd');
	wp_register_script('jquery-3.1.1', '../customtheme/js/jquery-3.1.1.js');
	wp_enqueue_script('jquery-3.1.1');
	wp_register_script('main', '../customtheme/js/main.js');
	wp_enqueue_script('main');
	wp_register_script('owl.carousel', '../customtheme/js/owl.carousel.js');
	wp_enqueue_script('owl.carousel');
	wp_register_script('owl.carousel.min', '../customtheme/js/owl.carousel.min.js');
	wp_enqueue_script('owl.carousel.min');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');
?>