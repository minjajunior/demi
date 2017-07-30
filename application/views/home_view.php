<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demi Corporation</title>

    <!-- Material Design fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/fancybox/jquery.fancybox.css')?>" type="text/css" media="screen" />
    <link href="<?php echo base_url('assets/css/animate.css')?>" rel="stylesheet" type="text/css">

    <!-- Bootstrap Material Design -->
    <link href="<?php echo base_url('assets/css/material-design.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/ripples.min.css')?>" rel="stylesheet">


    <link href="<?php echo base_url('assets/css/snackbar.min.css')?>" rel="stylesheet">

    <!-- Custome Styles -->
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" type="text/css">

</head>
<body>
<!--Header_section-->
<header id="header_wrapper">
    <div class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="javascript:void(0)"> Demi Corporation</a>
            </div>
            <div id="main-nav" class="navbar-collapse collapse navbar-responsive-collapse navStyle">
                <ul class="nav navbar-nav" id="mainNav">
                    <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
                    <li><a href="#aboutUs" class="scroll-link">About Us</a></li>
                    <li><a href="#service" class="scroll-link">Services</a></li>
                    <li><a href="#contact" class="scroll-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

</header>
<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">
    <div class="hero_wrapper">
        <div class="container">
            <div class="hero_section">
                <div class="row">
                    <div class="col-lg-5 col-sm-7">
                        <div class="top_left_cont zoomIn wow animated">
                            <h2>Managing Events <strong>Made </strong> so easy...</h2>
                            <p>Here is a platform that simplify local event planning and management. It's an ideal solution for organizers when planning events such as Wedding, Send off , Kitchen party etc</p>
                            <a href="http://demievents.co.tz" target="_blank" class="btn btn-raised btn-lg">Read more</a> </div>
                    </div>
                    <div class="col-lg-7 col-sm-5">
                        <img src="img/main_device_image.png" class="zoomIn wow animated" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Hero_Section-->

<!--Aboutus-->
<section id="aboutUs">
    <div class="inner_wrapper">
        <div class="container">
            <h2>About Us</h2>
            <div class="inner_section">
                <div class="row">
                    <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="img/about-img.jpg" class="withripple delay-03s animated wow zoomIn" alt=""></div>
                    <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
                        <div class=" delay-01s animated fadeInDown wow animated">
                            <h3>Lorem Ipsum has been the industry's standard dummy text ever..</h3><br/>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.PageMaker including versions of Lorem Ipsum.</p> <br/>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="work_bottom"> <span>Want to know more..</span> <a href="#contact" class="btn btn-raised btn-lg">Contact Us</a> </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</section>
<!--Aboutus-->


<!--Service-->
<section  id="service">
    <div class="container">
        <h2>Services</h2>
        <div class="service_wrapper">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="service_block withripple">
                        <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="material-icons">card_membership</i></span> </div>
                        <h3 class="animated fadeInUp wow">Android</h3>
                        <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 borderLeft">
                    <div class="service_block withripple">
                        <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="material-icons">favorite_border</i></span> </div>
                        <h3 class="animated fadeInUp wow">Apple IOS</h3>
                        <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 borderLeft">
                    <div class="service_block withripple">
                        <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="material-icons">hourglass_empty</i></span> </div>
                        <h3 class="animated fadeInUp wow">Design</h3>
                        <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
            </div>
            <div class="row borderTop">
                <div class="col-lg-4 col-md-4 col-sm-4 mrgTop">
                    <div class="service_block withripple">
                        <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="material-icons">launch</i></span> </div>
                        <h3 class="animated fadeInUp wow">Concept</h3>
                        <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 borderLeft mrgTop">
                    <div class="service_block withripple">
                        <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="material-icons">lightbulb_outline</i></span> </div>
                        <h3 class="animated fadeInUp wow">User Research</h3>
                        <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 borderLeft mrgTop">
                    <div class="service_block withripple">
                        <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="material-icons">info_outline</i></span> </div>
                        <h3 class="animated fadeInUp wow">User Experience</h3>
                        <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Service-->

<!--Footer-->
<footer class="footer_wrapper" id="contact">
    <div class="container">
        <section class="page_section contact">
            <div class="contact_section">
                <h2>Contact Us</h2>
                <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 wow fadeInLeft">
                    <div class="contact_info">
                        <div class="detail">
                            <h4>Demi Corporation</h4>
                            <p>TANCOT HOUSE, 1st Floor<br>
                            Sokoine Drive<br>
                            P.O.Box 76619<br>
                            Dar es Salaam</p>
                        </div>
                        <div class="detail">
                            <h4>Call us</h4>
                            <p>+255 712 431242<br/>
                            +255 752 934547</p>
                        </div>
                        <div class="detail">
                            <h4>Email us</h4>
                            <p>info@demi.co.tz</p>
                        </div>
                    </div>



                    <ul class="social_links">
                        <li class="twitter animated bounceIn wow delay-02s"><a href="https://twitter.com/demi_corp" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li class="instagram animated bounceIn wow delay-03s"><a href="https://instagram.com/demi_corp" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-8 wow fadeInLeft delay-06s">
                    <div class="form">


                        <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
                        <form name="sentMessage" id="contactForm"  novalidate>
                            <div class="form-group label-floating">
                                <div class="input-group">
                                    <label class="control-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" required
                                           data-validation-required-message="Please enter your name" />
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="form-group label-floating">
                                <div class="input-group">
                                    <label class="control-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" required
                                           data-validation-required-message="Please enter your email" />
                                </div>
                            </div>

                            <div class="form-group label-floating">
                                <div class="input-group">
                                    <label class="control-label">Message</label>
                                    <textarea rows="10" cols="100" class="form-control" id="message" required
                                              data-validation-required-message="Please enter your message" minlength="5"
                                              data-validation-minlength-message="Min 5 characters"
                                              maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>
                            <div id="success"> </div> <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-raised btn-info pull-right">Send <i class="material-icons">send</i></button><br />
                        </form>


                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <div class="footer_bottom"><span>Copyright © <?php echo date('Y')?>,    Powered by <a href="<?php echo base_url()?>"> Demi Corporation</a>. </span> </div>
    </div>
</footer>


<script src="<?php echo base_url('assets/js/jquery-1.10.2.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

<script src="<?php echo base_url('assets/js/ripples.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/material.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/snackbar.min.js')?>"></script>

<!-- Script Files -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-scrolltofixed.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.nav.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.easing.1.3.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.isotope.js')?>"></script>
<script src="<?php echo base_url('assets/fancybox/jquery.fancybox.pack.js')?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/custom.js')?>"></script>

<script>
    $(function () {
        $.material.init();
    });
</script>
</body>
</html>