<?php
/*

Template Name: Page intro

*/
get_header(); ?>

    <div class="container">
        <div class="bg-intro">
            <h1><?php the_field('header-intro'); ?></h1>

            <p><?php the_field('content-intro'); ?></p>

            <?php 
                $image = get_field('img');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>

            <ul class="list-pageIntro">
                <li><?php the_field('office'); ?></li>
                <li><?php the_field('address-office'); ?></li>
                <li><?php the_field('phone'); ?></li>
                <li><?php the_field('factory'); ?></li>
            </ul>
        </div>
    </div>

<?php get_footer(); ?>
