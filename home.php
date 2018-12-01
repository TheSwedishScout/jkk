<?php 
get_header();
?>
<main>
	<?php 
	$our_title = get_the_title( get_option('page_for_posts', true) );
	
	?>
	<h1 class="heading"><?= $our_title; ?></h1>
<div class="blogPosts">
<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
		
		?>
		<article>
		<h2 class="heading"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php
		  //echo ' blog page';
		  ?>
			<?php

		  if(has_post_thumbnail()){
		  	the_post_thumbnail('wallsize');
		  	//echo "string";
		  } 
		  
		?>
		  	<div class="exerpt blog">
				<?= the_excerpt();?>
			</div>
			<a class="readmore button" href="<?= the_permalink(); ?>"><?= __('Läs mer', 'jonkopiongskanotklubb')?></a>
		
		<footer>
			<?php the_date( '', ' ', '', true ); ?>
		</footer>
		</article>
		<?php
	} // end while
} // end if
?>
</div>
</main>
<?php
get_footer();
?>