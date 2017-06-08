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

function enqueue_scripts() {
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

add_action('init', 'resume_post_type');
function resume_post_type(){
	register_post_type('Resume', array(
		'labels'             => array(
			'name'               => 'Resume',
			'singular_name'      => 'Resume',
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new resume',
			'edit_item'          => 'Edit resume',
			'new_item'           => 'New resume',
			'view_item'          => 'View resume',
			'search_items'       => 'Search resume',
			'not_found'          => 'Resume not found',
			'not_found_in_trash' => 'Resume not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Resume'
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'menu_icon'			 		 => 'dashicons-clipboard',
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}
add_action( 'init', 'resume_taxonomies', 0 );
function resume_taxonomies() {
    register_taxonomy(
			'resume_types',
			'resume',
			array(
				'hierarchical' => true,
				'label' => 'Resume types',
				'query_var' => true,
				'rewrite' => true
			) );
}

add_action('init', 'work_post_type');
function work_post_type(){
	register_post_type('Work', array(
		'labels'             => array(
			'name'               => 'Work',
			'singular_name'      => 'Work',
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new work',
			'edit_item'          => 'Edit work',
			'new_item'           => 'New work',
			'view_item'          => 'View work',
			'search_items'       => 'Search work',
			'not_found'          => 'Work not found',
			'not_found_in_trash' => 'Work not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Work'
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'			 		 => 'dashicons-hammer',
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}
add_action( 'init', 'work_taxonomies', 0 );
function work_taxonomies() {
    register_taxonomy(
			'work_types',
			'work',
			array(
				'hierarchical' => true,
				'label' => 'Work types',
				'query_var' => true,
				'rewrite' => true
			) );
}

?>
