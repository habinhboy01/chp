<?php
/*

Template Name: partner

*/
get_header(); ?>
    <div class="container">
        <div class="bg-partner">
            <h1 class="text-news"><?php echo get_field('header') ?></h1>

            <div class="row">
                <div class="col-lg-8 col-12 bg-partner2">
                    <?php if( have_rows('list-partner') ): ?>
                        <?php while( have_rows('list-partner') ): the_row(); 
                            $image = get_sub_field('img-partner');
                            $link = get_sub_field('link-partner');
                            ?>
                            <a href="<?php echo $link['url'];?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>"></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div class="col-lg-4 col-12">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>