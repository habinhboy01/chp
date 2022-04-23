<?php
/*
 *Template Name: intro projects 3
 * Template Post Type: post
 */
 get_header(); ?>
 	<div class="container bg-intro-projects">
 		<div class="row">
 			<div class="col-lg-8 col-12">
 				<div class="bg-intro-projects2">
			 		<h1><?php echo get_field('header'); ?></h1>

			 		<p><?php echo the_field('content'); ?></p>

			 		 <div class="owl-carousel owl-theme carousel_6">

			            <?php if( have_rows('content_img') ): ?>
			                <?php while( have_rows('content_img') ): the_row(); 
			                    $image = get_sub_field('img');
			                    $picture = $image['sizes']['thumbnail']; 
			                    ?>
			                <div class="item">
			                    <img id="img_intro2" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

			                </div>
			                <?php endwhile; ?>
			            <?php endif; ?>
			        </div>
			    </div>
		    </div>

		    <div class="col-lg-4 col-12">
                <?php get_sidebar(); ?>
            </div>
		</div>
 	</div>

<?php get_footer(); ?>