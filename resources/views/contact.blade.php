<!DOCTYPE html>
<html class="no-js" lang="en-US">
    <head>
		<!-- metas -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="School Responsive HTML5 Template">
		
		
		<!-- Title -->
        <title>NEDUBD SCHOOL</title>
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('fontend')}}/assets/images/favicon.png" />
		<!-- Stylesheet -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('fontend')}}/assets/css/bootstrap.min.css">
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('fontend')}}/assets/css/fontawesome.min.css">
		<!-- normalize -->
		<link rel="stylesheet" href="{{asset('fontend')}}/assets/css/normalize.css">
		<!-- Jquery Ul -->
		<link rel="stylesheet" href="{{asset('fontend')}}/assets/css/jquery-ui.min.css">
		<!-- Jquery Ui Theme -->
		<link rel="stylesheet" href="{{asset('fontend')}}/assets/css/jquery-ui.theme.min.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="{{asset('fontend')}}/assets/css/magnific-popup.css">
		<!-- Owl Carousel -->
		<link rel="stylesheet" href="{{asset('fontend')}}/assets/css/owl.carousel.min.css">
        <!-- Main Stylesheet --> 
        <link rel="stylesheet" href="{{asset('fontend')}}/assets/css/style.css">
        <link rel="stylesheet" href="{{asset('fontend')}}/assets/css/contact.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('fontend')}}/assets/css/responsive.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
		
    </head>
	
    <body>
		<script src="https://kit.fontawesome.com/bf499eed93.js" crossorigin="anonymous"></script>
        <!--[if IE]>
    		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  		<![endif]-->

        <!-- Start header Area -->
        <header class="header-area">
			<div class="header-top-area">
				<div class="container">
					<div class="row">
						<div class="col-xl-8">
							<div class="header-top-left-menu">
								<ul>
									<li><a href="#"><i class="fas fa-envelope"></i>bis@gmail.com</a></li>
									<li><a href="#"><i class="fas fa-phone"></i>+8804478777911</a></li>
								</ul>
							</div>
                        </div>
						<div class="col-xl-4">
							<div class="header-top-right-admin">
								<ul>
                                
                                    <li><a href="#">mail</a></li>
                                    <a href="{{ route('login') }}">Login</a>
                                    
								</ul>
							</div>
                        </div>
                        
					</div>
				</div>
			</div>
			<div class="header-bottom-area">
				<div class="container">
					<div class="row align-item-center">
						<div class="col-xl-8">
							<div class="school-logo">
								<a href="#">
									<img src="{{asset('fontend')}}/assets/images/logo/logo-2.png" alt="School Logo">
								</a>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="social-icon-area">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-main-menu-area">
				<div class="container">
					<div class="row align-item-center">
						<div class="col-xl-9">
							<div class="header-manu-content">
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">Our School</a></li>
									<li><a href="#">About Us</a></li>
									<li>
									<a href="#">Admission</a>
										<ul class="school-dropdown">
											<li><a href="#" >dropdown Item 01</a></li>
											<li><a href="#">dropdown Item 01</a></li>
											<li><a href="#">dropdown Item 01</a></li>
											<li><a href="#">dropdown Item 01</a></li>
										</ul>
									</li>
									<li>
									<li><a href="#">Students</a></li>
									<li><a href="#">Result</a></li>
									<li><a href="#">Notice</a></li>
								    <li><a href="{{ route('contact') }}">contact us</a></li>
									</li>

								</ul>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="manu-search-box">
								<input type="text" placeholder="Search for anything...">
								<a href="#"><i class="fas fa-search"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

    <div class="background-image">
        <div class="card-container">
            <div class="card">
				<i class="fa-solid fa-phone fa-shake fa-2xl" style="color: #0dfd11;padding-top: 15px; padding-bottom: 15px"></i>
				<h2 style="padding: 10px;"></h2>
                <p>+8801654829</p>
            </div>

            <div class="card">
				<i class="fa-solid fa-envelope fa-bounce fa-2xl" style="color: #0ae623; padding-top: 15px; padding-bottom: 15px"></i>
                <h2>school@gmail.com</h2>
				
                <p>This is the second card content.</p>
            </div>

            <div class="card">
				<i class="fa-solid fa-mug-hot fa-beat fa-2xl" style="color: #17f207; padding-top: 15px; padding-bottom: 25px"></i>
                <h2>We are always free for coffee</h2>
                <p style="color:black">"Brings coffee when you come"</p>
            </div>
        </div>
    </div>
		
          
          <div class="container_l">
                <div class="school_pic">
                  <img src="fontend/assets/images/gallery/1.jpg" alt="School Picture"/>
                </div>
                <form id="contact" action="" method="post">
                  <h1 style="color: red">Step to Success School</h1>
                  <h4>Contact us for any related quote</h4>
                  <fieldset>
                    <input placeholder="Your name" type="text" tabindex="1" required autofocus>
                  </fieldset>
                  <fieldset>
                    <input placeholder="Your Email Address" type="email" tabindex="2" required>
                  </fieldset>
                  <fieldset>
                    <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3">
                  </fieldset>
                  <fieldset>
                    <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
                  </fieldset>
                  <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                  </fieldset>
                </form>
              </div>
            </div>
            <!-- Your existing HTML content -->
        
          







          


          <div class="footer-area">
			<div class="footer-top-area">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="logo_content_widg">
								<div class="logo_content_f">
									<img src="{{asset('fontend')}}/assets/images/logo/logo.png" alt="logo">
									<h2>Bangladesh International School</h2>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<ul>
									<li><a href="#"><i class="fas fa-envelope"></i>bis@gmail.com</a></li>
									<li><a href="#"><i class="fas fa-phone"></i>+8804478777911</a></li>
									<li><a href="#"><i class="fas fa-map-marker-alt"></i>Mirpur, Dhaka, Bangladesh</a></li>
								</ul>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="map-area">
								<h3>Our Map</h3>
								<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14599.57695452796!2d90.3656686!3d23.8223596!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1582184744442!5m2!1sen!2sbd" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="footer-gallery">
								<h3>Recent Gallery</h3>
								<div class="footer-img">
									<div class="footer-gallery-item">
										<img src="{{asset('fontend')}}/assets/images/gallery/1.jpg" alt="gallery">
										<div class="overlay">
											<div class="img-overlay">
												<a class="popup" href="assets/images/gallery/1.jpg"><i class="fas fa-search"></i></a>
											</div>
										</div>
									</div>
									<div class="footer-gallery-item">
										<img src="{{asset('fontend')}}/assets/images/gallery/2.jpg" alt="gallery">
										<div class="overlay">
											<div class="img-overlay">
												<a class="popup" href="{{asset('fontend')}}/assets/images/gallery/2.jpg"><i class="fas fa-search"></i></a>
											</div>
										</div>
									</div>
									<div class="footer-gallery-item">
										<img src="{{asset('fontend')}}/assets/images/gallery/3.png" alt="gallery">
										<div class="overlay">
											<div class="img-overlay">
												<a class="popup" href="{{asset('fontend')}}/assets/images/gallery/3.png"><i class="fas fa-search"></i></a>
											</div>
										</div>
									</div>
									<div class="footer-gallery-item">
										<img src="{{asset('fontend')}}/assets/images/gallery/4.png" alt="gallery">
										<div class="overlay">
											<div class="img-overlay">
												<a class="popup" href="{{asset('fontend')}}/assets/images/gallery/4.png"><i class="fas fa-search"></i></a>
											</div>
										</div>
									</div>
									<div class="footer-gallery-item">
										<img src="{{asset('fontend')}}/assets/images/gallery/5.png" alt="gallery">
										<div class="overlay">
											<div class="img-overlay">
												<a class="popup" href="{{asset('fontend')}}/assets/images/gallery/5.png"><i class="fas fa-search"></i></a>
											</div>
										</div>
									</div>
									<div class="footer-gallery-item">
										<img src="{{asset('fontend')}}/assets/images/gallery/5.png" alt="gallery">
										<div class="overlay">
											<div class="img-overlay">
												<a class="popup" href="{{asset('fontend')}}/assets/images/gallery/5.png"><i class="fas fa-search"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom-area">
				<div class="container">
					<div class="row align-item-center">
						<div class="col-xl-8 col-md-6">
							<div class="copyright-area">
								<p class="copywrite">Copyright &copy; 2020. All Rights Reserved. Developed by <a target="_blank" href="https://baitsbd.com/">BAITS</a></p>
							</div>
						</div>
						<div class="col-xl-4 col-md-6">
							<div class="footer-icon social-icon">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Area -->
		
		<!-- Js Files -->
		<!-- modernizr -->
        <script src="{{asset('fontend')}}/assets/js/vendor/modernizr-3.8.0.min.js"></script>
		<!-- jQuery -->
        <script src="{{asset('fontend')}}/assets/js/vendor/jquery-3.4.1.min.js"></script>
		<!-- Bootstrap Popper -->
        <script src="{{asset('fontend')}}/assets/js/popper.js"></script>
		<!-- Bootstrap -->
		<script src="{{asset('fontend')}}/assets/js/bootstrap.min.js"></script>
		<!-- jquery ui -->
		<script src="{{asset('fontend')}}/assets/js/jquery-ui.min.js"></script>
		<!-- tickerNews -->
		<script src="{{asset('fontend')}}/assets/js/jquery.tickerNews.min.js"></script>
		<!-- Magnific Popup -->
		<script src="{{asset('fontend')}}/assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Owl Carousel -->
		<script src="{{asset('fontend')}}/assets/js/owl.carousel.min.js"></script>
		
		<!-- Custom Scripts -->
        <script src="{{asset('fontend')}}/assets/js/custom.js"></script>
    </body>
</html>