<?php get_header(); ?>

<div class="row">

		<?php 

			$args_cat = array(
				'include' => '8, 7, 6'
			
			);
			
			$categories = get_categories($args_cat);
			foreach($categories as $category):
			
			$args = array(
				'type' => 'post',
				'posts_per_page' => 1,
				'category__in' => $category->term_id,
				'category__not_in' => array( 9 ),

			);

			$lastBlog = new WP_Query( $args );

			if( $lastBlog->have_posts() ):
		
				while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
			
					<div class="col-xs-12 col-sm-4">

					<?php get_template_part('content', 'featured'); //Looks for content-aside, content-picture, or content-video  ?>

					</div>

				<?php endwhile;

			endif;

			wp_reset_postdata();


			endforeach;


		?>

</div>

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
	
	//PRINT OTHER 2 POSTS, NOT THE FIRST ONE
/*			$args = array(
				'type' => 'post',
				'posts_per_page' => 2,
				'offset' => 1,
			);

			$lastBlog = new WP_Query($args);

			if( $lastBlog->have_posts() ):
		
				while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
			
					<?php get_template_part('content', get_post_format()); //Looks for content-aside, content-picture, or content-video  ?>


				<?php endwhile;

			endif;

			wp_reset_postdata();
			*/
	?>

	<!--<hr>-->

	<?php

	//PRINT ONLY TUTORIALS 
/*				$lastBlog = new WP_Query('type=post&posts_per_page=-1&category_name=tutorials');

			if( $lastBlog->have_posts() ):
		
				while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
			
					<?php get_template_part('content', get_post_format()); //Looks for content-aside, content-picture, or content-video  ?>


				<?php endwhile;

			endif;

			wp_reset_postdata();
*/
	?>

	</div>
	
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>