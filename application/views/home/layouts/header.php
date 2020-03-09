<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT FIRUZ IMANI OETAMA</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/template/') ?>img/icon.png"/>

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>css/slicknav.min.css" type="text/css">
    <link href="<?=base_url();?>assets/datepicker/jquery-ui.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>css/style.css" type="text/css">
    <script src="<?= base_url('assets/template/') ?>js/jquery-3.3.1.min.js"></script>
    
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="<?=base_url('index')?>"><img src="<?= base_url('assets/template/') ?>img/logo copy.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10">
                        <nav class="main-menu mobile-menu">
                            <ul>
                               <?php    
                                    $userdata= $this->session->userdata('username');
                                    if($userdata==null) {
                                ?>  
                                <li><a href="<?= base_url('index/profile') ?>">Profile</a></li>
                                <li><a href="<?= base_url('index/gallery') ?>">Gallery</a></li>
                                <li><a href="<?= base_url('Index/loginuser') ?>">Login</a></li>
                                <li><a href="<?= base_url('index/register') ?>">Register</a></li>
                                <li><a href="<?= base_url('index/contact_us') ?>">Contact Us</a></li>
                                <?php } 
                                else { ?>
                                    <li><a href="<?= base_url('Index/logout') ?>">Logout</a></li>
                                    <li><a href="<?= base_url('Index/order') ?>">Order</a></li>
                                <?php } ?>
                                
                                <li class="phone-num"><i class="fa fa-phone"></i><span>+62 896 7323 726</span> <p>
                                    Selamat datang, <?=$this->session->userdata('username')?>
                                </p></li>

                            </ul>
                        </nav>
                        <div id="mobile-menu-wrap"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->