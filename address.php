function divi_engine_remove_required_fields_checkout( $fields ) {
$fields['billing_address_1']['required'] = false;
$fields['billing_address_2']['required'] = false;
$fields['billing_city']['required'] = false;
$fields['billing_state']['required'] = false;
$fields['billing_country']['required'] = false;
$fields['billing_postcode']['required'] = false;
$fields['billing_country']['required'] = false;
return $fields;
}
add_filter( 'woocommerce_billing_fields', 'divi_engine_remove_required_fields_checkout');