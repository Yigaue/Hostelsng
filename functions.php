<?php

$format = get_post_format();
	if( empty( $format ) ){
		$format = 'standard';
}

function hotelsng_script_enqueue(){
wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/fontawesome/css/font-awesome.min.css', array(), '', 'all');
wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/fontawesome/css/font-awesome.css', array(), '', 'all');
wp_enqueue_style('bootstrap-min', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '3.4.4', 'all');
 wp_enqueue_style('ajax', "https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js", array(), '3.4.0', 'all');
wp_enqueue_style('customstyle', get_template_directory_uri().'/assets/css/hotelsng.css', array(), '1.0.0', 'all');

wp_enqueue_script('bootstrap-minjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js',array(), '3.4.0', 'true');
// wp_enqueue_script('bootstrapjs', get_template_directory_uri().'js/bootstrap.js',array(), '3.4.0', 'true');
wp_enqueue_script('customjs', get_template_directory_uri().'/asset/js/hotelsng.js',array(), '1.0.0', 'true');
}


add_action('wp_enqueue_scripts', 'hotelsng_script_enqueue');


 function hotelsng_theme_setup(){
 	add_theme_support('menus');
 	register_nav_menu('primary', 'Primary Header Navigation');
 	register_nav_menu('secondary', 'Footer Navigation');
 	 }

 	 function hotelsng_custom_header_setup() {
    $header_image = array(
        'default-image'=> get_template_directory_uri() . '/assets/images/Bon_Voyage.png',
        'default-text-color' => '000',
        'width'=> 1000,
        'height'=> 250,
        'flex-width'=> true,
        'flex-height'=> true,
        'header-text'=> false,	
        'random-default'=> false,
        'upload'=> false,
        'admin-head-callback'=> 'adminhead_cb',	
        'admin-preview-callback'=>'adminpreview_cb',
    );
    add_theme_support( 'custom-header', $header_image );
}
 	 add_action('init', 'hotelsng_theme_setup'); 
 	 add_action( 'after_setup_theme', 'hotelsng_custom_header_setup' );
 	 add_theme_support('custom-background');
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


 	  // add_filter('nav_menu_css_class' ,'special_nav_class', 10, 2);
				// 				function special_nav_class ($classes, $item){

				// 					if(is_front_page() && $item->title =='offers'){

				// 						$classes[] ='current-menu-item';
				// 					}
				// 					return $classes;
									
				// 				}

?>   