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
    <link rel="stylesheet" type="text/css" href="public/assets/styles/registerpage.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <?php if ($page == 'RiverValleys') { ?>


    
    <?php }else if ($page == 'raiseaticket') { ?>
        <link rel="stylesheet" href="<?=base_url(); ?>public/assets/plugins/themify-icons/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>public/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>public/assets/styles/contact_styles.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>public/assets/styles/contact_responsive.css">

        <?php }else if($page == 'category'){ ?>
            <link rel="stylesheet" type="text/css" href="public/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
            <link rel="stylesheet" type="text/css" href="public/assets/styles/categories_styles.css">
            <link rel="stylesheet" type="text/css" href="public/assets/styles/categories_responsive.css">

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
                                           <li><a href="#"  data-toggle="modal" data-target="#exampleModal">
                                            <i class="fa fa-user-plus"aria-hidden="true"></i>Register</a></li>
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
                <img src="<?= base_url('public/images/rope2.png') ?>" alt="Ribbon" class="ribbon">
            </div>

            <section class="vh-100 gradient-custom">
    <div class="container registercircle py-5">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="<?= base_url('public/images/bc-13.jpeg') ?>" class="img-fluid rounded" alt="Registration Image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form id="registrationForm" action="<?= base_url('register') ?>" method="post">
                    <!-- Logo -->
                    <div class="text-center mb-4">
                        <img src="<?= base_url('public/images/logo.jpeg') ?>" alt="Logo" class="imgfluidlogo" >
                    </div>
                    
                    <!-- Login / Registration Title -->
                    <h2 class="text-center">Login / Registration</h2>

                    <!-- Mobile Number Input -->
                    <div class="form-outline mb-4">
                        <input type="tel" id="mobileNumber" name="mobile_no" placeholder="Enter Mobile Number" class="form-control form-control-lg" required />
                        <div class="invalid-feedback" id="mobileNumberError">
                            Please enter the mobile number.
                        </div>
                    </div>

                    <!-- OTP Input and Buttons -->
                    <div class="form-OTP mb-4 d-flex align-items-center">
                        <input type="text" id="form1Example23" name="Login_otp" placeholder="Enter OTP" class="form-control form-control-lg mr-2" style="display: none;" required />
                        <button id="sendOtpBtn" type="button" class="btn btn-primary btn-lg shadow-sm px-4 rounded-pill" style="width: 9rem; height: 3rem; border-radius: 80%; font-size: 15px; margin-left: 3rem; background: linear-gradient(to right, #ffcc33, #ff9900, #cc3300); border: none;">Send OTP</button>
                        <button id="submitOtpBtn" type="submit" class="btn btn-primary btn-lg shadow-sm px-4 rounded-pill" style="display: none;">Submit</button>
                    </div>

                    <!-- Error Alert -->
                    <div class="alert alert-danger" id="errorAlert" style="display: none;"></div>
                </form>
            </div>
        </div>
    </div>
</section>


        </div>
    </div>
</div>
</div>
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

    document.addEventListener("DOMContentLoaded", function() {
    const errorMsg = document.getElementById("errorMsg");
    errorMsg.style.display = 'none';
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
<script>
    
    $(document).ready(function () {
        $('#sendOtpBtn').click(function () {
            const mobileNumber = $('#mobileNumber').val();
            $.ajax({
                url: '<?= base_url('sendotp') ?>',
                method: 'POST',
                data: { mobile_no: mobileNumber },
                success: function (response) {
                    if (response.success) {
                        $('#sendOtpBtn').hide();
                        $('#form1Example23').show();
                        $('#submitOtpBtn').show();
                        alert('OTP sent successfully!');
                        // Log the OTP for debugging (remove this in production)
                        console.log('OTP:', response.otp);
                    } else {
                        alert('Failed to send OTP.');
                    }
                },
                error: function () {
                    alert('An error occurred while sending OTP.');
                }
            });
        });

        $('#registrationForm').submit(function (e) {
            e.preventDefault();
            const mobileNumber = $('#mobileNumber').val();
            const otp = $('#form1Example23').val();
            $.ajax({
                url: '<?= base_url('register') ?>',
                method: 'POST',
                data: { mobile_no: mobileNumber, Login_otp: otp },
                success: function (response) {
                    if (response.success) {
                        alert('OTP verification completed');
                        location.reload();
                        // Redirect or update UI as needed
                    } else {
                        $('#mobileNumberError').text('Invalid OTP').show();
                    }
                },
                error: function () {
                    alert('An error occurred while verifying OTP.');
                }
            });
        });
    });
</script>