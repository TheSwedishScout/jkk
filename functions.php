<?php


function jkk_max_additional_custom_styles() {

    /*Enqueue The Styles*/
    /*wp_enqueue_style( 'Null', get_template_directory_uri() . '/css/null.css' );
    wp_enqueue_style( 'core', get_template_directory_uri() . '/css/wpCore.css' );
    wp_enqueue_style( 'jonkopiongskanotklubb', get_template_directory_uri() . '/css/main.css' );
    wp_enqueue_style( 'article', get_template_directory_uri() . '/css/article.css' );
    wp_enqueue_style( 'frontpage', get_template_directory_uri() . '/css/frontpage.css' );
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css' );
    wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );*/

    wp_enqueue_style( 'all', get_template_directory_uri() . '/css/allinone.css' );

    wp_enqueue_script("jquery");
    wp_enqueue_script( 'jkkjs', get_template_directory_uri() . '/js/main.js' );
    

}

add_action( 'wp_enqueue_scripts', 'jkk_max_additional_custom_styles' );

/** - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
*
* Add a menu location
*/
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu(){
    register_nav_menu('main', 'The Main menu' );
    register_nav_menu('medlem', 'menyn när man är inloggad medlem' );
    register_nav_menu('headpages', 'Main pages whit images on frontpage' );
}
/** - - - - - - - - - - - - - - - - - - - - - - - - - - - - -**/
function jkk_max_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'contact', 'jonkopiongskanotklubb' ),
        'id'            => 'contact',
        'description'   => __( 'Information som är i footern kontakt och adress tillexempel', 'jonkopiongskanotklubb' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
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
	add_image_size( 'wallsize', 700 );  
	add_image_size( 'pageHeader', 1920, 540, true );  


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


include_once('inc/imageInMenu.php');
include_once('inc/sponsorPostType.php');
include_once('inc/admin-function.php');

?>