<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<div class="row" id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<h1 class="text-news">Chi tiết sản phẩm</h1>

	<div class="col-lg-6 col-12">
		<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
		?>
	</div>

	<div class="col-lg-6 col-12 summary entry-summary">
		<h1><?php the_title() ;?></h1>
		<hr>
		<div class="content-product"><?php the_content();?></div>
		<hr>

		<div class="row">
			<div class="col-lg-6 col-12">
				<p class="text9">Giá:</p>
				<p class="text-price"><?php echo number_format($product->get_regular_price());?> VND </p>
				<span class="color-text">
					<?php echo apply_filters( 'woocommerce_loop_add_to_cart_link',
					sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="btn-cart add-cart button %s product_type_%s buynow">Thêm vào giỏ</a>',
					esc_url( $product->add_to_cart_url() ),
					esc_attr( $product->id ),
					esc_attr( $product->get_sku() ),
					$product->is_purchasable() ? 'add_to_cart_button' : '',
					esc_attr( $product->product_type ),
					esc_html( $product->add_to_cart_text() )
					),
					$product ); ?>
				</span>
			</div>

			<div class="col-lg-6 col-12">
				<p class="text9">Số lượng:</p>
				<form enctype="multipart/form-data" method="post" class="cart">
					<div class="quantity"><input type="number" size="4" class="input-text qty text" title="SL" value="1" name="quantity" min="1" step="1"></div>
					<input type="hidden" value="<?php echo $vnid = the_ID(); ?>" name="add-to-cart">
					<button class="add-cart single_add_to_cart_button alt buynow btn-buy" type="submit">Đặt ngay</button>
				</form>
			</div>
		</div>
	</div>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
