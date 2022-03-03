<div class="row row-small" style="padding-top:20px;">
	<div class="large-5 col small-12">
	<?php
		/**
		 * woocommerce_before_single_product_summary hook
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>
	</div>
	<div class="col large-7 small-12">
		<?php echo do_shortcode('[ux_product_title]'); ?>
		<div class="row row-small">
			<div class="product-info summary large-8 col entry-summary small-12">				
				<?php echo do_shortcode('[ux_product_price]'); ?>
				<?php echo '<strong>Mã sản phẩm: </strong>'.do_shortcode('[wc_sku]'); ?>
				<?php echo do_shortcode('[product_additional_information]'); ?>
			</div>
			<div class="col large-4 small-12">
				<?php echo do_shortcode('[ux_product_add_to_cart]'); ?>
				<div style="clear:both; height:20px; width:100%;"></div>
				<?php echo do_shortcode('[block id="ho-tro-truc-tuyen"]'); ?>
				<?php //echo do_shortcode('[ux_product_excerpt]'); ?>
			</div>
		</div>
	</div>
	
	<div id="product-sidebar" class="mfp-hide">
		<div class="sidebar-inner">
			<?php
				do_action('flatsome_before_product_sidebar');
				/**
				 * woocommerce_sidebar hook
				 *
				 * @hooked woocommerce_get_sidebar - 10
				 */
				if (is_active_sidebar( 'product-sidebar' ) ) {
					dynamic_sidebar('product-sidebar');
				} else if(is_active_sidebar( 'shop-sidebar' )) {
					dynamic_sidebar('shop-sidebar');
				}
			?>
		</div>
	</div>

</div>
</div>

<div class="product-footer">
<div class="container">
		<?php
			/**
			 * woocommerce_after_single_product_summary hook
			 *
			 * @hooked woocommerce_output_product_data_tabs - 10
			 * @hooked woocommerce_upsell_display - 15
			 * @hooked woocommerce_output_related_products - 20
			 */
			do_action( 'woocommerce_after_single_product_summary' );
		?>
</div>