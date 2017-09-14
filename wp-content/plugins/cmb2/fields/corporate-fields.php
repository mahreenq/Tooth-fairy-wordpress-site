<?php
add_action( 'cmb2_admin_init', 'cmb2_corporate_banner');
/**
* Define the metabox and field configurations.
*/
function cmb2_corporate_banner() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_residential3_';

$cmb = new_cmb2_box( array(
   'id'           => 'banner-corp',
   'title'        => 'Corporate Banner',
   'object_types' => array( 'page' ), // post type
   'show_on'      => array( 'key' => 'page-template', 'value' => 'page-corporate.php' ),
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
    'description' => 'Title for Banner',
    'id'   => 'title-banner-corp',
    'type' => 'text',
) );

$cmb->add_group_field( $group_field_id, array(
    'name' => 'Banner Image',
    'description' => 'Upload a banner image',
    'id'   => 'image-banner-corp',
    'type' => 'file',
) );


$cmb->add_group_field( $group_field_id, array(
    'name' => 'Banner Description',
    'description' => 'Write a short description to display on banner',
    'id'   => 'description-banner-corp',
    'type' => 'textarea_small',
) );

}?>
<?php
add_action( 'cmb2_admin_init', 'cmb2_corporate');
/**
* Define the metabox and field configurations.
*/
function cmb2_corporate() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_corporate_';

$cmb = new_cmb2_box( array(
   'id'           => 'benefits-corp',
   'title'        => 'How We Benefit You',
   'object_types' => array( 'page' ), // post type
   'show_on'      => array( 'key' => 'page-template', 'value' => 'page-corporate.php' ),
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
    'name' => 'Entry Image',
    'id'   => 'image-trait-corp',
    'description' => 'Upload a picture',
    'type' => 'file',
) );

$cmb->add_group_field( $group_field_id, array(
    'name' => 'Entry Title',
    'id'   => 'title-trait-corp',
    'description' => 'Describe how you benefit corporations',
    'type' => 'text',
) );


$cmb->add_group_field( $group_field_id, array(
    'name' => 'Description',
    'description' => 'Write a short description for this entry',
    'id'   => 'description-trait-corp',
    'type' => 'textarea_small',
) );

}?>
<?php
add_action( 'cmb2_admin_init', 'cmb2_corporate2');
/**
* Define the metabox and field configurations.
*/
function cmb2_corporate2() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_corporate2_';

$cmb = new_cmb2_box( array(
   'id'           => 'services-corp',
   'title'        => 'The Services We Offer',
   'object_types' => array( 'page' ), // post type
   'show_on'      => array( 'key' => 'page-template', 'value' => 'page-corporate.php' ),
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
    'id'   => 'title-service-corp',
    'description' => 'Service Offered',
    'type' => 'text',
) );

$cmb->add_group_field( $group_field_id, array(
    'name' => 'Entry Image',
    'id'   => 'image-service-corp',
    'description' => 'Upload a picture',
    'type' => 'file',
) );



$cmb->add_group_field( $group_field_id, array(
    'name' => 'Description',
    'description' => 'Write a short description for this service',
    'id'   => 'description-service-corp',
    'type' => 'textarea_small',
) );

}?>
