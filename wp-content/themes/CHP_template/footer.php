    <div class="background-footer">

        <?php 
            $image = get_field('background-footer', 'option');
            if( !empty( $image ) ): ?>
                <img class="map-footer" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>

        <div class="container">

            <h4 class="bg-text">Contacts</h4>

            <div class="display-bg">
                <p class="text-footer1"><?php echo get_theme_mod('footer_setting'); ?></p>

                <h1><?php echo get_theme_mod('footer_setting_2'); ?></h1>

                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="content-address">
                            <img src="<?php bloginfo('template_directory') ?>/img/img_30.png" alt="lỗi">

                            <h2><?php echo get_theme_mod('footer_setting_3'); ?></h2>

                            <ul class="list-address">
                                <li><h3><?php echo get_theme_mod('footer_setting_4'); ?></h3><li>
                                <li><p><?php echo get_theme_mod('footer_setting_5'); ?></p><li>
                                <li><h3><?php echo get_theme_mod('footer_setting_6'); ?></h3><li>    
                                <li><p><?php echo get_theme_mod('footer_setting_7'); ?></p><li>   
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="content-address">
                            <img src="<?php bloginfo('template_directory') ?>/img/img_4.png" alt="lỗi">

                            <h2><?php echo get_theme_mod('footer_setting_8'); ?></h2>

                            <ul class="list-address">
                                <li><a href="tel:+0913.804.378"><?php echo get_theme_mod('footer_setting_9'); ?></a><li>
                                <li><p><?php echo get_theme_mod('footer_setting_10'); ?></p><li>    
                                <li><a href="tel:+0913.804.378"><?php echo get_theme_mod('footer_setting_11'); ?></a><li> 
                                <li><a href="tel:+0918031739"><?php echo get_theme_mod('footer_setting_16'); ?></a><li> 
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="content-address">
                            <img src="<?php bloginfo('template_directory') ?>/img/img_29.png" alt="lỗi">

                            <h2><?php echo get_theme_mod('footer_setting_12'); ?></h2>
                            
                            <a class="text-footer2" href="mailto:chp@chp.com.vn"><?php echo get_theme_mod('footer_setting_13'); ?></a>
                            <br>

                            <?php if (have_rows('social-network', 'option')) : ?>
                                <?php while (have_rows('social-network', 'option')) : the_row();
                                    $social_icon = get_sub_field('icon');
                                    $social_link = get_sub_field('link-icon');

                                ?>
                                <a href="<?php echo $social_link; ?>">
                                        <?php echo $social_icon ?>
                                </a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="background-footer2">
        <div class="container">
            <ul class="list-footer">
                <li>
                    <p><?php echo get_theme_mod('footer_setting_14'); ?></p>
                    <p><?php echo get_theme_mod('footer_setting_15'); ?></p>
                </li>

                <li>
                    <?php if( have_rows('img', 'option') ): ?>
                        <?php while( have_rows('img', 'option') ): the_row(); 
                            $image = get_sub_field('img');
                            $link = get_sub_field('link');
                            ?>
                            <a href="<?php echo $link['url'];?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>"></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>

    <a href="#"><img class="button-footer" src="<?php bloginfo('template_directory') ?>/img/img_6.png" alt="lỗi"></a>

<?php wp_footer() ?>    
<!-- Thư Viện jquery -->
<script src="<?php bloginfo('template_directory') ?>/vendor/jquery/jquery-3.6.0.min.js"></script>

<!-- bootstrap -->
<script src="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/js/bootstrap.min.js"></script>

<!-- Thư Viện carousel js -->
<script src="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/owl.carousel.min.js"></script>

<!-- My Js -->
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/style.js"></script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0" nonce="6eVZnThJ"></script>

</body>
</html>