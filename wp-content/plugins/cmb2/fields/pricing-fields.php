<?php
add_action( 'cmb2_admin_init', 'cmb2_page_pricing' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_page_pricing() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_pricing_';

$cmb = new_cmb2_box( array(
    'id'           => 'main_pricing',
    'title'        => 'About Pricing',
    'object_types' => array( 'page' ), // post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'page-pricing.php' ),
    'context'      => 'normal', //  'normal', 'advanced', or 'side'
    'priority'     => 'default',  //  'high', 'core', 'default' or 'low'
    'show_names'   => true, // Show field names on the left
) );

$group_field_id = $cmb->add_field( array(
	'id'          => 'wiki_test_repeat_group',
	'type'        => 'group',
	'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( '', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		// 'closed'     => true, // true to have the groups closed by default
	),
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Pricing Title',
	'id'   => 'pricing-title',
	'type' => 'text',
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Pricing Info',
	'id'   => 'pricing-info',
	'type' => 'text',
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Savings Title',
	'id'   => 'savings-title',
	'type' => 'text',
) );

};

//====================================================================

add_action( 'cmb2_admin_init', 'cmb2_page_pricing_2' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_page_pricing_2() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_pricing_2_';

$cmb = new_cmb2_box( array(
    'id'           => 'main_pricing_2',
    'title'        => 'Savings',
    'object_types' => array( 'page' ), // post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'page-pricing.php' ),
    'context'      => 'normal', //  'normal', 'advanced', or 'side'
    'priority'     => 'default',  //  'high', 'core', 'default' or 'low'
    'show_names'   => true, // Show field names on the left
) );

$group_field_id = $cmb->add_field( array(
	'id'          => 'wiki_test_repeat_group_2',
	'type'        => 'group',
	// 'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( 'Saving Categories {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		'closed'     => true, // true to have the groups closed by default
	),
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Category',
	'id'   => 'category-pricing',
	'type' => 'text',
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Our Price',
	'id'   => 'our-price-pricing',
	'type' => 'text',
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Their Price',
	'id'   => 'their-price-pricing',
	'type' => 'text',
) );
};

//====================================================================
add_action( 'cmb2_admin_init', 'cmb2_page_pricing_3' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_page_pricing_3() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_pricing_3_';

$cmb = new_cmb2_box( array(
    'id'           => 'main_pricing_3',
    'title'        => 'Insurance',
    'object_types' => array( 'page' ), // post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'page-pricing.php' ),
    'context'      => 'normal', //  'normal', 'advanced', or 'side'
    'priority'     => 'default',  //  'high', 'core', 'default' or 'low'
    'show_names'   => true, // Show field names on the left
) );

$group_field_id = $cmb->add_field( array(
	'id'          => 'wiki_test_repeat_group_3',
	'type'        => 'group',
	'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( '', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		'closed'     => true, // true to have the groups closed by default
	),
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Insurance Title',
	'id'   => 'insurance-title-pricing',
	'type' => 'text',
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Insurance Info',
	'id'   => 'insurance-info-pricing',
	'type' => 'text',
	'type' => 'textarea_small',
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Search Bar Message',
	'id'   => 'search-bar-message-pricing',
	'type' => 'text',
) );

};

//====================================================================
//Payments
add_action( 'cmb2_admin_init', 'cmb2_page_pricing_4' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_page_pricing_4() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_pricing_4_';

$cmb = new_cmb2_box( array(
    'id'           => 'main_pricing_4',
    'title'        => 'Payment',
    'object_types' => array( 'page' ), // post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'page-pricing.php' ),
    'context'      => 'normal', //  'normal', 'advanced', or 'side'
    'priority'     => 'default',  //  'high', 'core', 'default' or 'low'
    'show_names'   => true, // Show field names on the left
) );

$group_field_id = $cmb->add_field( array(
	'id'          => 'wiki_test_repeat_group_4',
	'type'        => 'group',
	'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( '', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		'closed'     => true, // true to have the groups closed by default
	),
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Payment Methods Title',
	'id'   => 'payment-methods-pricing',
	'type' => 'text',
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Payments Not Accepted',
	'id'   => 'payments-not-pricing',
	'type' => 'text',
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Payments Accepted',
	'id'   => 'payments-pricing',
	'type' => 'text',
	'type' => 'textarea_small',
) );
};

//====================================================================
//Payments Images
add_action( 'cmb2_admin_init', 'cmb2_page_pricing_5' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_page_pricing_5() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_pricing_5_';

$cmb = new_cmb2_box( array(
    'id'           => 'main_pricing_5',
    'title'        => 'Payment Card Images',
    'object_types' => array( 'page' ), // post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'page-pricing.php' ),
    'context'      => 'normal', //  'normal', 'advanced', or 'side'
    'priority'     => 'default',  //  'high', 'core', 'default' or 'low'
    'show_names'   => true, // Show field names on the left
) );

$group_field_id = $cmb->add_field( array(
	'id'          => 'wiki_test_repeat_group_5',
	'type'        => 'group',
	// 'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( 'Card {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		'closed'     => true, // true to have the groups closed by default
	),
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Payments Cards',
	'id'   => 'payments-cards-pricing',
	'type' => 'file',
) );
};

//====================================================================
//Discounts
add_action( 'cmb2_admin_init', 'cmb2_page_pricing_6' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_page_pricing_6() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_pricing_6_';

$cmb = new_cmb2_box( array(
    'id'           => 'main_pricing_6',
    'title'        => 'Discounts',
    'object_types' => array( 'page' ), // post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'page-pricing.php' ),
    'context'      => 'normal', //  'normal', 'advanced', or 'side'
    'priority'     => 'default',  //  'high', 'core', 'default' or 'low'
    'show_names'   => true, // Show field names on the left
) );

$group_field_id = $cmb->add_field( array(
	'id'          => 'wiki_test_repeat_group_6',
	'type'        => 'group',
	'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( '', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		'closed'     => true, // true to have the groups closed by default
	),
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Discounts Title',
	'id'   => 'discounts-title-pricing',
	'type' => 'text',
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Discounts Main',
	'id'   => 'discounts-main-pricing',
	'type' => 'text',
	'type' => 'textarea_small',
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Discounts Image',
	'id'   => 'discounts-image-pricing',
	'type' => 'file',
) );
}
?>
