<?php 

/*
	Template Name: Page No Title
*/

get_header(); ?>

<div class="row">

	<div class="col-xs-12 col-sm-8">
<?php 

if( have_posts() ):
	
	while( have_posts() ): the_post(); ?>
		
		<h1>C'est min Teutalis Stauticus</h1>

		<small>Posted on: <?php the_time('F j, Y') ?> at <?php the_time('g:i a') ?>, in <?php the_category(); ?></small>

		<p><?php the_content(); ?></p>

		<hr>
<?php	endwhile;

endif;

?>

</div>

<div class="col-xs-12 col-sm-4">
		<?php dynamic_sidebar('sidebar-2'); ?>
	</div>
</div>
<!--Static method of adding sidebar to static pages-->

<?php get_footer(); ?>