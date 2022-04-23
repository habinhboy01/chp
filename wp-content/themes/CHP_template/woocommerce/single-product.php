<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
	<div class="container">

			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>

				<?php wc_get_template_part( 'content', 'single-product' ); ?>

			<?php endwhile; // end of the loop. ?>

		<?php
			/**
			 * woocommerce_after_main_content hook.
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			do_action( 'woocommerce_after_main_content' );
		?>
	</div>

	<div class="container">
		<div class="connection-product">

            <h2>Sản phẩm tương tự</h2>


                <p class="text1"><?php echo get_field('product'); ?></p>

                <h1 class="text2"><?php echo get_field('header_product'); ?></h1>

                <div class="owl-carousel owl-theme carousel_5">
                    <?php
                    $vnkings = new WP_Query(array(
                    'post_type'=>'product',
                    'post_status'=>'publish',			
                    'orderby' => 'post_date',
                    'order' => 'ASC',
                    'posts_per_page'=> '12'));
                    ?>
                    <?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
                        <div class="item box-product box-product1">
                            <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
                            </a>
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <p><?php echo $product->get_price_html(); ?></p>               
                        </div>
                    <?php endwhile ; wp_reset_query() ;?>
                </div>

 	
		</div>
	</div>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
