<?php
/**
 * Created by PhpStorm.
 * User: Minja Junior
 * Date: 9/21/2017
 * Time: 7:45 PM
 */
date_default_timezone_set('Africa/Dar_Es_Salaam');
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

    <head>
        <title>Demi Corporation</title>
        <meta charset="utf-8">
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <meta name="description" content="Tanzania, Tz, apple, mac, android, POS, software, free, retail shop, desktop, events, website, demi, demi corporation, hosting, ssl, development, mobile, data">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/animations.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>" >
        <script src="<?php echo base_url('assets/js/vendor/modernizr-2.6.2.min.js')?>"></script>

        <!--[if lt IE 9]>
        <script src="<?php echo base_url('assets/js/vendor/html5shiv.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/vendor/respond.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/vendor/jquery-1.12.4.min.js')?>"></script>
        <![endif]-->

    </head>

    <body>
    <!--[if lt IE 9]>
        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
        <![endif]-->

            <div class="preloader">
                <div class="preloader_image"></div>
            </div>

            <!-- wrappers for visual page editor and boxed version of template -->
            <div id="canvas">
                <div id="box_wrapper">

                    <!-- template sections -->

                    <header class="page_header header_white display_table col-editable-parent">
                        <div class="header_left_logo display_table_cell col-editable">
                            <a href="<?php echo base_url()?>" class="logo logo_image">
                                <img src="<?php echo base_url('assets/images/icon.png')?>" alt="">
                                <span class="logo_text_red hidden-xxs">Demi </span><span class="logo_text_gray hidden-xxs">Corporation</span>
                            </a>
                        </div>
                        <!-- eof .header_left_logo -->

                        <div class="header_mainmenu text-center display_table_cell col-editable">
                            <!-- main nav start -->
                            <nav class="mainmenu_wrapper">
                                <ul class="mainmenu nav sf-menu">
                                    <li>
                                        <a href="<?php echo base_url()?>">Home</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('about')?>">About Us</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('service')?>">Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Products</a>
                                        <ul>
                                            <li>
                                                <a href="http://demievents.co.tz" target="_blank">Demi Events</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('product/shop')?>">Demi Shop</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('contact')?>">Contact</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('support')?>" target="_blank">Support</a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- eof main nav -->
                            <span class="toggle_menu">
						        <span></span>
					        </span>
                        </div>
                        <!-- eof .header_mainmenu -->
                        <div class="header_right_buttons text-right display_table_cell col-editable">
                            <span class="inline-block hidden-xxs">
                                <a href="https://twitter.com/demi_corp" target="_blank" class="social-icon color-icon border-icon rounded-icon soc-twitter"></a>
                                <a href="https://instagram.com/demi_corp" target="_blank" class="social-icon color-icon border-icon rounded-icon soc-instagram"></a>
                            </span>
                        </div>
                        <!-- eof .header_right_buttons -->
                    </header>
