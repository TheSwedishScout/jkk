
<footer>
	<div>Kontakt vänster</div>
	<div>
		<?php if ( is_active_sidebar( 'action' ) ) : ?>
	    <div class="action-btn">
	        <?php dynamic_sidebar( 'action' ); ?>
	    </div>
		<?php endif; ?>
	</div>
	<div class="social-aria"><?php
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

	?></div>
	
	<div>Copy text höger</div>
</footer>

<?php
wp_footer();
?>
</body>
</html>