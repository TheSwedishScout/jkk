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
		
		
		</article>
		<?php

?>

</main>
<?php
get_footer();
?>