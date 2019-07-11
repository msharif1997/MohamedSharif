<?php get_header(); ?>

	<h3 class="top_title">


        <?php if (is_category()) { ?>

              <?php single_cat_title(); ?>

        <?php } elseif( is_tag() ) { ?>

              <?php single_tag_title(); ?>

        <?php } elseif (is_day()) { ?>

              <?php the_time('F jS, Y'); ?>

        <?php } elseif (is_month()) { ?>

              <?php the_time('F, Y'); ?>

        <?php } elseif (is_year()) { ?>

              <?php the_time('Y'); ?>

        <?php } elseif (is_author()) { ?>

              Author Archive

        <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

              Blog Archives

        <?php } ?>   


    </h3>

	<?php $shortname = "studio_gallery"; ?>



	<section id="content" class="none_home_cont">

	

		<?php

		global $wp_query;



		$args = array_merge( $wp_query->query, array( 'posts_per_page' => 9 ) );

		query_posts( $args );        

		$x = 0;

		while (have_posts()) : the_post(); ?>                    		

			

			<?php if($x == 2) { ?>

			<div class="home_tall_box home_tall_box_last">

			<?php } else { ?>

			<div class="home_tall_box">

			<?php } ?>

				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-tall-image'); ?></a>

				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

				<p><?php echo ds_get_excerpt('40'); ?></p>

			</div><!--//home_tall_box-->		

			

			<?php if($x == 2) { echo '<div class="clear"></div>'; $x = -1; } ?>

		

		<?php $x++; ?>

		<?php endwhile; ?>            		

		

		<div class="clear"></div>		

		

		<div class="cat_nav_cont">

			<div class="left"><?php previous_posts_link('[ &lt; ] Previous') ?></div>

			<div class="right"><?php next_posts_link('Next [ &gt; ]') ?></div>

			<div class="clear"></div>

		</div><!--//cat_nav_cont-->

		

	</section><!--//content-->

	

<?php get_footer(); ?>            	