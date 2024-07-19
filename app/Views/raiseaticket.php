<?php include 'header.php'; ?>



	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="#">
						usd
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">cad</a></li>
						<li><a href="#">aud</a></li>
						<li><a href="#">eur</a></li>
						<li><a href="#">gbp</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						English
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">French</a></li>
						<li><a href="#">Italian</a></li>
						<li><a href="#">German</a></li>
						<li><a href="#">Spanish</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="#">shop</a></li>
				<li class="menu_item"><a href="#">promotion</a></li>
				<li class="menu_item"><a href="#">pages</a></li>
				<li class="menu_item"><a href="#">blog</a></li>
				<li class="menu_item"><a href="#">contact</a></li>
			</ul>
		</div>
	</div>

	<div class="container contact_container raise_ticket_c">



		

		<!-- Contact Us -->

		<div class="row">
    <div class="col-lg-12 get_in_touch_col ">
        <div class="get_in_touch_contents form-background " style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; padding:2%" >

			<div class="container">
				<div class="main_slider_content ">
					<img src="http://localhost/RiverValleys/public/assets/images/RV11.png" class="heading_center_image" alt="New Image">
					<h1 class="centered_text">Raise Ticket</h1>
					<!-- <div class="red_button shop_now_button"><a href="#">shop now</a></div> -->
				</div>
			</div>

            <form action="post" >
                <div class="row">
					<div class="col-lg-12 col-md-6 col-12">
                    	<input id="input_name" class="form_input input_name input_ph" type="text" name="name" placeholder="Name" required="required" data-error="Name is required.">
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<input id="input_email" class="form_input input_email input_ph" type="email" name="email" placeholder="Email Id" required="required" data-error="Valid email is required.">
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<input id="input_email" class="form_input input_email input_ph" type="tel" name="email" placeholder="Mobile Number" required="required" data-error="Valid email is required.">
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<input class="form_input input_website input_ph" type="text" name="order_number" placeholder="Order Number" required="required" data-error="Name is required.">
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<input id="input_website" class="form_input input_website input_ph" type="date" name="date" placeholder="Order date" required="required" data-error="Name is required.">
					</div>
				
					<div class="col-lg-12 col-md-12 col-12">
						<select id="complaintType" class="form_input" name="complaintType" required>
							<option value="">Select a reason</option>
							<option value="delivery">Delivery Issue</option>
							<option value="product">Product Issue</option>
							<option value="payment">Payment Issue</option>
							<option value="other">Other</option>
                    	</select>
					</div>
					<div class="col-lg-12 col-md-6 col-12">
                    	<textarea id="input_message" class="input_ph input_message" name="message" placeholder="Complaint Details" rows="3" required data-error="Please, write us a message."></textarea>
					</div>

                </div>
                <div class="button_container">
                    <button id="review_submit" type="submit" class="red_button message_submit_btn trans_300 " value="Submit">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>

	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Newsletter</h4>
						<p>Subscribe to our newsletter and get 20% off your first purchase</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>




<?php include 'footer.php'; ?>
