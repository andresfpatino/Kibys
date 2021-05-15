<?php  // [upsells-products]

function shortcode_cross_sells_products(){ 
    ob_start();		

	$upsell_ids = get_post_meta( get_the_ID(), '_upsell_ids' );   
	$upsell_ids = $upsell_ids[0];

	if(count($upsell_ids) > 0) {
		$args = array( 
			'post_type' => 'product', 
			'posts_per_page' => -1, 
			'post__in' => $upsell_ids 
		);			
		$loop = new WP_Query( $args ); ?>

		<div class="upsell_products">
			<h3> Complementa tu look </h3>
			<?php while ( $loop->have_posts() ) : $loop->the_post();	$_product = wc_get_product( get_the_ID() ); ?>
				<div class="upsell_products_wrap">
					<div class="upsell_products_thumbnail">
						<a href='<?php the_permalink(); ?>'>
							<?php 	the_post_thumbnail( 'medium' ); ?>
						</a>				
					</div>
					<div class="upsell_products_content">
						<h2 class="upsell_products_title"> <?php the_title(); ?> </h2>
						<div class="upsell_products_price">
							<?php echo $_product->get_price_html(); ?>
						</div>
						<a class="upsell_products_shopnow" href='<?php the_permalink(); ?>'> Comprar ahora </a>
					</div>
				</div>
			<?php endwhile; ?> 
		</div> <?php
	}		
		
   	$output_string = ob_get_contents();
	ob_end_clean(); 
	return $output_string; 
} 
add_shortcode( 'upsells-products', 'shortcode_cross_sells_products' ); 