<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head() ?>
</head>
<body <?php echo 'class="' . join( ' ', str_replace("custom-background", "", get_body_class())) . '"'; ?>>
<header class="main-header">
	
	<?php the_custom_header_markup() ?>
	
	
	<?php 
	get_template_part( '/inc/meny', 'meny' );
	if ( is_active_sidebar( 'action' ) ) : ?>
	    <div class="action-btn">
	        <?php dynamic_sidebar( 'action' ); ?>
	    </div>
	<?php endif; ?>
	<!--<button>action</button>-->
	
</header>
<?php

?>