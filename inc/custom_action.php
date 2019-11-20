<?php
function custom_action() {
   $response = array('msg' => "", 'error' => "");
   if (
       ! isset( $_POST['_rd_nonce'] )
       || ! wp_verify_nonce( $_POST['_rd_nonce'], 'custom_action_nonce')
   ) {
       exit('The form is not valid');
   } else {
       $name = $_POST['name'];
       $email = $_POST['email'];
       if(!isset($name) || empty($name)) { $response['error'] .= "<li>Name Required</li>"; }
       if(!isset($email) || empty($email)) { $response['error'] .= "<li>Email Required</li>"; }
       if(empty($response['error'])){
           $to = 'atanudas93@gmail.com';//get_bloginfo('admin_email');
           $subject = 'Request Demo';
           $body = '<h5>Demo Request from:</h5> <p> '.$name.' </p> <p><b>Email : </b> '.$email.' </p>';
           $headers = array('Content-Type: text/html; charset=UTF-8', 'From: Afreen <atanudas93@gmail.com>');
           if(wp_mail( $to, $subject, $body, $headers )){
           } else {
               mail($to, $subject, $body, 'Content-Type: text/html; charset=UTF-8'."\r\n".'From: Afreen <atanudas93@gmail@gmail.com>'."\r\n");
           }
           $response['msg'] = "<li>Success!!</li>";
       }
       wp_send_json($response);
   }
}
add_action( 'wp_ajax_custom_action', 'custom_action' );
add_action( 'wp_ajax_nopriv_custom_action', 'custom_action' );