
        <footer class="footer">
            <div class="container">
                    <div class="row mt-3">
                        <div class="col-lg-3">
                            <div class="footer_nav_container d-flex flex-column align-items-center justify-content-lg-start justify-content-center ">
                                <ul class="footer_nav">
                                    <li><a href="#">River Valleys</a></li>
                                    <li><a href="#">Link to Smart ODR</a></li>
                                    <li><a href="#">Investor Relations</a></li>
                                    <li><a href="#">Responsible Disclosure</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Press</a></li>
                                    <li><a href="#">Authenticity</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Who are we?</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer_nav_container d-flex flex-column align-items-center justify-content-lg-start justify-content-center">
                                <ul class="footer_nav">
                                    <li><a href="#">Shipping & Delivery</a></li>
                                    <li><a href="#">Cancellation & Return</a></li>
                                    <li><a href="#">Store Locator</a></li>
                                    <li><a href="#">Frequently asked questions</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="<?=base_url(); ?>raiseaticket">Raise a Ticket</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer_nav_container d-flex flex-column align-items-center justify-content-lg-start justify-content-center text-center">
                                <ul class="footer_nav">
                                    <li><a href="#">River Valleys Pro</a></li>
                                    <li><a href="#">River Valleys Fashion</a></li>
                                    <li><a href="#">River Valleys Man</a></li>
                                    <li><a href="#">New Launches</a></li>
                                    <li><a href="#">Offer Zone</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer_nav_container d-flex flex-column align-items-center justify-content-lg-start justify-content-center text-center">
                                <ul class="footer_nav">
                                    <li><a href="#">Luxe</a></li>
                                    <li><a href="#">Natural</a></li>
                                    <li><a href="#">Fragrance</a></li>
                                    <li><a href="#">Health & Wellness</a></li>
                                    <li><a href="#">Mom and Baby</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

           
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer_nav_container">
                        <div class="cr">©2024 All Rights Reserverd. Designed Developed by <a href="https://www.marketingintelligence.tech/">Mi Tech</a></div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="public/assets/styles/bootstrap4/popper.js"></script>
    <script src="<?=base_url(); ?>public/assets/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="<?=base_url(); ?>public/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="<?=base_url(); ?>public/assets/plugins/easing/easing.js"></script>
    <script src="<?=base_url(); ?>public/assets/plugins/Isotope/isotope.pkgd.min.js"></script>

    <script src="<?=base_url(); ?>public/assets/js/custom.js"></script>

    
    <?php if ($page == 'RiverValleys') { ?>
        
        <script>
        $(document).ready(function() {
            $('.product_slider').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4 // Display 4 items per slide for larger screens
                    }
                }
            });
        });
        </script>
    <?php }else if ($page == 'raiseaticket') { ?>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
        <script src="<?=base_url(); ?>public/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
        <script src="<?=base_url(); ?>public/assets/js/contact_custom.js"></script>
    <?php }else if($page == 'category'){ ?>
        <script src="public/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
        <script src="public/assets/plugins/parallax-js-master/parallax.min.js"></script>
        <script src="public/assets/js/categories_custom.js"></script>
    <?php } ?>



     <!-- CDN for jQuery -->


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
    
</body>
</html>