<?php
/**
 * Created by PhpStorm.
 * User: Minja Junior
 * Date: 9/22/2017
 * Time: 10:09 AM
 */
?>
<?php $this->load->view('shared/header')?>

    <section class="page_breadcrumbs ls ms section_padding_25 bg_image">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="small">Contact Us</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ls columns_padding_25 section_padding_top_100 section_padding_bottom_100">
        <div class="container">
            <div class="row">

                <div class="col-md-8 to_animate" data-animation="scaleAppear">

                    <h3 class="module-header">Contact Form</h3>

                    <form class="contact-form columns_padding_5" method="post" action="http://webdesign-finder.com/">
                        <div class="col-sm-6">
                            <div class="contact-form-name">
                                <label for="name">Full Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="contact-form-subject">
                                <label for="subject">Subject
                                    <span class="required">*</span>
                                </label>
                                <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="contact-form-phone">
                                <label for="phone">Phone
                                    <span class="required">*</span>
                                </label>
                                <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone number">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="contact-form-email">
                                <label for="email">Email address
                                    <span class="required">*</span>
                                </label>
                                <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-sm-12">

                            <div class="contact-form-message">
                                <label for="message">Message</label>
                                <textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12">

                            <div class="contact-form-submit topmargin_30">
                                <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button wide_button color1">Send Message</button>
                                <button type="reset" id="contact_form_reset" name="contact_reset" class="theme_button wide_button">Clear Form</button>
                            </div>
                        </div>


                    </form>
                </div>

                <div class="col-md-4 to_animate" data-animation="scaleAppear">

                    <div class="with_border with_padding_small">
                        <ul class="list1 no-bullets no-top-border no-bottom-border">

                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="rt-icon2-shop highlight fontsize_18"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="media-heading grey">Physical Address:</h5>
                                        1st Floor, TANCOT House<br>
                                        Sokoine Drive<br>
                                        P.O Box 25637<br>
                                        Dar es salaam
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="rt-icon2-phone5 highlight fontsize_18"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="media-heading grey">Phone:</h5>
                                        +255 712 431 242<br>
                                        +255 742 431 242
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="rt-icon2-mail highlight fontsize_18"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="media-heading grey">Email:</h5>
                                        info@demi.co.tz
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>

<?php $this->load->view('shared/footer')?>