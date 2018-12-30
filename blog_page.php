<?php /* Template Name: Blog_Page */ ?>

<?php get_header(); ?>

	<!-- Get "The Loop" and sidebar -->
	<div class="row">

		<div class="col-sm-8 blog-main">

			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile; endif; 
			?>

		</div>

		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>