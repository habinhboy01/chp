<?php get_header(); ?>
    <div class="container background-news">
        <h1 class="text-news"><?php the_title(); ?></h1>

        <p class="text-news3"><i class="fas fa-calendar"></i> Ngày đăng: <?php echo get_the_date(); ?> </p>

        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="news-single">  
                    <?php the_content(); ?>
                </div>

                <div class="background-comment">
                    <h2>Viết bình luận</h2>
                    <?php echo do_shortcode( '[contact-form-7 id="191" title="comment"]' ); ?>
                </div>
            </div>

            <div class="col-lg-4 col-12">  
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>