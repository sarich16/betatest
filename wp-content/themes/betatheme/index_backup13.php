<?php get_header(); ?>

<div class="row">

	<div class="col-sm-8 col-xs-12 ">

		<div class="row text-center no-margin">
		
	<?php 
	$currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array('post_per_page' => 3, 'paged' => $currentPage);
	query_posts($args);
	if( have_posts() ): $i = 0;
		
		while( have_posts() ): the_post(); ?>
		<!--while( have_posts() ): the_post(); echo 'THIS IS THE FORMAT: '.get_post_format(); // GET Format Example -->
		
			
			<?php
				if($i==0): $column = 12; 
				elseif($i > 0 && $i <= 2): $column = 6; $class = ' second-row-padding';
				elseif($i > 2): $column = 4; $class = ' thrid-row-padding';
				endif;
			?>

			<div class="col-xs-<?php echo $column; echo $class; ?> blog-item">
					<?php if( has_post_thumbnail() ): 
						$urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
					endif; ?>				
				<div class="blog-element" style="background-image: url(<?php echo $urlImg; ?>);">


					<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>

					<small><?php the_category(' '); ?></small>
				</div>
			</div>

				<!--<?php //get_template_part('content', 'blog'); Refactorization?> 

			<?php// get_template_part('content', get_post_format()); Looks for content-aside, content-picture, or content-video  ?>-->


	<?php $i++; endwhile; ?>
	<!--Placed before endif, still dosen't work-->
	<div class="col-xs-6 text-left">
		<?php next_post_link('« Older Posts'); ?>
	</div>
	<div class="col-xs-6 text-right">
		<?php previous_post_link('Newer Posts »'); ?>
	</div>
		
	

	<?php endif;
		wp_reset_query();
	?>
	</div>

	</div>
	
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>

</div>

	<?php get_footer(); ?>