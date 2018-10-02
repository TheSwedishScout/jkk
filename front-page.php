<?php 
get_header('home');
?>
<main>
<?php
	
	// meny med bilder
		
		wp_nav_menu(array( 'theme_location' => 'headpages', 'container_id'=> 'images-pages' ));
	// Senaste nyheten

	// Stor knapp till alla händelser

	// Sponsor widget


		?>
	
	
	<div class="latestNews" >
	
	<?php

	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 1,
		'post__in'  => get_option( 'sticky_posts' ),
	);
	$query = new WP_Query( $args );

	if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		?>
		<div class="news">
		<?php
		$query->the_post(); 
		?>
		<h2><a href="<?= the_permalink();?>"> <?= the_title() ?></a></h2>
		<?php
		the_excerpt();
		?>
		</div>
		<a class="readmore button" href="<?= the_permalink(); ?>"><?= __('Läs mer', 'jonkopiongskanotklubb')?></a>
		<?php
		}
	}

	/*

	nästa kår aktivitet (Kalender)
	4 costum cards + avdelningar
	Hyr bastan (Costum card)
	*/

?>
	</div> <!-- latestNews-->
</main>
<?php
get_footer();
?>