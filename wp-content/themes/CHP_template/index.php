<?php 
/*
 Template Name: Home page
 */
get_header(); ?>
    <div class="intro">
        <div class="owl-carousel owl-theme carousel_1">

            <?php if( have_rows('slider_intro') ): ?>
                <?php while( have_rows('slider_intro') ): the_row(); 
                    $image = get_sub_field('slider_1');
                    $picture = $image['sizes']['thumbnail']; 
                    $link = get_sub_field('detail');
                    ?>
                <div class="item">
                    <img id="slider-home"> src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                    <div class="header-intro">
                        <h1><?php the_sub_field('header_intro_1'); ?></h1>

                        <ul class="list-intro">
                            <li><?php the_sub_field('list_intro_1'); ?></li>
                            <li><?php the_sub_field('list_intro_2'); ?></li>
                            <li><?php the_sub_field('list_intro_3'); ?></li>
                        </ul>

                        <a href="<?php echo $link['url'];?>">Chi Tiết</a>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="container">
        <div class="row position-intro1">
            <?php if( have_rows('list_service') ): ?>
                <?php while( have_rows('list_service') ): the_row(); 
                    $image = get_sub_field('img_1');
                    $picture = $image['sizes']['thumbnail']; 
                    $link = get_sub_field('detail_service_1');
                    ?>
                <div class="col-lg-4 col-12">
                    <div class="background-intro">
                        <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                        <div class="content-intro">
                            <h1><?php the_sub_field('header_service_1'); ?></h1>

                            <p><?php the_sub_field('content_service_1'); ?></p>

                            <a href="<?php echo $link['url'];?>">Xem Thêm</a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="row position-intro2">
            <?php if( have_rows('list_service_2') ): ?>
                <?php while( have_rows('list_service_2') ): the_row(); 
                    $image = get_sub_field('img_2');
                    $picture = $image['sizes']['thumbnail']; 
                    $link = get_sub_field('detail_service_2');
                    ?>
                <div class="col-lg-4 col-12">
                    <div class="background-intro">
                        <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                        <div class="content-intro">
                            <h1><?php the_sub_field('header_service_2'); ?></h1>

                            <p><?php the_sub_field('content-service_2'); ?></p>

                            <a href="<?php echo $link['url'];?>">Xem Thêm</a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <div class="col-lg-4 col-12">
                <div class="background-intro2">
                    <?php echo do_shortcode( '[contact-form-7 id="185" title="contact form chp"]' ); ?>
                </div>

                <img class="img-form" src="<?php bloginfo('template_directory') ?>/img/img_31.png">
            </div>
        </div>
    </div>

    <!-- giới thiệu sản phẩm -->
    <div class="background-introProduct">

        <div class="container">
            <h2 class="bg-text">Products</h2>

            <div class="display-bg">
                <p class="text1"><?php echo get_field('product'); ?></p>

                <h1 class="text2"><?php echo get_field('header_product'); ?></h1>

                <div class="owl-carousel owl-theme carousel_2">
                    <?php
                    $vnkings = new WP_Query(array(
                    'post_type'=>'product',
                    'post_status'=>'publish',			
                    'orderby' => 'post_date',
                    'order' => 'ASC',
                    'posts_per_page'=> '12'));
                    ?>
                    <?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
                        <div class="item box-product">
                            <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
                            </a>
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>           
                        </div>
                    <?php endwhile ; wp_reset_query() ;?>
                </div>
            </div>
        </div>
    </div>

    <!-- giới thiệu công ty -->
    <div class="intro-company">
        <h1><?php echo get_field('header_company'); ?></h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12 intro-company2">
                    <p><?php the_field('content_company'); ?></p>    
                    <p><?php the_field('content_company2'); ?></p> 
                    <p><?php the_field('content_company3'); ?></p> 
                    <p><?php the_field('content_company4'); ?></p> 
                    <p><?php the_field('content_company5'); ?></p> 
                </div>

                <div class="col-lg-5 col-12 intro-company3">
                    <?php 
                    $image = get_field('img_company');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- giới thiệu tin tức -->
    <div class="intro-news">
        <div class="container">
            <h2 class="bg-text">News</h2>
                        
            <div class="display-bg">
                <p class="text3"><?php echo get_field('news'); ?></p>
                <h1><?php echo get_field('header_news'); ?></h1>      
                
                <div class="owl-carousel owl-theme carousel_3">
                    <?php
                        $args = array(
                            'post_status' => 'publish',
                            'post_type' => 'post',
                            'posts_per_page' => 6,
                            'order' => 'ASC',
                        );
                    ?>
                    <?php $getposts = new WP_query($args); ?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <div class="item content-introNews">
                        <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('full'); ?></a>
                        <div class="content-introNews2">
                            <p class="text4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                            <p class="text5"><?php the_excerpt(); ?></p>
                            <p class="text6"><a href="<?php the_permalink(); ?>">Xem Thêm</a></p>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>  
                </div>
            </div>
        </div>
    </div>

    <!-- đối tác -->
    <div class="container position-partner">
        <div class="owl-carousel owl-theme carousel_4">
            
            <?php if( have_rows('list_partner') ): ?>
                <?php while( have_rows('list_partner') ): the_row(); 
                    $image = get_sub_field('partner');
                    $link = get_sub_field('link-partner');
                    ?>
                    <a href="<?php echo $link['url'];?>"><img class="item" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>"></a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>




