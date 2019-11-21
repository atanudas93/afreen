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
        'id'            => 'video_metabox',
        'title'         => __( 'Video MB', 'cmb2' ),
        'object_types'  => array( 'home-videos',), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Video Url', 'cmb2' ),
        'desc'       => __( 'Video Url to get the thumbnail', 'cmb2' ),
        'id'         => $prefix . 'url',
        'type'       => 'text_url',
        'show_on_cb' => 'cmb2_hide_if_no_cats', 
    ) );

            $cmb->add_field( array(
            'name' => __('Video_oEmbed','cmb2'),
            'desc' => __('Enter a youtube, twitter, or instagram URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.','cmb2'),
            'id'   => 'video_embed',
            'type' => 'oembed',
            'show_on_cb' => 'cmb2_hide_if_no_cats',
        ) );


// Metabox for contact email address

      $cmb = new_cmb2_box( array(
        'id'            => 'contact_email_metabox',
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
        'id'   => 'contact_email',
        'type' => 'text_email',
        'show_on_cb' => 'cmb2_hide_if_no_cats',

    ) );


}