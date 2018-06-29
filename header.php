<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
	$post = get_post();
 wp_head() ?>
</head>
<body <?php echo 'class="' . join( ' ', str_replace("custom-background", "", get_body_class())) . '"'; ?>>
	<header class="main-header" style="<?php
		if ( is_home() ) {
			?>
			background-image: url(<?php header_image(); ?>);
			<?php
		}else{
			?>
			background-image: url(<?= the_post_thumbnail_url('pageHeader'); ?>);
			<?php
		}
		?>">
		<?php
			get_template_part( '/inc/meny', 'meny' );
		?>
		</nav>

		  
	</header>
	<?php 
		/*if ( is_front_page() && is_home() ) {
		  echo ' Default homepage';
		} elseif ( is_front_page() ) {
		  echo ' static homepage';
		} elseif ( is_home() ) {
		  echo ' blog page';
		} else {
		  echo 'everything else';
		}*/
	?>