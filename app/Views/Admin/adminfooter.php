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
            $('#add_product').validate({
                rules: {
                    productname: {
                        required: true,
                    },
                    brand_name: {
                        required: true,
                    },
                    price: {
                        required: true,
                        number: true,
                    },
                    description: {
                        required: true,
                    },
                    Ingredients: {
                        required: true,
                    },
                    howtouse: {
                        required: true,
                    },
                    product_image1: {
                        required: true,
                    },
                    product_image2: {
                        required: true,
                    },
                    product_image3: {
                        required: true,
                    },
                    product_image4: {
                        required: true,
                    },
                    
                        
                },
                messages: {
                    productname: {
                        required: 'Please enter product name.',
                    },
                    brand_name: {
                        required: 'Please enter brand name.',
                    },
                    price: {
                        required: 'Please enter price.',
                        number: 'Please enter a valid number.',
                    },
                    description: {
                        required: 'Please enter description.',
                    },
                    Ingredients: {
                        required: 'Please enter ingredients.',
                    },
                    howtouse: {
                        required: 'Please enter how to use.',
                    },
                    product_image1: {
                        required: 'Please enter image.',
                    },
                    product_image2: {
                        required: 'Please enter image.',
                    },
                    product_image3: {
                        required: 'Please enter image.',
                    },
                    product_image4: {
                        required: 'Please enter image.',
                    },

                                
                }
            });
            // Hide flash messages after 10 seconds
            setTimeout(function() {
                $('.flash-message').fadeOut('slow');
            }, 5000); // 10000 milliseconds = 10 seconds
      
        });
  </script>


</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>