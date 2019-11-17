 <?php

$name =     $_POST['name'];
$from =     $_POST['email'];
$message =  $_POST['message'];



 ?>



 <section class="block-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-11 col-lg-10 col-xl-9 mx-auto">
                    <h4 class="s-category-title text-center heading-title-highlighted">
                        <span>Contact Me</span>
                    </h4>
                    <form action="" class="form-contact needs-validation" novalidate>
                        <div class="row gutters-16">
                            <div class="col-md-6">
                                <div class="form-group c-mb">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                                    <div class="invalid-feedback">
                                        Please enter your name.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group c-mb">
                                    <input type="email" name="from" class="form-control" placeholder="Your Email" required="">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters-16">
                            <div class="col-md-12">
                                <div class="form-group c-mb">
                                    <textarea name="message" id="" rows="5" class="form-control" placeholder="Add a brief message" required=""></textarea>
                                    <div class="invalid-feedback">
                                        Please enter a message in the textarea.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters-16">
                            <div class="col-md-6 mx-auto">
                                <div class="form-group">
                                    <button class="btn btn-secondary btn-block">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>