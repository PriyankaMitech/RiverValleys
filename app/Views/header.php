<?php
$uri = new \CodeIgniter\HTTP\URI(current_url(true));
$pages = $uri->getSegments();
$page = $uri->getSegment(count($pages));
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <title>River Valleys</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>public/assets/styles/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">

    <link rel="stylesheet" type="text/css" href="public/assets/styles/bootstrap4/bootstrap.min.css">
    <link href="public/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="public/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="public/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="public/assets/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="public/assets/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="public/assets/styles/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            /* z-index: 1; */
            left: 0;
            top: 0;
            width: 150%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }
        .modal.fade .modal-dialog {
            transform: translate(0, -100%);
            transition: transform 0.3s ease-out;
        }

        .modal.show .modal-dialog {
            transform: translate(0, 0);
        }
        .modal-content {
            background-color: transparent;
            margin-left: -30rem;
            padding: 20px;
            border: none;
            width: 150%;
            border-radius: 50%;
            animation: modalFadeIn 0.5s ease-in-out;
           
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Second Navbar */
        .second_nav_container {
            border-bottom: 1px solid #e5e5e5;
            background-color: #f8f8f8;
            width: 100%;
        }

        .second_navbar {
            padding: 10px 0;
        }

        .second_navbar_menu {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .second_navbar_menu li {
            margin: 0 10px;
            position: relative;
        }

        .second_navbar_menu a {
            color: #333;
            text-decoration: none;
            font-size: 14px;
        }

        .dropdown_container {
            display: none;
            position: absolute;
            background-color: #fff;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Submenu Items */
        .dropdown_menu>li {
            display: inline-block;
            /* Change from block to inline-block */
            margin-right: 10px;
            /* Optional: Add space between items */
        }

        .submenu {
            display: none;
        }

        .dropdown:hover .dropdown_container {
            display: block;
            width: auto;
            /* Ensure it doesn't force items into new lines */
            white-space: nowrap;
            /* Prevent line breaks */
        }

        .dropdown_container ul {
            padding: 0;
            margin: 0;
            list-style-type: none;
        }

        .dropdown_container a {
            display: block;
            padding: 12px 16px;
            text-decoration: none;
            color: black;
        }

        .dropdown_container a:hover {
            background-color: #ddd;
        }

        .submenu>li {
            display: inline-block;
            margin-right: 10px;
            /* Space between submenu items */
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar_menu,
            .navbar_user {
                margin-top: 10px;
            }

            .navbar_menu li,
            .navbar_user li {
                margin: 0;
                padding: 5px 0;
                text-align: center;
            }

            .second_navbar_menu {
                flex-wrap: wrap;
            }

            .second_navbar_menu li {
                margin: 5px;
            }

            .dropdown_container {
                position: static;
                display: none;
                padding: 0;
                border: none;
                background: transparent;
            }

            .dropdown:hover .dropdown_container {
                display: block;
            }

            .dropdown_menu ul {
                position: static;
                display: none;
                width: 100%;
                padding: 0;
                margin: 0;
            }

            .dropdown:hover .dropdown_menu ul {
                display: block;
                position: static;
            }
        }

        form h2 {
        font-size: 27px;
        font-weight: 400;
        text-align: center;
        color: #fff;
        transition: color 0.3s, transform 0.3s;
        }

        form h2:hover {
            color: #116633;
            transform: scale(1.1);
        }

        .ortext {
            text-align: center;
            padding-left: 9rem;
        }
        .form-OTP{
            display: 
        }
        #submitotp{
            padding-left: 10px;
        }
        #submitotp:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
    .offset-xl-1 {
        margin-left: 1.333333%;
    }
    .rounded {
        border-radius: 16.50rem !important;
    }
        .ribbon-container {
            position: relative;
            text-align: center;
            margin-bottom: 0rem;
            background: none;
        }

        .ribbon {
            width: 188px;
            height: auto;
            background: transparent;
            margin-left: 19rem !important;
            margin-top: -17rem;
            margin-bottom: -10rem;
        }
        .registercircle{
            background: linear-gradient(to right, #040505, #266b49, #88e0d6, #b9e5e0); 
            border-radius: 50%; 
            width: 96%; 
            margin-top: -5rem; 
            margin-left: 4rem;
        }
    </style>
    <?php if ($page == 'RiverValleys') { ?>


    
    <?php }else if ($page == 'raiseaticket') { ?>
        <link rel="stylesheet" href="<?=base_url(); ?>public/assets/plugins/themify-icons/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>public/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>public/assets/styles/contact_styles.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>public/assets/styles/contact_responsive.css">

        <?php } ?>
</head>

<body>

    <div class="super_container">
        <header class="header trans_300">
            <!-- First Navbar -->
            <div class="main_nav_container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <div class="logo_container">
                                <a href="#">River <span>Valleys</span></a>
                            </div>
                            <nav class="navbar">
                                <ul class="navbar_menu">
                                    <li><a href="<?php echo base_url(''); ?>">home</a></li>
                                    <li><a href="<?php echo base_url('category'); ?>">Categories</a></li>
                                    <li><a href="#">Brands</a></li>
                                    <li><a href="#">pages</a></li>
                                    <li><a href="#">blog</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                                <ul class="navbar_user">
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                                    <li class="checkout">
                                        <a href="<?php echo base_url('addtocart'); ?>">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            <span id="checkout_items" class="checkout_items">2</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="navbar_menu">
                                    <li class="account">
                                        <a href="#">
                                            My Account
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="account_selection">
                                            <li><a href="#" id="signinBtn"><i class="fa fa-sign-in"
                                                        aria-hidden="true"></i>Sign In</a></li>
                                                        <li><a href="#"  data-toggle="modal" data-target="#exampleModal"><i class="fa fa-user-plus"aria-hidden="true"></i>Register</a></li>

                                        </ul>
                                    </li>
                                </ul>
                                <div class="hamburger_container">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="fs_menu_overlay"></div>


        
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
         
             <!-- Ribbon and Circle Image -->
            <div class="ribbon-strip">
                <img src="public/images/rope2.png" alt="Ribbon" class="ribbon">
            </div>

            <section class="vh-100 gradient-custom">
                <div class="container registercircle py-5">
                    <div class="row d-flex align-items-center justify-content-center h-100">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <img src="public/images/bc-13.jpeg" class="img-fluid rounded" alt="Registration Image">
                    </div>
                        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                        <form id="registrationForm" action="<?= base_url('register') ?>" method="post">
                            <h2 class="text-center">Login / Registration</h2>

                            <div class="form-outline mb-4">
                                <input type="tel" id="mobileNumber" name="mobile_no" placeholder="Enter Mobile Number" class="form-control form-control-lg" required />
                                <div class="invalid-feedback" id="mobileNumberError">
                                    Please enter a valid mobile number.
                                </div>
                            </div>

                            <div class="form-OTP mb-4 d-flex align-items-center">
                                <input type="number" id="form1Example23" name="Login_otp" placeholder="Enter OTP" class="form-control form-control-lg mr-2" required />
                                <button id="submitotp" class="btn btn-primary btn-lg shadow-sm px-4 rounded-pill">Submit</button>
                            </div>

                            <?php if(isset($validation)): ?>
                                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                            <?php endif; ?>
                        </form>
                        </div>
                    </div>
                </div>
            </section>
            </div>
        </div>
    </div>

