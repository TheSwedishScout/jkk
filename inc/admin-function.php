<?php
function jkk_max_admin_page(){
	add_menu_page( "Theme settings", "Socialmedia", "manage_options", "jkk_max", 'jkk_max_theme_create_page', '', 110 );
	//add_submenu_page( 'jkk_max', 'Theme options', 'generaloptions', 'manage_options', 'jkk_max_options', 'jkk_max_theme_create_page');
	//add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, '' );
	add_action( 'admin_init', 'jkk_max_cusom_settings' );
}
add_action( 'admin_menu', 'jkk_max_admin_page' );

function jkk_max_cusom_settings(){

	//Social
	register_setting( 'jkk_settings_group_social', 'Facebook' );
	register_setting( 'jkk_settings_group_social', 'Instagram' );
	register_setting( 'jkk_settings_group_social', 'Twitter' );
	register_setting( 'jkk_settings_group_social', 'Googleplus' );
	register_setting( 'jkk_settings_group_social', 'YouTube' );
	register_setting( 'jkk_settings_group_social', 'Medlem' );
	add_settings_section( 'sofia-max-social-media', 'Sociala medier', 'jkk_max_sociala_medier_options', 'jkk_max' );
	add_settings_field( 'facebook-link', 'Facebook', 'jkk_max_insert_social_media', 'jkk_max', 'sofia-max-social-media', array( 'for' => 'Facebook', 'type'=>"text" ));
	add_settings_field( 'instagram-link', 'Instagram', 'jkk_max_insert_social_media', 'jkk_max', 'sofia-max-social-media', array( 'for' => 'Instagram', 'type'=>"text" ));
	add_settings_field( 'twitter-link', 'Twitter', 'jkk_max_insert_social_media', 'jkk_max', 'sofia-max-social-media', array( 'for' => 'Twitter', 'type'=>"text" ));
	add_settings_field( 'googleplus-link', 'Googleplus', 'jkk_max_insert_social_media', 'jkk_max', 'sofia-max-social-media', array( 'for' => 'Googleplus', 'type'=>"text" ));
	add_settings_field( 'youtube-link', 'YouTube', 'jkk_max_insert_social_media', 'jkk_max', 'sofia-max-social-media', array( 'for' => 'YouTube', 'type'=>"text" ));
	add_settings_field( 'medlem-link', 'Medlem', 'jkk_max_insert_social_media', 'jkk_max', 'sofia-max-social-media', array( 'for' => 'Medlem', 'type'=>"text" ));



}

function jkk_max_sociala_medier_options()
{
	echo "Länkar till sociala medier som klubben använder";
}

function jkk_max_insert_social_media($args){
	$info = esc_attr( get_option( $args['for'] ) );
	?>
	<input type="text" name="<?= $args['for'] ?>" placeholder="<?= $args['for'] ?> link" value="<?= $info; ?>">
	<?php
}


function jkk_max_theme_create_page(){
	?>
	<h1>Theme Options</h1>
	<?php settings_errors(); ?>
	<form method="POST" action="options.php">
		<?php
			settings_fields( 'jkk_settings_group_social' );
			do_settings_sections( "jkk_max" );
			submit_button();
		 ?>
		
	</form>
	<?php
}
?>