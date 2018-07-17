<?php 
get_header();
?>
<main>
<?php

		//
		// Post Content here
		
		?>
		<article>
		<?php
		if ( is_home() ) {
		  //echo ' blog page';
		  ?><div class="exerpt">
			<?= the_excerpt();?>
			</div>
			<?php

		  if(has_post_thumbnail()){
		  	the_post_thumbnail('wallsize');
		  	//echo "string";
		  } 
		  else{
		  	echo("<div>image</div>");
		  }
		} else {
		  //normal page
		  ?><div class="exerpt">
			<?= the_content();?>
			</div><?php
		}
		?>
		
		<footer>
			<?php the_author_link(); the_date( '', ' ', '', true ); ?>
		</footer>
		</article>
		<?php

?>
	<div>
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		    <ul id="sidebar">
		        <?php dynamic_sidebar( 'sidebar-1' ); ?>
		    </ul>
		<?php endif; ?>
	</div>
</main>
<?php
get_footer();
?>