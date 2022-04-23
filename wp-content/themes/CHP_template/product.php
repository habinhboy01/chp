<?php 
/*
 Template Name: page product
 */
get_header(); ?>
    <div class="container page-product">
        <p class="text7"><?php echo get_field('product'); ?></p>
        <h1 class="text8"><?php echo get_field('header_product'); ?></h1>

        <div class="row">
            <?php
                $vnkings = new WP_Query(array(
                'post_type'=>'product',
                'post_status'=>'publish',			
                'orderby' => 'post_date',
                'order' => 'ASC',
                'posts_per_page'=> '12'));
                ?>
                <?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
                    <div class="col-lg-3 col-12 box-product page-product2">
                        <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                        </a>
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <p><?php echo $product->get_price_html(); ?></p>               
                    </div>
            <?php endwhile ; wp_reset_query() ;?>
        </div>
    </div>

<?php get_footer(); ?>