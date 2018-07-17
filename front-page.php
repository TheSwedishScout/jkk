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
	<div class="page_post"> 
	<?php
	if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		
		the_content();
		}
	}
		 
	?>
	</div>
	
	<div class="frontpageNotes" >
	
	
	<?php

	$args = array(
		'post_type' => 'front_page',
		'posts_per_page' => 4,
		'post__in'  => get_option( 'sticky_posts' ),
	);
	$query = new WP_Query( $args );

	if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		?>
		<div class="news">
		<?php
		$query->the_post(); 
		echo "<h2><a href ='the_permalink();'>";
		the_title();
		echo "</a></h2>";
		the_content();
		?>
		</div>
		<?php
		}
	}

	/*

	nästa kår aktivitet (Kalender)
	4 costum cards + avdelningar
	Hyr bastan (Costum card)
	*/

?>
	</div> <!-- frontpagenotes-->
	<?php  
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			the_post_thumbnail();
		}
	}
	?>
</main>
<?php
get_footer();
?>