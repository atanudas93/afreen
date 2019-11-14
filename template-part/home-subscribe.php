   <div class="modal fade modal-subscribe" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="row no-gutters">
                <div class="col-md-5">
                    <div class="subscribe-image">
                    </div>
                </div>



                <div class="col-md-7">
                    <div class="subscribe-content">
                        <div class="w-100">
                            <span>Subscribe to</span>
                            <h2 class="brand-logo-text"><span>Chai</span> avec <strong>Afreen</strong></h2>
                            <div>
                                <form method="post" id="rd-form" action="<?php echo admin_url('admin-ajax.php'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your email" name="email">
                                    </div>
                                    <input type="hidden" name="action" value="custom_action">
                                    <?php wp_nonce_field( 'custom_action_nonce', '_rd_nonce' ); ?>
                                    <div>
                                        <button class="btn btn-subscribe" type="submit">Subscribe</button>
                                    </div>
                                    <br>
                                    <div class="rd alert d-none">
                                       <ul class="list">
                                       </ul>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>



<script type="text/javascript">
    
    jQuery(document).ready(function($) {
    $('#rd-form').on('submit', function(e) {
     e.preventDefault();
     var $form = $(this);
     $.post($form.attr('action'), $form.serialize(),
       function(data) {
         if($('.rd.alert').hasClass('alert-danger')) {
           $('.rd.alert').removeClass('alert-danger')
         }
         if($('.rd.alert').hasClass('alert-success')) {
           $('.rd.alert').removeClass('alert-success')
         }
         if (data.error) {
           $('.rd.alert').removeClass('d-none').addClass('alert-danger').children('ul.list').html(data.error);
         }
         if (data.msg) {

        $('.rd.alert').removeClass('d-none').addClass('alert-success').children('ul.list').html(data.msg);
                   $('.btn-rd').hide();
                 }
             },
             'json');
           });
         });

</script>