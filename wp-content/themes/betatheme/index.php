<?php get_header(); ?>

<div class="row">

	<div class="col-xs-12 col-sm-8">
	<?php 

	if( have_posts() ):
		
		while( have_posts() ): the_post(); 
		//while( have_posts() ): the_post(); echo 'THIS IS THE FORMAT: '.get_post_format(); // GET Format Example 
		?>
			
			<?php get_template_part('content', get_post_format()); //Looks for content-aside, content-picture, or content-video  ?>


	<?php endwhile;

	endif;
	
	?>

	</div>
	
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>