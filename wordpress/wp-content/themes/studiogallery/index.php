<?php get_header(); ?>



	<?php $shortname = "studio_gallery"; ?>

	

	<?php if(get_option($shortname.'_disable_slideshow','') != "Yes") { ?>

	

		<section id="slideshow_cont">

			<div id="slideshow">



				<?php

				$slider_arr = array();

				$x = 0;



				$args = array(

					 'post_type' => 'post',

					 'meta_key' => 'ex_show_in_slideshow',

					 'meta_value' => 'Yes',

					 'posts_per_page' => 10

					 );

				query_posts($args);

				while (have_posts()) : the_post(); ?>                        

			

					<?php if($x == 0) { ?>

						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('slide-image',array('class' => 'first_slide_img')); ?></a>

					<?php } else { ?>

						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('slide-image',array('class' => 'slide image')); ?></a>

					<?php } ?>



				<?php array_push($slider_arr,get_the_ID()); ?>

				<?php $x++; ?>

				<?php endwhile; ?>

				<?php wp_reset_query(); ?>                                    			

				

			</div><!--//slideshow-->

			

			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow-prev.png" class="slide_prev" alt="prev" />

			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow-next.png" class="slide_next" alt="next" />

		</section><!--//slideshow_cont-->

		

	<?php } ?>

	

	

	

	<section id="content">

	

		<?php

		$category_ID = get_category_id('blog');



		$args = array(

			 'post_type' => 'post',

			 'posts_per_page' => 8,

			 'post__not_in' => $slider_arr,

			 //'cat' => '-' . $category_ID,

			 //'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)

		 );

		query_posts($args);

		$x = 0;

		while (have_posts()) : the_post(); ?>                        		

		

			<?php if($x == 0) { ?>

			<div class="home_wide_box">

			<?php } elseif($x == 1) { ?>

			<div class="home_wide_box home_wide_box_last">

			<?php } ?>

			

			<?php if($x == 0 || $x == 1) { ?>

				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

				<p><?php echo ds_get_excerpt('140'); ?></p>

				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-wide-image'); ?></a>

			</div><!--//home_wide_box-->	

			<?php } ?>

			

			

			<?php if($x == 2 || $x == 4) { ?>

			

			<?php if($x == 2) { ?>

			<div class="home_tall_box">

			<?php } elseif($x == 4) { ?>

			<div class="home_tall_box home_tall_box_last">

			<?php } ?>

				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-tall-image'); ?></a>

				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

				<p><?php echo ds_get_excerpt('40'); ?></p>

			</div><!--//home_tall_box-->			

			<?php } ?>

			

			<?php if($x == 3) { ?>

				<div class="home_tall_center">

					<div class="home_featured_text_cont">

						<div class="home_featured_text">

							<?php echo stripslashes(stripslashes(get_option($shortname.'_home_featured_text','We are passionate london based designers, focused on visual and artistic design with passion for simplicity and minimalism.'))); ?>

						</div><!--//home_featured_text-->

					</div><!--//home_featured_text_cont-->

					

					<div class="home_post_box home_post_box_last">

						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-small-image'); ?></a>

						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

						<p><?php echo ds_get_excerpt('40'); ?></p>

					</div><!--//home_post_box-->

				</div><!--//home_tall_center-->

			<?php } ?>

			

			<?php if($x == 5 || $x == 6 || $x == 7) { ?>

			

				<?php if($x == 7) { ?>

				<div class="home_post_box home_post_box_last">

				<?php } else { ?>

				<div class="home_post_box">

				<?php } ?>

					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-small-image'); ?></a>

					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

					<p><?php echo ds_get_excerpt('80'); ?></p>

				</div><!--//home_post_box-->					

			<?php } ?>

		

			<?php if($x == 1 || $x == 4 || $x ==7) { ?>

				<div class="clear"></div>

			<?php } ?>

		

		<?php $x++; ?>

		<?php endwhile; ?>        			

		

		<div class="clear"></div>

		

	</section><!--//content-->

	

<?php get_footer(); ?>            	