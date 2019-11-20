
    //           $.ajax({

    //                   url: ajaxurl,
    //                   type: 'post',
    //                   data: {
    //                         name:name,
    //                         email: email,
    //                         message: message,
    //                         action: 'contact_function'

    //                       },
    //                   error: function(response){
    //                         console.log();

    //                         },
    //                   success: function(response){
                            
    //                         if(response == 0){

    //                         console.log('Unable to save your message please try later');


    //                         } else {

    //                       console.log('Message Saved! Thank You!');

    //                                 }

    //                         }      

    //                 });
      
  
    //      });

    // });














//       $('#cm_form').on('submit', function(e) {
  //           e.preventDefault();
  //           var email = $('#c_email').val();
  //           var msg = $('#c_msg').val();
  //           var name = $('#c_name').val();
  //           if( email === "" || name === "" || msg === ""){
  //               return false;
  //           }
	 // var $form = $(this);
  //    $.post($form.attr('action'), $form.serialize(),
  //      function(data) {
  //        if($('.cm.alert').hasClass('alert-danger')) {
  //          $('.cm.alert').removeClass('alert-danger')
  //        }
  //        if($('.cm.alert').hasClass('alert-success')) {
  //          $('.cm.alert').removeClass('alert-success')
  //        }
  //        if (data.error) {
  //          $('.cm.alert').removeClass('d-none').addClass('alert-danger').children('ul.list').html(data.error);
  //        }
  //        if (data.msg) {

  //       $('.cm.alert').removeClass('d-none').addClass('alert-success').children('ul.list').html(data.msg);
  //                  $('.btn-cm').hide();
  //                }
  //            },
  //            'json');
  //          });




<?php

if(isset($_POST['sub'])){


$name = $_POST['name'];

$message = $_POST['message'];

$arg = array(

    'post_type' => 'contact',
    'post_title' => $name,
    'post_content' => $message,
    'post_status' => 'publish' 

);

wp_insert_post($arg);


}



?>




<section id="section__subscribe" class="block-py" style="background-image: url('<?php echo ASS;?>images/demo/harmony_web_productline.png');">
            <div class="container">
                <div class="row align-items-md-center">
                    <div class="col-md-5 col-lg-4">
                        <div class="group-common-header mb-0">
                            <h2 class="common-heading text-light">Contact us</h2>
                            <div class="common-text text-light">
                                <p>
                                    Want to learn more? Would you like to order a sample or a full bottle to get started on your healing journey? Looking to become a distributor? Let's chat!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 offset-lg-2">
                        <div class="w-100">
                            <?php //if(!is_user_logged_in()): ?>
                                
                            <div class="subscribe-form-wrap">
                                <form action="<?php echo admin_url('admin-ajax.php'); ?>" method="post" id="reg_form" class="needs-validation" novalidate>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Your name" name="name" id="contact_name" required="">
                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Your email" name="email" id="contact_email" required="">
                                                 <div class="invalid-feedback">
                                                    Please enter a valid email.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea name="msg" id="contact_msg" rows="3" class="form-control" placeholder="Add a brief message" required=""></textarea>
                                                <div class="invalid-feedback">
                                                    Please enter a message in the textarea.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="rds alert d-nones">
                                            <ul class="lists">
                                            </ul>
                                        </div>
                                    </div>
                                    <input type="hidden" name="action" value="contact_function">
                                    <?php wp_nonce_field( 'contact_function_nonce', '_rd_nonce' ); ?>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-animation btn-animation-primary" id="submit">
                                              <i class="" id="loading"></i><span id="submit_text">Submit</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<script src="https://www.google.com/recaptcha/api.js?render=6Ldr18EUAAAAAK5BLEE8ibvedXL1Xf4irDwK7CVh"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
    
        $('#reg_form').on('submit', function(e) {
            e.preventDefault();
            var email = $('#contact_email').val();
            var msg = $('#contact_msg').val();
            var name = $('#contact_name').val();
            if( email === "" || name === "" || msg === ""){
                return false;
            }
            // var email = $('#_learn_email').val();
            // var msg = $('#learn_text').val();
          
            // if( email === "" ||  msg === ""){
            //     return false;
            // }
            $('#submit').addClass("buttonload");
            $('#submit_text').text('Loading');
            $('#loading').addClass("fa fa-spinner fa-spin");
            //$('#submit').text('Loading');
            var $form = $(this);
            $.post($form.attr('action'), $form.serialize(), 
            function(data) {
              if($('.rds.alert').hasClass('alert-danger')) {
                $('.rds.alert').removeClass('alert-danger')
              }
              if($('.rds.alert').hasClass('alert-success')) {
                $('.rds.alert').removeClass('alert-success')
              }
              if (data.error) {
                $('#submit').removeClass("buttonload");
                $('#submit_text').text('Submit');
                $('#loading').removeClass("fa fa-spinner fa-spin");
              //  $('#submit').attr("disabled", true);
               // $('#submit_text').attr("disabled", true);
                $('.rds.alert').removeClass('d-nones').addClass('alert-danger').children('ul.lists').html(data.error);
              }
              if (data.msg) {
                // $('#submit').removeClass("buttonload");
                $('#submit_text').text('Submit');
                $('#loading').removeClass("fa fa-spinner fa-spin");
                $('.rds.alert').removeClass('d-nones').addClass('alert-success').children('ul.lists').html(data.msg);
               // $('#submit').attr("disabled", true);
                //$('#submit_text').attr("disabled", true);
                //$('.btn-rd').hide();
              }
            }, 
            'json');
        });
       
      });
