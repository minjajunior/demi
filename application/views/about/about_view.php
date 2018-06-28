<?php
/**
 * Created by PhpStorm.
 * User: Minja Junior
 * Date: 9/21/2017
 * Time: 7:11 PM
 */
?>

<?php $this->load->view('shared/header'); ?>

    <section class="page_breadcrumbs ls ms section_padding_25 bg_image">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="small">About Us</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_0 columns_padding_0 page_about">
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-6 section_padding_top_100 section_padding_bottom_50">

                    <div class="container-left-half">
                        <div class="row">
                            <div class="col-xs-12">

                                <div class="media text-uppercase about-slogan-text">
                                    <div class="media-left">
                                        <h3>Hi</h3>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="thin">Few Words About</h3>
                                        <h2>
                                            <span class="highlight">Demi</span>Corp
                                        </h2>
                                    </div>
                                </div>

                                <p>At Demi Corp , We unleash our creativity and seek innovation to develop products and services that provide total communication and information solutions. </p> <br/>
                                <p>We are competent in web application development, mobile application development, desktop application development, business intelligence/data analysis and we
                                    pride ourselves on providing a full range of technology to meet all of your needs.</p>

                                <p class="topmargin_60">
                                    For more details<br>
                                    <a href="<?php echo site_url('contact')?>" class="theme_button inverse">Contact Us</a>
                                </p>


                            </div>
                        </div>
                    </div>
                    <!-- .container-left-half -->

                </div>
                <!-- .col-* -->
                <div class="col-sm-6">
                    <img src="<?php echo site_url('assets/images/logo.jpg')?>" alt="">
                </div>
                <!-- .col-* -->

            </div>
        </div>
    </section>

<?php $this->load->view('shared/footer')?>