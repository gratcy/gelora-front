<!doctype html>
<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>          <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo (isset($title) ? $title . ' | ' : '')  . $this -> config -> config['site']['title']; ?></title>
    <meta name="description" content="<?php echo (isset($description) ? $description . ' | ' : '')  . $this -> config -> config['site']['title']; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="http://exprostudio.com/html/classified/apple-touch-icon.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/transitions.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flags.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/prettyPhoto.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/scrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chartist.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body class="tg-home tg-homeone">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--************************************
            Wrapper Start
    *************************************-->
    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
        <!--************************************
                Header Start
        *************************************-->
        <header id="tg-header" class="tg-header tg-haslayout">
            <div class="tg-topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <ul class="tg-navcurrency">
                                <li><a href="index.html#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="index.html#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="index.html#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="index.html#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tg-navigationarea">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <strong class="tg-logo"><a href="http://exprostudio.com/html/classified/index.html"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="company logo here"></a></strong>
                            <a class="tg-btn" href="<?php echo base_url('post-ads'); ?>">
                                <i class="icon-bookmark"></i>
                                <span>post an ad</span>
                            </a>
                            <nav id="tg-nav" class="tg-nav">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                                    <ul>
                                        <li class="menu-item-has-children">
                                            <a href="javascript:void(0);">Home</a>
                                            <ul class="sub-menu">
                                                <li><a href="http://exprostudio.com/html/classified/index.html">Home V1</a></li>
                                                <li><a href="http://exprostudio.com/html/classified/indexv2.html">Home V2</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children current-menu-item">
                                            <a href="javascript:void(0);">Listings</a>
                                            <ul class="sub-menu">
                                                <li><a href="http://exprostudio.com/html/classified/adlistinggrid.html">Ad Grid</a></li>
                                                <li><a href="http://exprostudio.com/html/classified/adlistinglist.html">Ad Listing</a></li>
                                                <li><a href="http://exprostudio.com/html/classified/addetail.html">Listing Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="javascript:void(0);">Dashboard</a>
                                            <ul class="sub-menu">
                                                <li><a href="http://exprostudio.com/html/classified/dashboard.html">Dashboard</a></li>
                                                <li><a href="http://exprostudio.com/html/classified/dashboard-myads.html">Dashboard My Ads</a></li>
                                                <li><a href="http://exprostudio.com/html/classified/dashboard-myfavourites.html">Dashboard Favorites</a></li>
                                                <li><a href="http://exprostudio.com/html/classified/dashboard-offermessages.html">Dashboard Offer Message</a></li>
                                                <li><a href="http://exprostudio.com/html/classified/dashboard-payments.html">Dashboard Payment</a></li>
                                                <li><a href="http://exprostudio.com/html/classified/dashboard-postanad.html">Dashboard Post Ad</a></li>
                                                <li><a href="http://exprostudio.com/html/classified/dashboard-privacy-setting.html">Dashboard privacy Setting</a></li>
                                                <li><a href="http://exprostudio.com/html/classified/dashboard-profile-setting.html">Dashboard Profile Setting</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="javascript:void(0);">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="http://exprostudio.com/html/classified/aboutus.html">About</a></li>
                                                <li><a href="http://exprostudio.com/html/classified/contactus.html">Contact Us</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="javascript:void(0);">News</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="http://exprostudio.com/html/classified/newsgrid.html">News grid</a></li>
                                                        <li><a href="http://exprostudio.com/html/classified/newslist.html">News list</a></li>
                                                        <li><a href="http://exprostudio.com/html/classified/newsdetail.html">News detail</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="http://exprostudio.com/html/classified/404error.html">404 Error</a></li>
                                                <li><a href="http://exprostudio.com/html/classified/comingsoon.html">Coming Soon</a></li>
                                                <li><a href="http://exprostudio.com/html/classified/packages.html">Packages</a></li>
                                                <li><a href="http://exprostudio.com/html/classified/loginsignup.html">Login/Register</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--************************************
                Header End
        *************************************-->