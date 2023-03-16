add_filter( 'dokan_withdraw_methods', 'wp1923_change_whithdraw_callback', 12 );

function wp1923_change_whithdraw_callback( $methods ) {

	$methods['bank']['callback'] = 'wp12232_render_bank_html';
	$methods ['bank']['title'] = __( 'Bank Transfer', 'dokan-lite' ); //title can be changed as per your need

	return $methods;
}

function wp12232_render_bank_html( $store_settings ) {
    $account_name   = isset( $store_settings['payment']['bank']['ac_name'] ) ? $store_settings['payment']['bank']['ac_name'] : '';
    $account_number = isset( $store_settings['payment']['bank']['ac_number'] ) ? $store_settings['payment']['bank']['ac_number'] : '';
    $bank_name      = isset( $store_settings['payment']['bank']['bank_name'] ) ? $store_settings['payment']['bank']['bank_name'] : '';
    $bank_addr      = isset( $store_settings['payment']['bank']['bank_addr'] ) ? $store_settings['payment']['bank']['bank_addr'] : '';
    $routing_number = isset( $store_settings['payment']['bank']['routing_number'] ) ? $store_settings['payment']['bank']['routing_number'] : '';
    $iban           = isset( $store_settings['payment']['bank']['iban'] ) ? $store_settings['payment']['bank']['iban'] : '';
    $swift_code     = isset( $store_settings['payment']['bank']['swift'] ) ? $store_settings['payment']['bank']['swift'] : '';

    // Get new added values like other one
    
    ?>
    <div class="dokan-form-group">
        <div class="dokan-w8">
            <input name="settings[bank][ac_name]" value="<?php echo esc_attr( $account_name ); ?>" class="dokan-form-control" placeholder="<?php esc_attr_e( 'Your bank account name', 'dokan-lite' ); ?>" type="text">
        </div>
    </div>

    <div class="dokan-form-group">
        <div class="dokan-w8">
            <input name="settings[bank][ac_number]" value="<?php echo esc_attr( $account_number ); ?>" class="dokan-form-control" placeholder="<?php esc_attr_e( 'Your bank account number', 'dokan-lite' ); ?>" type="text">
        </div>
    </div>

    <div class="dokan-form-group">
        <div class="dokan-w8">
            <input name="settings[bank][bank_name]" value="<?php echo esc_attr( $bank_name ); ?>" class="dokan-form-control" placeholder="<?php esc_attr_e( 'Name of your bank', 'dokan-lite' ) ?>" type="text">
        </div>
    </div>

    <div class="dokan-form-group">
        <div class="dokan-w8">
            <input value="<?php echo esc_attr( $swift_code ); ?>" name="settings[bank][swift]" class="dokan-form-control" placeholder="<?php esc_attr_e( 'Swift code', 'dokan-lite' ); ?>" type="text">
        </div>
    </div> <!-- .dokan-form-group -->

    <!-- add whatever you want -->
    <?php
}
