<?php

add_filter('wp_nav_menu_objects', 'ad_filter_menu', 10, 2);

function ad_filter_menu($sorted_menu_objects, $args) {
    // check for the right menu to filter
    // here we check for the menu with name 'Posts Menu'
    // given that you call it in you theme with:
    //   wp_nav_menu( array( 'menu' => 'Posts Menu' ) );
    // if you call the menu using theme_location, eg:
    //   wp_nav_menu( array( 'theme_location' => 'top_manu' ) );
    // check for:
    //if ($args->menu != 'Posts Menu')
    if ($args->theme_location != 'headpages')
        return $sorted_menu_objects;

    // edit the menu objects
    foreach ($sorted_menu_objects as $menu_object) {
        // searching for menu items linking to posts or pages
        // can add as many post types to the array
        if ( in_array($menu_object->object, array('post', 'page')) ) {
            // set the title to the post_thumbnail if available
            // thumbnail size is the second parameter of get_the_post_thumbnail()
            $menu_object->title = has_post_thumbnail($menu_object->object_id) ?  "<div style=' background-image: url(".get_the_post_thumbnail_url($menu_object->object_id, 'wallsize').")'><h3>".$menu_object->title."</h3></div>" : $menu_object->title;
        }
    }
    return $sorted_menu_objects;
}
?>