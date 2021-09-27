<?php 
// header section
require ('include/header.php');

?>
		<body>
            	<!--Navbar   -->
            <?php 
            require ('include/navbar.php');
            ?>
		  <!-- #header -->
	  
			<!-- start banner Area -->
			<section class="inner-banner">

    </section>
    <!-- end inner-banner -->
    <!-- start contact -->
    <section class="contact-section">
        <div class="container">
		<h1 class="font-weight-bold text-center">Contact Us</h1>
            <div class="sec-title text-center mb-3" data-aos="fade-up" data-aos-duration="1000">
                <span class="title">Get In Touch</span>
                <h2>We’d Love To Here From You</h2>
                <div class="divider">
                    <span class="fa fa-mortar-board"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="contact-form p-5" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="border-line"></div>
                        <h3 class="font-weight-bold color-orange">Drop Message</h3>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputName">Name</label>
                                <input class="form-control" id="exampleInputName" placeholder="Enter Name" type="text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email Address</label>
                                <input class="form-control" id="exampleInputEmail1"
                                       placeholder="Enter Email" type="email">
                                <small class="form-text text-muted" id="emailHelp">We'll never share your email with anyone
                                    else.
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNumber">Phone Number</label>
                                <input  class="form-control" id="exampleInputNumber"
                                        placeholder="Enter Number" type="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputMessage">Message</label>
                                <input class="form-control" id="exampleInputMessage"
                                       placeholder="Message" type="email">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="exampleCheck1" type="checkbox">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button class="btn theme-orange border-0 mt-4" type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 ml-minus">
                    <div class="media p-3 align-items-center theme-blue mb-3" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="media-body text-left">
                            <h6 class="color-orange font-weight-bold mb-1">Address</h6>
                            <p class="mb-0">Shardikhola - Bhurjungkhola,
                                Kaski</p>
                        </div>
                        <img class="img-fluid contact-icon" data-aos="zoom-in" data-aos-duration="1050"
                             src="assets/images/icons/location.png" alt="Location">
                    </div>
                    <div class="media p-3 align-items-center theme-blue mb-3" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="media-body text-left">
                            <h6 class="color-orange font-weight-bold mb-1">Email</h6>
                            <p class="mb-0">example@gmail.com</p>
                        </div>
                        <img class="img-fluid contact-icon" data-aos="zoom-in" data-aos-duration="1500"
                             src="assets/images/icons/mail.png" alt="Mail">
                    </div>
                    <div class="media p-3 align-items-center theme-blue" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="media-body text-left">
                            <h6 class="color-orange font-weight-bold mb-1">Contact Number</h6>
                            <p class="mb-0">+977-1234567890</p>
                        </div>
                        <img class="img-fluid contact-icon" data-aos="zoom-in" data-aos-duration="1050"
                             src="assets/images/icons/call.png" alt="Call">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact -->
    <!-- start map -->
    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1010.4417923915515!2d83.9648834364865!3d28.332768617955004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6441853a3310b23b!2sMachhapuchre%20Secondary%20School!5e1!3m2!1sen!2snp!4v1608454162865!5m2!1sen!2snp" class="w-100 border-0" height="450"   allowfullscreen="" ></iframe>
    </section>
			<!-- End contact-page Area -->

			<!-- start footer Area -->
            <?php 
            require ('include/footer.php');
            ?>		

			<!-- End footer Area -->	


			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>