<?php
add_action( 'cmb2_admin_init', 'cmb2_front_page' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_front_page() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_front_page_';

$cmb = new_cmb2_box( array(
    'id'           => 'info',
    'title'        => 'Who are we?',
    'object_types' => array( 'page' ), // post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'front-page.php' ),
    'context'      => 'normal', //  'normal', 'advanced', or 'side'
    'priority'     => 'default',  //  'high', 'core', 'default' or 'low'
    'show_names'   => true, // Show field names on the left
) );

$group_field_id = $cmb->add_field( array(
	'id'          => 'wiki_test_repeat_group',
	'type'        => 'group',
	'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( 'Banner Img', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		'closed'     => true, // true to have the groups closed by default
	),
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Banner Image',
	'description' => 'Upload an Image',
	'id'   => 'banner-img',
	'type' => 'file',
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Banner Title',
	'description' => 'Title for Banner',
	'id'   => 'banner-subtitle',
	'type' => 'text',
) );


}
//====================================================================
//Why choose GTA Tooth Fairy?

add_action( 'cmb2_admin_init', 'cmb2_front_page_2' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_front_page_2() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_front_page_2_';

$cmb = new_cmb2_box( array(
    'id'           => 'info_2',
    'title'        => 'Why choose us?',
    'object_types' => array( 'page' ), // post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'front-page.php' ),
    'context'      => 'normal', //  'normal', 'advanced', or 'side'
    'priority'     => 'default',  //  'high', 'core', 'default' or 'low'
    'show_names'   => true, // Show field names on the left
) );
$cmb->add_field( array(
	'name' => 'Heading Title ',
	'description' => 'Title Why choose GTA tooth fairy',
	'description' => 'Write Heading title',
	'type' => 'text',
) );
$group_field_id = $cmb->add_field( array(
	'id'          => 'wiki_test_repeat_group_2',
	'type'        => 'group',
	// 'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( 'Reason {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		'closed'     => true, // true to have the groups closed by default
	),
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Image',
	'id'   => 'icon-front',
	'description' => 'Upload an Image',
	'type' => 'file',
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Reason',
	'id'   => 'reason-front',
	'type' => 'text',
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Elaborate',
	'id'   => 'elaborate-front',
	'type' => 'text',
) );
}

//====================================================================
//Who are you?

add_action( 'cmb2_admin_init', 'cmb2_front_page_3' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_front_page_3() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_front_page_3_';

$cmb = new_cmb2_box( array(
    'id'           => 'info_3',
    'title'        => 'Who are you?',
    'object_types' => array( 'page' ), // post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'front-page.php' ),
    'context'      => 'normal', //  'normal', 'advanced', or 'side'
    'priority'     => 'default',  //  'high', 'core', 'default' or 'low'
    'show_names'   => true, // Show field names on the left
) );

$group_field_id = $cmb->add_field( array(
	'id'          => 'wiki_test_repeat_group_3',
	'type'        => 'group',
	// 'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( 'Customer Type {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		'closed'     => true, // true to have the groups closed by default
	),
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Customer Type',
	'id'   => 'customer-front',
	'type' => 'text',
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Customer Type Image',
	'id'   => 'customer-type-image-front',
	'type' => 'file',
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Learn more',
	'id'   => 'learn-button-front',
	'type' => 'text',
) );

}


//====================================================================
//Who are we?

add_action( 'cmb2_admin_init', 'cmb2_front_page_4' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_front_page_4() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_front_page_4_';

$cmb = new_cmb2_box( array(
    'id'           => 'info_4',
    'title'        => 'The Team',
    'object_types' => array( 'page' ), // post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'front-page.php' ),
    'context'      => 'normal', //  'normal', 'advanced', or 'side'
    'priority'     => 'default',  //  'high', 'core', 'default' or 'low'
    'show_names'   => true, // Show field names on the left
) );

$cmb->add_field( array(
	'name' => 'Our Team',
	'id'   => 'team-front',
	'type' => 'text',
) );
$group_field_id = $cmb->add_field( array(
	'id'          => 'wiki_test_repeat_group_4',
	'type'        => 'group',
	'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( 'Members', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		'closed'     => true, // true to have the groups closed by default
	),
) );
$cmb->add_group_field( $group_field_id, array(
	'name' => 'Team Image',
	'id'   => 'team-image-front',
	'description' => 'Upload an Image',
	'type' => 'file',
) );
$cmb->add_group_field( $group_field_id, array(
	'name' => 'team Name',
	'id'   => 'team-name-front',
	'type' => 'text',
) );
$cmb->add_group_field( $group_field_id, array(
	'name' => 'Description',
	'description' => 'Write a short description for this entry',
	'id'   => 'team-description',
	'type' => 'textarea_small',
) );
}


//====================================================================
//Affiliations

add_action( 'cmb2_admin_init', 'cmb2_front_page_5' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_front_page_5() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_front_page_5_';

$cmb = new_cmb2_box( array(
    'id'           => 'info_5',
    'title'        => 'Affiliations',
    'object_types' => array( 'page' ), // post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'front-page.php' ),
    'context'      => 'normal', //  'normal', 'advanced', or 'side'
    'priority'     => 'default',  //  'high', 'core', 'default' or 'low'
    'show_names'   => true, // Show field names on the left
) );

$group_field_id = $cmb->add_field( array(
	'id'          => 'wiki_test_repeat_group_5',
	'type'        => 'group',
	// 'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( 'Affiliations {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		'closed'     => true, // true to have the groups closed by default
	),
) );


$cmb->add_group_field( $group_field_id, array(
	'name' => 'Affiliations',
	'id'   => 'affiliations-image-front',
	'type' => 'file',
) );

}

?>
