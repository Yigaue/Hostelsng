<?php

$format = get_post_format();
	if( empty( $format ) ){
		$format = 'standard';
}

function hotelsng_script_enqueue(){
wp_enqueue_style('fontawesome', get_template_directory_uri().'/fontawesome/css/font-awesome.min.css', array(), '', 'all');
wp_enqueue_style('fontawesome', get_template_directory_uri().'/fontawesome/css/font-awesome.css', array(), '', 'all');
wp_enqueue_style('bootstrap-min', get_template_directory_uri().'/css/bootstrap.min.css', array(), '3.4.4', 'all');
 wp_enqueue_style('ajax', "https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js", array(), '3.4.0', 'all');
wp_enqueue_style('customstyle', get_template_directory_uri().'/css/hotelsng.css', array(), '1.0.0', 'all');

wp_enqueue_script('bootstrap-minjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js',array(), '3.4.0', 'true');
// wp_enqueue_script('bootstrapjs', get_template_directory_uri().'js/bootstrap.js',array(), '3.4.0', 'true');
wp_enqueue_script('customjs', get_template_directory_uri().'js/hotelsng.js',array(), '1.0.0', 'true');
}


add_action('wp_enqueue_scripts', 'hotelsng_script_enqueue');


 function hotelsng_theme_setup(){
 	add_theme_support('menus');
 	register_nav_menu('primary', 'Primary Header Navigation');
 	register_nav_menu('secondary', 'Footer Navigation');
 	 }

 	 add_action('init', 'hotelsng_theme_setup'); 
 	 add_theme_support('custom-background');
 	 add_theme_support('custom-header');
 	  add_theme_support('post-thumbnails');
 	  add_theme_support('post-formats', array('aside','image', 'video'));
 	  add_theme_support( 'title-tag' );

 	  add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
?>   