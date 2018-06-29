	<div id="menu-bar">
		<div id="hamburger">
			<div></div>
			<div></div>
			<div></div>
		</div>
		<?php
		the_custom_logo();
		?>
		<nav id="topMeny">
		  <?php 
		  	wp_nav_menu(array('menu' => 'main' , 'container_id'=> 'main-menu' ));
		  	?>
		  	facebook
		  	instagram
		</nav>
	</div>
	