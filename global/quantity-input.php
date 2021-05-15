<div class="quantity">   
    <input
        type="number"
        id="<?php echo esc_attr( $input_id ); ?>"
        class="input-text qty text"
        step="<?php echo esc_attr( $step ); ?>"
        min="<?php echo esc_attr( $min_value ); ?>"
        max="<?php echo esc_attr( 0 < $max_value ? $max_value : '' ); ?>"
        name="<?php echo esc_attr( $input_name ); ?>"
        value="<?php echo esc_attr( $input_value ); ?>"
        title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'woocommerce' ); ?>"
        size="4"
        pattern="<?php echo esc_attr( $pattern ); ?>"
        inputmode="<?php echo esc_attr( $inputmode ); ?>"
        aria-labelledby="<?php echo esc_attr( $labelledby ); ?>" />
	<div class="increase">	
		<img class="qty_button plus" src="<?php echo get_stylesheet_directory_uri(); ?>/global/plus.png">		
		<img class="qty_button minus" src="<?php echo get_stylesheet_directory_uri(); ?>/global/minus.png">
	</div>
</div>