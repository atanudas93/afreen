<?php
/*Template Name: contact-us*/
get_header();



?>

<?php get_template_part('template-part/home-logo');?>
<?php get_template_part('template-part/home-subscribe'); ?>



 <section class="block-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-11 col-lg-10 col-xl-9 mx-auto">
                    <h4 class="s-category-title text-center heading-title-highlighted">
                        <span>Contact Me</span>
                    </h4>
                    <form action="<?php echo admin_url('admin-ajax.php'); ?>" id="cm_form" method="post" class="form-contact needs-validation" novalidate>
                        <div class="row gutters-16">
                            <div class="col-md-6">
                                <div class="form-group c-mb">
                                    <input type="text" name="name" id="c_name" class="form-control" placeholder="Your Name" required="" >
                                    <div class="invalid-feedback">
                                        Please enter your name.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group c-mb">
                                    <input type="email" name="email"  id="c_email" class="form-control" placeholder="Your Email" required="" >
                                    <div class="invalid-feedback">
                                        Please enter a valid email address.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters-16">
                            <div class="col-md-12">
                                <div class="form-group c-mb">
                                    <textarea name="message" id="c_msg" rows="5" class="form-control" placeholder="Add a brief message" required="" ></textarea>
                                    <div class="invalid-feedback">
                                        Please enter a message in the textarea.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters-16">
                            <div class="col-md-6 mx-auto">
                                      <input type="hidden" name="action" value="contact_function">
                                    <?php wp_nonce_field( 'contact_function_nonce', '_cm_nonce' ); ?>
                                <div class="form-group">


                                  <button type="submit" name="sub" class="btn btn-secondary btn-block">Send Message</button>
                                    <br>
                                    <div class="cm alert d-none">
                                       <ul class="list">
                                       </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<script type="text/javascript">
    jQuery(document).ready(function($) {
    $('#cm_form').on('submit', function(e) {
            e.preventDefault();
            var email = $('#c_email').val();
            var msg = $('#c_msg').val();
            var name = $('#c_name').val();
            if( email === "" || name === "" || msg === ""){
                return false;  
            }
            
   var $form = $(this);
     $.post($form.attr('action'), $form.serialize(),
       function(data) {
         if($('.cm.alert').hasClass('alert-danger')) {
           $('.cm.alert').removeClass('alert-danger')
         }
         if($('.cm.alert').hasClass('alert-success')) {
           $('.cm.alert').removeClass('alert-success')
         }
         if (data.error) {
           $('.cm.alert').removeClass('d-none').addClass('alert-danger').children('ul.list').html(data.error);
         }
         if (data.msg) {

        $('.cm.alert').removeClass('d-none').addClass('alert-success').children('ul.list').html(data.msg);
                   $('.btn-cm').hide();
                 }
             },
             'json');
           });
});
      
</script>


<?php get_footer(); ?>