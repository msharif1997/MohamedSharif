<?php

/*

	Template Name: Blog

*/

?>

<?php get_header(); ?>



	<?php $shortname = "studio_gallery"; ?>

	

	<section id="content" class="none_home_cont">

	

		<section id="content_left">

		

			<?php

			$args = array(

				 'category_name' => 'blog',

				 'post_type' => 'post',

				 'posts_per_page' => 3,

				 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)

				 );

			query_posts($args);

			while (have_posts()) : the_post(); ?> 

		

				<article class="blog_box">

					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

					

					<p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog-image'); ?></a></p>

					

					<p><?php the_time('F d, Y'); ?></p>

					

					<p><?php echo ds_get_excerpt('370'); ?></p>

					

					<a href="<?php the_permalink(); ?>" class="read_more">Read more...</a>

					<div class="clear"></div>

				</article><!--//blog_box-->

				

			<?php endwhile; ?>

			

			<div class="cat_nav_cont">

				<div class="left"><?php previous_posts_link('[ &lt; ] Previous') ?></div>

				<div class="right"><?php next_posts_link('Next [ &gt; ]') ?></div>

				<div class="clear"></div>

			</div><!--//cat_nav_cont-->			

			

			<?php wp_reset_query(); ?>

		

		</section><!--//content_left-->

		

		<?php get_sidebar(); ?>

		

		<div class="clear"></div>

		

	</section><!--//content-->

	

<?php get_footer(); ?>            	