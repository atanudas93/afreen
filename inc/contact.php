<?php
add_action('init', 'contact_meta_function');
add_filter('manage_contact_posts_columns','afreen_set_contact_columns');
add_action('manage_contact_posts_custom_column','afreen_contact_custom_column',10,2);


function contact_meta_function() {
   $labels = array(
       'name' => _x('Contact', 'Contact', 'afreen'),
       'singular_name' => _x('Contact', 'post type singular name', 'afreen'),
       'menu_name' => _x('Contact-Us', 'admin menu', 'afreen'),
       'name_admin_bar' => _x('Contact', 'add new on admin bar', 'afreen'),
       'add_new' => _x('Add New', 'Contact', 'afreen'),
       'add_new_item' => __('Add New Contact', 'afreen'),
       'new_item' => __('New Contact', 'afreen'),
       'edit_item' => __('Edit Contact', 'afreen'),
       'view_item' => __('View Contact', 'afreen'),
       'all_items' => __('All Contact', 'afreen'),
       'search_items' => __('Search Contact', 'afreen'),
       'parent_item_colon' => __('Parent Contact:', 'afreen'),
       'not_found' => __('No Contact found.', 'afreen'),
       'not_found_in_trash' => __('No Contact found in Trash.', 'afreen')
   );
   $args = array(
       'labels' => $labels,
       'public' => true,
       'publicly_queryable' => true,
       'show_ui' => true,
       'show_in_menu' => true,
       'query_var' => true,
       'rewrite' => array('slug' => 'afreen-contact_meta'),
       'capability_type' => 'post',
       'has_archive' => true,
       'hierarchical' => false,
       'menu_position' => null,
       'supports' => array('title', 'editor','author'),
       'menu_icon' => 'dashicons-admin-users'
   );
   register_post_type('contact', $args);
}

function afreen_set_contact_columns( $columns ){
          
        // $title = $columns['title'];
        // $date = $columns['date'];
        unset($columns['title'], $columns['date'], $columns['message']);

          $columns['title'] = 'Full Name';
          $columns['email'] = 'Email';
          $columns['message'] = 'Message';
          $columns['date'] = 'Date';

            return $columns;

} 

function afreen_contact_custom_column( $column, $post_id ){

      switch($column){
        case 'message':
        echo get_the_excerpt();
        break;

        case 'email' :
        $email = get_post_meta($post_id ,'contact_email', true);
        echo '<a href="mailto:' .$email.'">'.$email.'</a>';
        break;




      }

}