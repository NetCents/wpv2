<?php
/*
Plugin Name: NetCents Gateway
Plugin URI: https://github.com/NetCents/WordpressPlugin
Description: Net-Cents Woocommerce Payment Gateway. If you haven't set up your account please start here : <a>http://merchant.net-cents.com</a>
Version: 1.1.1
Author: NetCents
Author URI: http://net-cents.com
*/

//Additional links on the plugin page
add_filter( 'plugin_row_meta', 'nc_gateway_register_plugin_links', 10, 2 );
function nc_gateway_register_plugin_links($links, $file) {
	$base = plugin_basename(__FILE__);
	if ($file == $base) {

	}
	return $links;
}

/* WooCommerce fallback notice. */
function nc_gateway_plugin_dependencies() {
    echo '<div class="error"><p>' . sprintf( __( 'WooCommerce Net-Cents Gateways depends on the last version of %s to work!', 'nc' ), '<a href="http://wordpress.org/extend/plugins/woocommerce/">WooCommerce</a>' ) . '</p></div>';
}

/* Load functions. */
function nc_gateway_load() {
    if ( ! class_exists( 'WC_Payment_Gateway' ) ) {
        add_action( 'admin_notices', 'nc_gateway_plugin_dependencies' );
        return;
    }

    function nc_gateway_add_gateway( $methods ) {
        $methods[] = 'NC_Widget_Payment_Gateway';
        return $methods;
    }
	add_filter( 'woocommerce_payment_gateways', 'nc_gateway_add_gateway' );


    // Include the WooCommerce Custom Payment Gateways classes.
    require_once plugin_dir_path( __FILE__ ) . 'widget/class-wc-netcents_gateway_widget.php';
}

add_action( 'plugins_loaded', 'nc_gateway_load', 0 );



/* Adds custom settings url in plugins page. */
function nc_gateway_action_links( $links ) {
    $settings = array(
		'settings' => sprintf(
		'<a href="%s">%s</a>',
		admin_url( 'admin.php?page=woocommerce_settings&tab=payment_gateways' )
		)
    );

    return array_merge( $settings, $links );
}
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'nc_gateway_action_links' );


?>
