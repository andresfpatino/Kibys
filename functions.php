<?php

// Disable Gutemberg
add_filter('use_block_editor_for_post', '__return_false', 10);

// Disable scripts emoji
require_once(dirname(__FILE__).'/functions/disable_scripts_emoji.php');

// Style - Scripts 
require_once(dirname(__FILE__).'/functions/wp_enqueue_scripts.php');

// Cross sells products
//require_once(dirname(__FILE__).'/shortcodes/cross_sells_products.php');

/* Change text add to cart button in archive products*/
function woo_archive_custom_cart_button_text() { 
	return __( 'Comprar ahora', 'woocommerce' ); 
}
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );   


/* Register sidebar */ 
if ( function_exists('register_sidebar') ) {
	register_sidebar( array(
			'name' => 'Top shop',
			'id' => 'top-shop',
			'before_widget' => '<div class="widget-sidebar">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);
}

/* Remove sorting wrapper */
remove_action( 'woocommerce_before_shop_loop','storefront_sorting_wrapper',31 );

/* Change text related products */
function wps_translate_words_array( $translated ) {
     $words = array(
     	'Related Products' => 'También te podría interesar',  
     );
     $translated = str_ireplace(  array_keys($words),  $words,  $translated );
     return $translated;
}
add_filter(  'gettext',  'wps_translate_words_array');
add_filter(  'ngettext',  'wps_translate_words_array');


// Show sku in cart
function showing_sku_in_cart_items( $item_name, $cart_item, $cart_item_key  ) {
    // The WC_Product object
    $product = $cart_item['data'];
    // Get the  SKU
    $sku = $product->get_sku();

    // When sku doesn't exist
    if(empty($sku)) return $item_name;

    // Add the sku
    $item_name .= '<br><small class="product-sku">' . __( "SKU: ", "woocommerce") . $sku . '</small>';

    return $item_name;
}
add_filter( 'woocommerce_cart_item_name', 'showing_sku_in_cart_items', 99, 3 );