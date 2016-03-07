<?php get_header(); ?>

<?php 

if( have_posts() ):
	
	while( have_posts() ): the_post(); 
	//while( have_posts() ): the_post(); echo 'THIS IS THE FORMAT: '.get_post_format(); // GET Format Example 
	?>
		
		<?php get_template_part('content', get_post_format()); //Looks for content-aside, content-picture, or content-video  ?>


<?php endwhile;

endif;

?>

<?php get_footer(); ?>