</script>




<?php 
add_action('wp_ajax_contact_function', 'contact_function');
add_action('wp_ajax_nopriv_contact_function', 'contact_function');
function contact_function() {
    $response = array('msg' => "", 'error' => "");
    if ( 
        ! isset( $_POST['_rd_nonce'] ) 
        || ! wp_verify_nonce( $_POST['_rd_nonce'], 'contact_function_nonce') 
    ) {
 
        exit('The form is not valid');
 
    } else {
        $msg = $_POST['msg'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        // $key = '6Ldr18EUAAAAAK5BLEE8ibvedXL1Xf4irDwK7CVh';
        
        if(!isset($msg) || empty($msg)) { $response['error'] .= "<li>Message Required</li>"; }
        if(!isset($email) || empty($email)) { $response['error'] .= "<li>Email Required</li>"; }
        if(!isset($name) || empty($name)) { $response['error'] .= "<li>Name Required</li>"; }
        // if(!$key){
        //   $response['error'] .= "<li>Recaptcha Required</li>";
        //   wp_send_json($response);
        //   exit;
        // }
        // $secretKey = "6Ldr18EUAAAAAM387ROIAgd6fYCFYIs8lAwDZ_23";
        // $url =  'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($key);
        // $res = file_get_contents($url);
        // $resKeys = json_decode($res,true);
        // header('Content-type: application/json');
        // if($resKeys["success"]) {
        //         $res['success'] = 'true';
        // }else {
        //         $res['success'] = 'false';
        // }
        if(empty($response['error'])){
            $postarr = array(
              'post_title' => $name,
              'post_content' => $msg,
              'post_type' => 'contact',
              'post_status' => 'pending',
            );
            $postID = wp_insert_post( $postarr); 
            if($postID){
                update_post_meta($postID,'contact_email_add', $email);
                update_post_meta($postID,'contact_name', $name);
                $response['msg'] = "<li>Success!!</li>";
            }
       
            // $to = 'debashonchakraborty@gmail.com';//get_bloginfo('admin_email');
            // $subject = 'Request Demo';
            // $body = '<h5>Demo Request from:</h5> <p> '.$msg.' </p> <p><b>Email : </b> '.$email.' </p>';
            // $headers = array('Content-Type: text/html; charset=UTF-8', 'From: Kinship <debashonchakraborty.com>');
            // if(wp_mail( $to, $subject, $body, $headers )){
            // } else {
            //     mail($to, $subject, $body, 'Content-Type: text/html; charset=UTF-8'."\r\n".'From: Harmoni <debashonchakraborty@gmail.com>'."\r\n");
            // }
            
        }else{
            $response['error'] = "<li>Smething wrong!!</li>";
        }
        wp_send_json($response);
    }
}