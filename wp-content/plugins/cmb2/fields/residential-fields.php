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
    'id'   => 'title-banner-res',
    'description' => 'Title for Banner',
    'type' => 'text',
) );

$cmb->add_group_field( $group_field_id, array(
    'name' => 'Banner Image',
    'description' => 'Upload an Image',
    'id'   => 'image-banner-res',
    'type' => 'file',
) );


$cmb->add_group_field( $group_field_id, array(
    'name' => 'Banner Description',
    'description' => 'Write a short description to display on banner',
    'id'   => 'description-banner-res',
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

$group_field_id = $cmb->add_field( array(
    'id'          => 'wiki_test_repeat_group',
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
    'name' => 'Entry Title',
    'id'   => 'title-trait-res',
    'type' => 'text',
) );
$cmb->add_group_field( $group_field_id, array(
    'name' => 'Entry Image',
    'id'   => 'image-trait-res',
    'type' => 'file',
) );

$cmb->add_group_field( $group_field_id, array(
    'name' => 'Description',
    'description' => 'Write a short description for this entry',
    'id'   => 'description-trait-res',
    'type' => 'textarea_small',
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

$group_field_id = $cmb->add_field( array(
    'id'          => 'wiki_test_repeat_group',
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
    'name' => 'Entry Title',
    'id'   => 'title-service-res',
    'type' => 'text',
) );

$cmb->add_group_field( $group_field_id, array(
    'name' => 'Entry Image',
    'id'   => 'image-service-res',
    'type' => 'file',
) );



$cmb->add_group_field( $group_field_id, array(
    'name' => 'Description',
    'description' => 'Write a short description for this entry',
    'id'   => 'description-service-res',
    'type' => 'textarea_small',
) );

}?>
