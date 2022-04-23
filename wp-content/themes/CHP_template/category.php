<?php
/*
 Template Name: Tin tuc page
*/
get_header(); ?>
    <div class="container background-news">
        <h1 class="text-news"><?php echo get_field('header_news') ?></h1>

        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="background-news2">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php
                    if (get_query_var('paged')) {
                        $paged = get_query_var('paged');
                    } elseif (get_query_var('page')) { // 'page' is used instead of 'paged' on Static Front Page
                        $paged = get_query_var('page');
                    } else {
                        $paged = 1;
                    }
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $loop = new WP_Query(
                        array(
                            'post_type' => 'post',
                            'posts_per_page' => get_option('posts_per_page'),
                            'paged' => $paged,                       
                            'post_status' => 'publish',
                            'orderby' => 'dsc',
                            'orderby' => 'date' // modified | title | name | ID | rand
                        )
                    );
                    ?>  
                    <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
                        <div class="content-introNews content-news">
                            <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('full'); ?></a>
                            <div class="content-introNews2">
                                <p class="text4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                <p class="text5"><?php the_excerpt(); ?></p>
                                <p class="text6"><a href="<?php the_permalink(); ?>">Xem Thêm</a></p>
                            </div>
                        </div>
                    <?php endwhile; ?>               
   
                </div>

                <?php if ($loop->max_num_pages > 1) : // custom pagination  ?>
                <div class="pagination">
                    <?php
                        $orig_query = $wp_query; // fix for pagination to work
                        $wp_query = $loop;
                        $big = 999999999;
                        echo paginate_links(array(
                            'base' => str_replace($big, '%#%', get_pagenum_link($big)),
                            'format' => '?paged=%#%',
                            'prev_text'    => __('« Trang trước'),
                            'next_text'    => __('Trang sau »'),
                            'current' => max(1, get_query_var('paged')),
                            'total' => $wp_query->max_num_pages
                        ));
                    $wp_query = $orig_query; // fix for pagination to work ?>
                </div>
            <?php endif; ?>
            <?php wp_reset_postdata();
                else : echo '<p>' . __('Sorry, no posts matched your criteria.') . '</p>';
                endif; ?>
  
        <?php endwhile; ?>
    <?php endif; ?>
                

            </div>

            <div class="col-lg-4 col-12">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>