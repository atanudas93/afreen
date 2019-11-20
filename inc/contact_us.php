<?php 
add_action('wp_ajax_contact_function', 'contact_function');
add_action('wp_ajax_nopriv_contact_function', 'contact_function');
function contact_function() {
    $response = array('msg' => "", 'error' => "");
    if ( 
        ! isset( $_POST['_cm_nonce'] ) 
        || ! wp_verify_nonce( $_POST['_cm_nonce'], 'contact_function_nonce') 
    ) {
 
        exit('The form is not valid');
 
    } else {
        $msg = $_POST['message'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        
        
        if(!isset($msg) || empty($msg)) { $response['error'] .= "<li>Message Required</li>"; }
        if(!isset($email) || empty($email)) { $response['error'] .= "<li>Email Required</li>"; }
        if(!isset($name) || empty($name)) { $response['error'] .= "<li>Name Required</li>"; }
       
        if(empty($response['error'])){
            $postarr = array(
              'post_title' => $name,
              'post_content' => $msg,
              'post_type' => 'contact',
              'post_status' => 'pending',
            );
            $postID = wp_insert_post( $postarr); 
            if($postID){
                update_post_meta($postID,'contact_email', $email);
                update_post_meta($postID,'contact_name', $name);
                $response['msg'] = "<li>Successfuly submitted!!</li>";
            }

        }else{
            $response['error'] = "<li>Smething wrong or fields are empty!!</li>";
        }
        wp_send_json($response);
    }
}