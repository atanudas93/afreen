<?php
add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

$prefix ='helpwp_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'test_metabox',
        'title'         => __( 'Custom MB', 'cmb2' ),
        'object_types'  => array( 'home-videos',), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Website Url', 'cmb2' ),
        'desc'       => __( 'Video Url', 'cmb2' ),
        'id'         => $prefix . 'url',
        'type'       => 'text_url',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ) );
      $cmb = new_cmb2_box( array(
        'id'            => 'newe_metabox',
        'title'         => __( 'Custom MB', 'cmb2' ),
        'object_types'  => array('contact', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, 
            ) );
     // Email text field
    $cmb->add_field( array(
        'name' => __( 'Email address', 'cmb2' ),
        'desc' => __( 'Captured email address', 'cmb2' ),
        'id'   => $prefix . 'url',
        'type' => 'text_email',
        'show_on_cb' => 'cmb2_hide_if_no_cats',

    ) );


    // // URL text field
    // $cmb->add_field( array(
    //     'name' => __( 'Website URL', 'cmb2' ),
    //     'desc' => __( 'field description (optional)', 'cmb2' ),
    //     'id'   => 'yourprefix_url',
    //     'type' => 'text_url',
    //     // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
    //     // 'repeatable' => true,
    // ) );

    // // Email text field
    // $cmb->add_field( array(
    //     'name' => __( 'Test Text Email', 'cmb2' ),
    //     'desc' => __( 'field description (optional)', 'cmb2' ),
    //     'id'   => 'yourprefix_email',
    //     'type' => 'text_email',
    //     // 'repeatable' => true,
    // ) );

    // Add other metaboxes as needed

}