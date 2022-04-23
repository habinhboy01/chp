<?php
/*
 *Template Name: intro projects 1
 * Template Post Type: post
 */
 get_header(); ?>
 	<div class="container bg-intro-projects">
 		<div class="row">
 			<div class="col-lg-8 col-12">
 				<div class="bg-intro-projects2">
			 		<h1><?php echo get_field('header'); ?></h1>

			 		<p><?php echo the_field('content1'); ?></p>

			 		<p><?php echo the_field('content2'); ?></p>

			 		<p><?php echo the_field('content3'); ?></p>

			 		<div class="row">
			 			<?php if( have_rows('list_img1') ): ?>
			                <?php while( have_rows('list_img1') ): the_row(); 
			                    $image = get_sub_field('img');
			                    $picture = $image['sizes']['thumbnail']; 
			                    ?>
			                <div class="col-lg-3 col-6">
			                    <div class="">
			                        <img class="img_intro1" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
			                    </div>
			                </div>
			                <?php endwhile; ?>
			            <?php endif; ?>
			 		</div>

			 		 <div class="owl-carousel owl-theme carousel_6">

			            <?php if( have_rows('carousel') ): ?>
			                <?php while( have_rows('carousel') ): the_row(); 
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