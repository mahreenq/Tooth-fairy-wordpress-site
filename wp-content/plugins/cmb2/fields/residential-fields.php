<?php
add_action( 'cmb2_admin_init', 'cmb2_residential_banner');
/**
* Define the metabox and field configurations.
*/
function cmb2_residential_banner() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_residential3_';

$cmb = new_cmb2_box( array(
   'id'           => 'banner-res',
   'title'        => 'Residential Banner',
   'object_types' => array( 'page' ), // post type
   'show_on'      => array( 'key' => 'page-template', 'value' => 'page-residential.php' ),
   'context'      => 'normal', //  'normal', 'advanced', or 'side'
   'priority'     => 'default',  //  'high', 'core', 'default' or 'low'
   'show_names'   => true, // Show field names on the left
) );

$group_field_id = $cmb->add_field( array(
    'id'          => 'wiki_test_repeat_group',
    'type'        => 'group',
     'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => array(
        'group_title'   => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
        'add_button'    => __( 'Add Another Entry', 'cmb2' ),
        'remove_button' => __( 'Remove Entry', 'cmb2' ),
        'sortable'      => true, // beta
        // 'closed'     => true, // true to have the groups closed by default
    ),
) );

$cmb->add_group_field( $group_field_id, array(
    'name' => 'Banner Title',
    'id'   => 'banner-title',
    'description' => 'Title for Banner',
    'type' => 'text',
) );

$cmb->add_group_field( $group_field_id, array(
    'name' => 'Banner Image',
    'description' => 'Upload an Image',
    'id'   => 'banner-img',
    'type' => 'file',
) );


$cmb->add_group_field( $group_field_id, array(
    'name' => 'Banner Subtitle',
    'description' => 'Write a short description to display on banner',
    'id'   => 'banner-subtitle',
    'type' => 'textarea_small',
) );

}?>
<?php
add_action( 'cmb2_admin_init', 'cmb2_residential');
/**
* Define the metabox and field configurations.
*/
function cmb2_residential() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_residential_';

$cmb = new_cmb2_box( array(
   'id'           => 'traits-res',
   'title'        => 'Our Service is',
   'object_types' => array( 'page' ), // post type
   'show_on'      => array( 'key' => 'page-template', 'value' => 'page-residential.php' ),
   'context'      => 'normal', //  'normal', 'advanced', or 'side'
   'priority'     => 'default',  //  'high', 'core', 'default' or 'low'
   'show_names'   => true, // Show field names on the left
) );
$cmb->add_field( array(
	'name' => 'Our Services',
	'id'   => 'services-residential_2',
	'type' => 'text',
) );
$group_field_id = $cmb->add_field( array(
    'id'          => 'wiki_test_repeat_group_2',
    'type'        => 'group',
    // 'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => array(
        'group_title'   => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
        'add_button'    => __( 'Add Another Entry', 'cmb2' ),
        'remove_button' => __( 'Remove Entry', 'cmb2' ),
        'sortable'      => true, // beta
        // 'closed'     => true, // true to have the groups closed by default
    ),
) );
$cmb->add_group_field( $group_field_id, array(
    'name' => 'Entry Image',
    'id'   => 'image-res',
    'type' => 'file',
) );
$cmb->add_group_field( $group_field_id, array(
    'name' => 'Entry Title',
    'id'   => 'title-res',
    'type' => 'text',
) );


$cmb->add_group_field( $group_field_id, array(
    'name' => 'Description line 1',
    'id'   => 'description-1',
    'type' => 'text',
) );
$cmb->add_group_field( $group_field_id, array(
    'name' => 'Description line 2',
    'id'   => 'description-2',
    'type' => 'text',
) );
$cmb->add_group_field( $group_field_id, array(
    'name' => 'Description line 3',
    'id'   => 'description-3',
    'type' => 'text',
) );
$cmb->add_group_field( $group_field_id, array(
    'name' => 'Description line 4',
    'id'   => 'description-4',
    'type' => 'text',
) );
$cmb->add_field( array(
	'name' => 'Our prices',
	'id'   => 'service-prices',
	'type' => 'text',
) );
}?>
<?php
add_action( 'cmb2_admin_init', 'cmb2_residential2');
/**
* Define the metabox and field configurations.
*/
function cmb2_residential2() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_residential2_';

$cmb = new_cmb2_box( array(
   'id'           => 'services-res',
   'title'        => 'The Services We Offer',
   'object_types' => array( 'page' ), // post type
   'show_on'      => array( 'key' => 'page-template', 'value' => 'page-residential.php' ),
   'context'      => 'normal', //  'normal', 'advanced', or 'side'
   'priority'     => 'default',  //  'high', 'core', 'default' or 'low'
   'show_names'   => true, // Show field names on the left
) );
$cmb->add_field( array(
	'name' => 'services header',
	'id'   => 'services-residential_3',
	'type' => 'text',
) );
$group_field_id = $cmb->add_field( array(
    'id'          => 'wiki_test_repeat_group_3',
    'type'        => 'group',
    // 'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => array(
        'group_title'   => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
        'add_button'    => __( 'Add Another Entry', 'cmb2' ),
        'remove_button' => __( 'Remove Entry', 'cmb2' ),
        'sortable'      => true, // beta
        // 'closed'     => true, // true to have the groups closed by default
    ),
) );
$cmb->add_group_field( $group_field_id, array(
    'name' => 'Entry Image',
    'id'   => 'image-res',
    'type' => 'file',
) );
$cmb->add_group_field( $group_field_id, array(
    'name' => 'Entry Title',
    'id'   => 'title-res',
    'type' => 'text',
) );
$cmb->add_group_field( $group_field_id, array(
    'name' => 'Description line 1',
    'id'   => 'description-1',
    'type' => 'text',
) );
$cmb->add_group_field( $group_field_id, array(
    'name' => 'Description line 2',
    'id'   => 'description-2',
    'type' => 'text',
) );
$cmb->add_group_field( $group_field_id, array(
    'name' => 'Description line 3',
    'id'   => 'description-3',
    'type' => 'text',
) );

}?>
<?php
add_action( 'cmb2_admin_init', 'cmb2_residential_banner_4');
/**
* Define the metabox and field configurations.
*/
function cmb2_residential_banner_4() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_residential4_';

$cmb = new_cmb2_box( array(
   'id'           => 'Schedule-res',
   'title'        => 'Schedule an Appointment',
   'object_types' => array( 'page' ), // post type
   'show_on'      => array( 'key' => 'page-template', 'value' => 'page-residential.php' ),
   'context'      => 'normal', //  'normal', 'advanced', or 'side'
   'priority'     => 'default',  //  'high', 'core', 'default' or 'low'
   'show_names'   => true, // Show field names on the left
) );

$group_field_id = $cmb->add_field( array(
    'id'          => 'wiki_test_repeat_group_4',
    'type'        => 'group',
     'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => array(
        'group_title'   => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
        'add_button'    => __( 'Add Another Entry', 'cmb2' ),
        'remove_button' => __( 'Remove Entry', 'cmb2' ),
        'sortable'      => true, // beta
        // 'closed'     => true, // true to have the groups closed by default
    ),
) );
$cmb->add_field( array(
	'name' => 'Schedule Appointment',
	'id'   => 'scheduleApp',
	'type' => 'text',
) );
$cmb->add_field( array(
	'name' => 'link to Corporate page',
	'id'   => 'corpApp',
	'type' => 'text',
) );
}?>
