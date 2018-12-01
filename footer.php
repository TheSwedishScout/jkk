<div id="cookie-notification"></div>
<footer class="theme-footer">
	<div class="footer-content">
		
			<div>
				<?php

					$args = array(
						'post_type' => 'sponsors',
						'posts_per_page' => 10,
						'post__in'  => get_option( 'sticky_posts' ),
					);
				$query = new WP_Query( $args );
			?>
				<ul id="footer-sponsors">
				<?php
				if ( $query->have_posts() ) {
					?>
					<h3>Sponsorer</h3>
					<?php
				while ( $query->have_posts() ) {
					?>
					<li class="sponsor">
					<?php
					$query->the_post(); 
					?>
					<a target="_blank" href="<?= get_post_meta(get_the_ID(), 'link')[0]; ?>"> <?= the_post_thumbnail() ?></a>

					</li>
					<?php
					}
				}

					?>
				</ul>
			</div>
			<div class="footer-widget">
				<?php if ( is_active_sidebar( 'contact' ) ) : ?>
			        <?php dynamic_sidebar( 'contact' ); ?>
			    
				<?php endif; ?>
			</div>
			<div class="social-aria"><?php
			if (!empty(get_option( 'facebook' ))){
				?>
				<a target="_blank" href="<?=esc_attr( get_option( 'facebook' ) )?>"><img src="<?= get_template_directory_uri()."/images/social/facebook.png"; ?>"></a>
				<?php
				
			}
			if (!empty(get_option( 'instagram' ))){
				?>
				<a target="_blank" href="<?=esc_attr( get_option( 'instagram' ) )?>"> <img src="<?= get_template_directory_uri()."/images/social/instagram.png"; ?>"></a> 
				<?php
				
			}
			if (!empty(get_option( 'twitter' ))){
				?>
				<a target="_blank" href="<?=esc_attr( get_option( 'twitter' ) )?>"> <img src="<?= get_template_directory_uri()."/images/social/twitter.png"; ?>"></a> 
				<?php
				
			}
			if (!empty(get_option( 'googleplus' ))){
				?>
				<a target="_blank" href="<?=esc_attr( get_option( 'googleplus' ) )?>"> <img src="<?= get_template_directory_uri()."/images/social/google plus.png"; ?>"></a> 
				<?php
				
			}
			if (!empty(get_option( 'youtube' ))){
				?>
				<a target="_blank" href="<?=esc_attr( get_option( 'youtube' ) )?>"> <img src="<?= get_template_directory_uri()."/images/social/youtube.png"; ?>"></a> 
				<?php
				
			}

			?></div>
			
			<div class="copyright">© copyright  Jönköpings kanotklubb 2018 - Theme by <a target="_blank" href="http://max.timje.se">Max Timje</a></div>
	</div>
</footer>
</div>
<?php
wp_footer();
?>
</body>
</html>