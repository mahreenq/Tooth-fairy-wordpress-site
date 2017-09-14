<?php
add_action( 'cmb2_admin_init', 'cmb2_apptform1');
/**
* Define the metabox and field configurations.
*/
function cmb2_apptform1() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_appt1_';

$cmb = new_cmb2_box( array(
   'id'           => 'appt-form-1',
   'title'        => 'Form 1 Headings',
   'object_types' => array( 'page' ), // post type
   'show_on'      => array( 'key' => 'page-template', 'value' => 'page-appointment-1.php' ),
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
    'name' => 'Heading',
    'description' => 'Title for Appointment Page',
    'id'   => 'title-appt-1',
    'type' => 'text',
) );



$cmb->add_group_field( $group_field_id, array(
    'name' => 'Subheading',
    'description' => 'Write a subheading ex. Step 1) ...',
    'id'   => 'subtitle-appt-1',
    'type' => 'textarea_small',
) );

}?>
