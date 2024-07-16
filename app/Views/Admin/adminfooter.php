<footer class="main-footer">
        <div class="footer-left">
          <strong>2024 © All Rights are reserved | <a href="http://www.marketingintelligence.tech">MI Tech Solutions</a></strong>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <script src="<?=base_url(); ?>public/dashboard/js/jquery.min.js"></script>

  <!-- General JS Scripts -->
  <script src="<?=base_url(); ?>public/dashboard/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="<?=base_url(); ?>public/dashboard/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="<?=base_url(); ?>public/dashboard/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="<?=base_url(); ?>public/dashboard/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="<?=base_url(); ?>public/dashboard/js/custom.js"></script>
  <script src="<?=base_url(); ?>public/dashboard/js/jquery.validate.min.js"></script>

  <script>
        $(document).ready(function() {

            setTimeout(function() {
                $('.flash-message').fadeOut('slow');
            }, 5000); // 10000 milliseconds = 10 seconds
      
            
            $.validator.addMethod("validEmail", function(value, element) {
                return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(value);
            }, "Please enter a valid email address.");

            $.validator.addMethod("validMobileNumber", function(value, element) {
                return this.optional(element) || /^\d{10}$/i.test(value);
            }, "Please enter a valid 10-digit mobile number.");

            $.validator.addMethod('lettersOnly', function(value, element) {
                return /^[a-zA-Z\s]*$/.test(value);
            }, 'Please enter letters only');

            $.validator.addMethod('customPassword', function(value, element) {
                    // Password must contain at least one uppercase letter, one lowercase letter, one number, and one symbol. It should be at least 8 characters long.
                    return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,}$/.test(value);
                },
                'Password must contain at least one uppercase letter, one lowercase letter, one number, and one symbol (!@#$%^&*) and be at least 8 characters long'
            );

         

            $('#add_menu_form ').validate({
                rules: {
                    menu_name: {
                        required: true,
                    },
                    url_location: {
                        required: true,

                    },
                },
                messages: {
                    menu_name: {
                        required: 'Please enter menu name.',
                    },
                    url_location: {
                        required: 'Please enter URL location.',
                    },
                }
                
            });
         
            // Hide flash messages after 10 seconds
           
        });


    // Initialize form validation
        $('#user_form').validate({
            rules: {
                name: {
                    required: true,
                    lettersOnly: true
                },
                email_id: {
                    required: true,
                    validEmail: true
                },
                mobile_no: {
                    required: true,
                    validMobileNumber: true
                },
              
                password: {
                    required: true,
                    customPassword: true
                },
                cpassword: {
                    required: true,
                    equalTo: '#password'
                },
               
            },
            messages: {
                name: {
                    required: 'Please enter name.',
                    lettersOnly: 'Please enter letters only'
                },
                email_id: {
                    required: 'Please enter email address',
                    validEmail: 'Please enter a valid email address'
                },
                mobile_no: {
                    required: 'Please enter Mobile number.'
                },
             
                password: {
                    required: "Password is required.",
                    customPassword: "Password must contain at least one uppercase letter, one lowercase letter, one number, one symbol, and be at least 8 characters long"
                },
                cpassword: {
                    required: 'Please confirm your password.',
                    equalTo: 'Passwords do not match.'
                },
               
            },
            // Error placement function to customize error display for radio buttons
         
        });

  </script>


</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>