<?php


function jkk_max_additional_custom_styles() {

    /*Enqueue The Styles*/
    wp_enqueue_style( 'Null', get_template_directory_uri() . '/css/null.css' );
    wp_enqueue_style( 'core', get_template_directory_uri() . '/css/wpCore.css' );
    wp_enqueue_style( 'jonkopiongskanotklubb', get_template_directory_uri() . '/css/main.css' );

    wp_enqueue_script("jquery");
    wp_enqueue_script( 'jkkjs', get_template_directory_uri() . '/js/main.js' );
    

}

add_action( 'wp_enqueue_scripts', 'jkk_max_additional_custom_styles' );

/** - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
*
* Add a menu location
*/
register_nav_menu('main', 'The Main menu' );
/** - - - - - - - - - - - - - - - - - - - - - - - - - - - - -**/
function jkk_max_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sid panel', 'jonkopiongskanotklubb' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets i denna sidpanel visas på alla sidor förutom start sidan', 'jonkopiongskanotklubb' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar(array(
    	'name' 			=> __('action', 'jonkopiongskanotklubb' ),
        'id'            => 'action',
        'description'   => __( 'visas på videon på första sidan', 'jonkopiongskanotklubb' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>', 
    ));
}
add_action( 'widgets_init', 'jkk_max_widgets_init' );





add_action( 'after_setup_theme', 'jkk_max_theme_setup' );
function jkk_max_theme_setup() {
	add_image_size( 'logo_size', 100, 100, false );  
	add_image_size( 'wallsize', 258 );  
	add_image_size( 'pageHeader', 1920, 250, true );  


    /* Add theme support for:
	 * automatic title tags
	 * featured images
	 * title-tags
	 * Costum logo
	 * costum header
	*/
	//add_theme_support( 'custom-background');// Enable admin to set custom background images in 'appearance > background'
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
	    'height'      => 100,
	    'width'       => 100,
	    'flex-height' => true,
	    'flex-width'  => true,
	    'header-text' => array( 'site-title', 'site-description' ),
	) );
	$defaults = array(
	    'video' => true,
        'flex-width'    => true,
        'width'         => 1920,
        'flex-height'    => true,
        'height'        => 1080,
       // 'default-image' => get_template_directory_uri() . '/images/header.jpg',

	);
	add_theme_support( 'custom-header', $defaults );
}


?>