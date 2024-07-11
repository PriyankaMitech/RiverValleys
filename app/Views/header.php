<!DOCTYPE html>
<html lang="en">

<head>
    <title>River Valleys</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="public/assets/styles/bootstrap4/bootstrap.min.css">
    <link href="public/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="public/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="public/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="public/assets/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="public/assets/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="public/assets/styles/responsive.css">
    <style>
    /* Modal styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
        padding-top: 60px;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 600px;
        /* Added for responsiveness */
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
    </style>
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
                                            <li><a href="#" id="registerBtn"><i class="fa fa-user-plus"
                                                        aria-hidden="true"></i>Register</a></li>
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

            <div class="second_nav_container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <nav class="second_navbar">
                                <ul class="second_navbar_menu">
                                    <li><a href="#">Mom & Baby</a></li>
                                    <li><a href="#">Health & Wellness</a></li>
                                    <li><a href="#">Natural</a></li>
                                    <li class="dropdown"><a href="#">Makeup</a>
                                        <div id="makeupDropdown" class="dropdown_container">
                                            <ul class="dropdown_menu">
                                                <li><a href="#">Face</a>
                                                    <ul class="submenu">
                                                        <li><a href="#">Face Primer</a></li>
                                                        <li><a href="#">Concealer</a></li>
                                                        <li><a href="#">Foundation</a></li>
                                                        <li><a href="#">Compact</a></li>
                                                        <li><a href="#">Contour</a></li>
                                                        <li><a href="#">Loose Powder</a></li>
                                                        <li><a href="#">Tinted Moisturizer</a></li>
                                                        <li><a href="#">Blush</a></li>
                                                        <li><a href="#">Bronzer</a></li>
                                                        <li><a href="#">BB & CC Cream</a></li>
                                                        <li><a href="#">Highlighters</a></li>
                                                        <li><a href="#">Setting Spray</a></li>
                                                        <li><a href="#">Makeup Remover</a></li>
                                                        <li><a href="#">Sindoor</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Eye</a>
                                                    <ul class="submenu">
                                                        <li><a href="#">Kajal</a></li>
                                                        <li><a href="#">Eyeliner</a></li>
                                                        <li><a href="#">Mascara</a></li>
                                                        <li><a href="#">Eye Shadow</a></li>
                                                        <li><a href="#">Eye Primer</a></li>
                                                        <li><a href="#">False Eyelashes</a></li>
                                                        <li><a href="#">Eye Brow Enhancers</a></li>
                                                        <li><a href="#">Eye Makeup Remover</a></li>
                                                        <li><a href="#">Contact Lenses</a></li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown"><a href="#">Skincare</a>

                                    </li>
                                    <li class="dropdown"><a href="#">Haircare</a>

                                    </li>
                                    <li><a href="#">Tools & Brushes</a></li>
                                    <li><a href="#">Personal Care</a></li>
                                    <li><a href="#">Men</a></li>
                                    <li><a href="#">Fragrance</a></li>
                                    <li><a href="#">LUXE</a></li>
                                    <li><a href="#">New</a></li>
                                    <li><a href="#">Brands</a></li>
                                    <li><a href="#">Offers</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>