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
		  	wp_nav_menu(array('menu' => 'main' , 'container_id'=> 'main-menu', 'container' => FALSE, 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li class="empty"></li></ul>' ));

		  	?>
		  	<div>
		  		<a href="http://medlem.jkk.se">medlem<img src="<?= get_template_directory_uri()."/images/user.png"; ?>"> </a> <!-- Något sätt att ändra denna länk behövs-->
		  		
		  	</div>
		  	<div class="social-aria">
			  	<?php 
			  	if (!empty(get_option( 'facebook' ))){
				?>
				<a href="<?=esc_attr( get_option( 'facebook' ) )?>"><img src="<?= get_template_directory_uri()."/images/social/facebook.png"; ?>"></a>
				<?php
				
			}
			if (!empty(get_option( 'instagram' ))){
				?>
				<a href="<?=esc_attr( get_option( 'instagram' ) )?>"> <img src="<?= get_template_directory_uri()."/images/social/instagram.png"; ?>"></a> 
				<?php
				
			}
			if (!empty(get_option( 'twitter' ))){
				?>
				<a href="<?=esc_attr( get_option( 'twitter' ) )?>"> <img src="<?= get_template_directory_uri()."/images/social/twitter.png"; ?>"></a> 
				<?php
				
			}
			if (!empty(get_option( 'googleplus' ))){
				?>
				<a href="<?=esc_attr( get_option( 'googleplus' ) )?>"> <img src="<?= get_template_directory_uri()."/images/social/google plus.png"; ?>"></a> 
				<?php
				
			}
			if (!empty(get_option( 'youtube' ))){
				?>
				<a href="<?=esc_attr( get_option( 'youtube' ) )?>"> <img src="<?= get_template_directory_uri()."/images/social/youtube.png"; ?>"></a> 
				<?php
				
			}
			?>
		  	</div>
		</nav>
	</div>
	