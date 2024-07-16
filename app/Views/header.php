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
            background-color: #fefefe;
            margin-left: -30rem;
            padding: 20px;
            border: 1px solid #888;
            width: 150%;
            border-radius: 1.3rem;
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
        font-size: 1.9rem;
        font-weight: 400;
        text-align: center;
        color: #fff;
        transition: color 0.3s, transform 0.3s;
        }

        form h2:hover {
            color: #49d3d8;
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
                                        <div class="dropdown_container">
                                            <ul class="dropdown_menu">
                                                <li><a href="#">Lips</a>
                                                    <ul class="submenu">
                                                        <li><a href="#">Lipstick</a></li>
                                                        <li><a href="#">Lip Gloss</a></li>
                                                        <li><a href="#">Lip Liner</a></li>
                                                        <li><a href="#">Lip Balm</a></li>
                                                        <li><a href="#">Lip Crayon</a></li>
                                                        <li><a href="#">Lip Stain</a></li>
                                                    </ul>
                                                </li>
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
                                    <li class="dropdown"><a href="#">Skincare</a></li>
                                    <li class="dropdown"><a href="#">Haircare</a></li>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <!-- <section class="vh-100 gradient-custom">
                <div class="container py-5" style="background-color: #E1D2EA; border-radius: 10%">
                    <div class="row d-flex align-items-center justify-content-center h-100">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <img src="public/images/bc-10.jpeg" class="img-fluid rounded" alt="Registration Image">
                    </div>
                        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                            <form id="registrationForm">
                                <h2 class="text-center">Login / Registration</h2>
                            
                                <div class="form-outline mb-4">
                                    <input type="tel" id="mobileNumber" placeholder="Enter Mobile Number" class="form-control form-control-lg" required />
                                    <div class="invalid-feedback" id="mobileNumberError">
                                        Please enter a valid mobile number.
                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="form1Example23" placeholder="Enter Password" class="form-control form-control-lg" required />
                                </div>

                                <div class="d-flex justify-content-around align-items-center mb-4">

                                    <div class="form-check">
                                        <input class="form-check-input mt-2" type="checkbox" value="" id="form1Example3" checked />
                                        <label class="form-check-label mt-1" for="form1Example3"> Remember me </label>
                                    </div>
                                    <a href="#!">Forgot password?</a>
                                </div>

                                <div class="form-check mb-4">
                                    <input class="form-check-input ml-3" type="checkbox" value="" id="terms" required />
                                    <label class="form-check-label ml-3" for="terms">
                                        I agree to the <a href="terms-and-conditions.html">terms and conditions</a>
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

                                <div class="divider d-flex align-items-center my-4">
                                    <p class="ortext fw-bold mx-3 mb-0">OR</p>
                                </div>

                                <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!" role="button">
                                    <i class="fa-brands fa-google"></i> Continue with Google</a>
                            </form>
                        </div>
                    </div>
                </div>
            </section> -->

            <section class="vh-100 gradient-custom">
                <div class="container py-5" style="background: linear-gradient(to right, #040505, #266b49, #0de05e, #266b49, #040505); border-radius: 10%">
                    <div class="row d-flex align-items-center justify-content-center h-100">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <img src="public/images/bc-13.jpeg" class="img-fluid rounded" alt="Registration Image">
                    </div>
                        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                            <form id="registrationForm">
                                <h2 class="text-center">Login / Registration</h2>
                                
                                <!-- Mobile Number input -->
                                <div class="form-outline mb-4">
                                    <input type="tel" id="mobileNumber" placeholder="Enter Mobile Number" class="form-control form-control-lg" required />
                                    <div class="invalid-feedback" id="mobileNumberError">
                                        Please enter a valid mobile number.
                                    </div>
                                </div>

                                <!-- OTP input -->
                                <div class="form-OTP mb-4 d-flex align-items-center">
                                    <input type="number" id="form1Example23" placeholder="Enter OTP" class="form-control form-control-lg mr-2" required />
                                    <button id="submitotp" class="btn btn-primary btn-lg shadow-sm px-4 rounded-pill">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </section>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <!-- CDN for jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            // Check if the modal is triggered correctly
            $('#exampleModal').on('show.bs.modal', function (e) {
                console.log('Modal is triggered and will be shown.');
            });

            // Ensure content inside modal is loaded correctly
            $('#exampleModal').on('shown.bs.modal', function (e) {
                console.log('Modal is now visible.');
            });
        });
    </script>
    <script>
    const input = document.querySelector("#mobileNumber");
    const errorMsg = document.querySelector("#mobileNumberError");
    const form = document.querySelector("#registrationForm");

    const iti = window.intlTelInput(input, {
        initialCountry: "auto",
        separateDialCode: true,
        geoIpLookup: function(callback) {
            fetch('https://ipinfo.io/json', { headers: { 'Accept': 'application/json' }})
                .then(response => response.json())
                .then(data => callback(data.country))
                .catch(() => callback('us'));
        },
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
    });

    form.addEventListener("submit", function(event) {
        const isValid = iti.isValidNumber();
        if (!isValid) {
            input.classList.add("is-invalid");
            errorMsg.style.display = 'block';
            event.preventDefault();
        } else {
            input.classList.remove("is-invalid");
            errorMsg.style.display = 'none';
        }
    });

    input.addEventListener('input', function() {
        const isNumeric = /^\d+$/;
        const maxLength = iti.getSelectedCountryData().dialCode.length + 10;
        let value = input.value.replace(/\D/g, '');

        if (value.length > maxLength) {
            value = value.substring(0, maxLength);
        }

        input.value = value;

        if (iti.isValidNumber() && isNumeric.test(value)) {
            input.classList.remove("is-invalid");
            errorMsg.style.display = 'none';
        } else {
            input.classList.add("is-invalid");
            errorMsg.style.display = 'block';
        }
    });

    input.addEventListener('countrychange', function() {
        const isValid = iti.isValidNumber();
        if (isValid) {
            input.classList.remove("is-invalid");
            errorMsg.style.display = 'none';
        } else {
            input.classList.add("is-invalid");
            errorMsg.style.display = 'block';
        }
    });
</script>
    
</body>

</html>
