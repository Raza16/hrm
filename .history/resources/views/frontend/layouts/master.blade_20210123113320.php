<!DOCTYPE html>
<html lang="zxx">
	<head>
		<!-- Meta Tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='copyright' content='pavilan'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title Tag  -->
		<title>DATech</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/favicon.png" href="img/favicon1.png">
		
		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		
		<!-- Bizwheel Plugins CSS -->
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="{{asset('css/cubeportfolio.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
		<link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/magnific-popup.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/owl-carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}">
		<!-- <link href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" rel="stylesheet"> -->
		<!-- Bizwheel Stylesheet -->  
		<link rel="stylesheet" href="{{asset('css/reset.css')}}">
		<link rel="stylesheet" href="{{asset ('css/responsive.css')}}">
		
		<!-- Bizwheel Colors -->
	
		<link rel="stylesheet" href="{{asset('css/hover-min.css')}}">
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
		<!--<link rel="stylesheet" href="css/skins/skin-1.css">
		<!--<link rel="stylesheet" href="css/skins/skin-2.css">-->
		<!--<link rel="stylesheet" href="css/skins/skin-3.css">-->
		<!--<link rel="stylesheet" href="css/skins/skin-4.css">-->
		
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
	</head>
	<body id="bg">
	
		<!-- Boxed Layout -->
		<div id="page" class="site boxed-layout"> 
		
		<!-- Preloader -->
		<div class="preeloader">
			<div class="preloader-spinner"></div>
		</div>
		<!--/ End Preloader -->
	
		<!-- Header -->
		<header class="header">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container-fluid" >
					<div class="row">
						<div class="col-lg-8 col-12">
							<!-- Top Contact -->
							<div class="top-contact">
								<div class="single-contact"><i class="fa fa-phone"></i>Phone: +(600) 125-4985-214</div> 
								<div class="single-contact"><i class="fa fa-envelope-open"></i>Email: info@thedatech.com</div>	
								{{-- <div class="single-contact"><i class="fa fa-clock-o"></i>Opening: 08AM - 09PM</div> --}}
							</div>
							<!-- End Top Contact -->
						</div>	
						<div class="col-lg-4 col-12">
							<div class="topbar-right">
								<!-- Social Icons -->
								<ul class="social-icons">
									<li><a href="https://www.facebook.com/thedatech" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://local.google.com/place?id=15645728385480786957&use=srp#fpstate=lie" target="_blank"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="https://www.linkedin.com/company/thedatech" target="_blank"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="mailto:info@thedatech.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
								</ul>															
								<div class="button">
									<a href="{{url('/contact')}}" class="bizwheel-btn">Get a Quote</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Topbar -->
			<!-- Middle Header -->
			<div class="middle-header">
				<div class="container-fliud" style="margin-left: 30px; margin-right: 50px;">
					<div class="row">
						<div class="col-12">
							<div class="middle-inner">
								<div class="row">
									<div class="col-lg-2 col-md-3 col-12">
										<!-- Logo -->
										<div class="logo">
											<!-- Image Logo -->
											<div class="img-logo">
												<a href="{{url('/')}}">
													<img src="img/logo1.png" width="120px;" style="margin-top: 5px;margin-bottom: 5px;" alt="#">
												</a>
											</div>
										</div>								
										<div class="mobile-nav"></div>
									</div>
									<div class="col-lg-10 col-md-9 col-12">
										<div class="menu-area">
											<!-- Main Menu -->
											<nav class="navbar navbar-expand-lg">
												<div class="navbar-collapse">	
													<div class="nav-inner">	
														<div class="menu-home-menu-container">
															<!-- Naviagiton -->
															<ul id="nav" class="nav main-menu menu navbar-nav">
															<li><a href="{{url('/')}}">Home</a></li>
															<li><a href="{{url('/services')}}">Services</a></li>
																{{-- <li class="icon-active"><a href="{{url('/services')}}">Our Services <i class="fa fa-angle-down"></i></a>
																	<ul class="sub-menu">
																		<li><a href="{{url('/single-services')}}">Single Services</a></li>
																	</ul>
																</li> --}}
																<li><a href="{{url('/portfolio')}}">Portfolio</a></li>
																{{-- <li class="icon-active"><a href="{{url('/portfolio')}}">Our Portfolio <i class="fa fa-angle-down"></i></a>
																	<ul class="sub-menu">
																		<li><a href="{{url('single-portfolio')}}">Single Portfolio</a></li>
																		<li><a href="{{url('/faqs')}}">FAQs</a></li>
																		<li><a href="{{url('/our-team')}}">Our Team</a></li>
																		<li><a href="{{url('/pricing')}}">Pricing</a></li>
																	</ul>
																</li> --}}
																{{-- <li class="icon-active"><a href="#">Blog <i class="fa fa-angle-down"></i></a>
																	<ul class="sub-menu">
																		<li><a href="{{url('/blog')}}">Blog Grid</a></li>
																		<li><a href="{{url('/blog-single')}}">Blog Single</a></li>
																	</ul>
																</li> --}}
																<li><a href="{{url('/blog')}}">Blog</a></li>
																<li><a href="{{url('/our-team')}}">Our Team</a></li>
																		<li><a href="{{url('/pricing')}}">Pricing</a></li>
																<li><a href="{{url('/faqs')}}">FAQs</a></li>
																<li><a href="{{url('/about')}}">About Us</a></li>
																{{-- <li class="icon-active"><a href="#">Pages <i class="fa fa-angle-down"></i></a>
																	<ul class="sub-menu">
																		<li><a href="{{url('/about')}}">About Us</a></li>
																		<li><a href="{{url('/404')}}">404</a></li>
																	</ul>
																</li> --}}
																<li><a href="{{url('/contact')}}">Contact Us</a></li>
															</ul>
															<!--/ End Naviagiton -->
														</div>
													</div>
												</div>
											</nav>
											<!--/ End Main Menu -->	
											<!-- Right Bar -->
											<div class="right-bar">
												<!-- Search Bar -->
												<ul class="right-nav">
													<li class="top-search"><a href="#0"><i class="fa fa-search"style="padding-top:8px;"></i></a></li>
													<li class="bar"><a class="fa fa-bars"></a></li>
												</ul>
												<!--/ End Search Bar -->
												<!-- Search Form -->
												<div class="search-top">
													<form action="#" class="search-form" method="get">
														<input type="text" name="s" value="" placeholder="Search here"/>
														<button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
													</form>
												</div>
												<!--/ End Search Form -->
											</div>	
											<!--/ End Right Bar -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Middle Header -->
			<!-- Sidebar Popup -->
			<div class="sidebar-popup">
				<div class="cross">
					<a class="btn"><i class="fa fa-close"style="padding-top:8px;"></i></a>
				</div>
				<div class="single-content">
					<h4>About ADTech</h4>
					<p>The main component of a healthy environment for self esteem is that it needs be nurturing. It should provide unconditional warmth.</p>
					<!-- Social Icons -->
					<ul class="social">
						<li><a href="https://www.facebook.com/thedatech"><i class="fa fa-facebook" style="padding-top:8px;"></i></a></li>
						<li><a href="https://www.linkedin.com/company/thedatech"><i class="fa fa-linkedin" style="padding-top:8px;"></i></a></li>
					</ul>
				</div>
				<div class="single-content">
					<h4>Important Links</h4>   
					<ul class="links">
						<li><a href="{{url('/about')}}">About Us</a></li>
						<li><a href="{{url('/services')}}">Our Services</a></li>
						<li><a href="{{url('/portfolio')}}">Portfolio</a></li>
						<li><a href="{{url('/pricing')}}">Pricing Plan</a></li>
						<li><a href="{{url('/blog')}}">Blog & News</a></li>
						<li><a href="{{url('/contact')}}">Contact us</a></li>
					</ul>
				</div>	
			</div>
			<!--/ Sidebar Popup -->	
		</header>
		<!--/ End Header -->

        {{---------------------- Main Content -------------------}}

        @yield('main-content')

        {{--------------------- /Main Content -------------------}}

        <!-- Footer -->
		<footer class="footer" style="background-image:url('img/map.png')">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container"style="">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<!-- Footer About -->		
							<div class="single-widget footer-about widget">	
								<div class="logo">
									<div class="img-logo">
										<a class="logo" href="index.html">
											<img class="img-responsive" src="img/favicon1.png"  width="150px" alt="logo">
										</a>
									</div>
								</div>
								<div class="footer-widget-about-description">
									<p>Beatae vitae dicta su explicabo nemo enim ipsam voluptatem quia voluptas sitBeatae vitae sitBeatae vitae dicta suntania..</p>
								</div>	
								<div class="social">
									<!-- Social Icons -->
									<ul class="social-icons">
										<li><a class="facebook" href="https://www.facebook.com/thedatech" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li><a class="google-plus-g" href="https://local.google.com/place?id=15645728385480786957&use=srp#fpstate=lie" target="_blank"><i class="fa fa-google-plus"></i></a></li>
										<li><a class="linkedin" href="https://www.linkedin.com/company/thedatech" target="_blank"><i class="fa fa-linkedin"></i></a></li>
										<li><a class="envelope" href="mailto:info@thedatech.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
									</ul>
								</div>
								<div class="button"><a href="{{url('/about')}}" class="bizwheel-btn hvr-buzz-out hvr-shutter-in-horizontal">About Us</a></div>
							</div>		
							<!--/ End Footer About -->		
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<!-- Footer Links -->		
							<div class="single-widget f-link widget">
								<h3 class="widget-title">Company</h3>
								<ul>
									<li><a href="{{url('/about')}}" class="hvr-grow">About Us</a></li>
									<li><a href="{{url('/services')}}" class="hvr-grow">Our Services</a></li>
									<li><a href="{{url('/portfolio')}}" class="hvr-grow">Portfolio</a></li>
									<li><a href="{{url('/pricing')}}" class="hvr-grow">Pricing Plan</a></li>
									<li><a href="{{url('/contact')}}" class="hvr-grow">Contact us</a></li>
								</ul>
							</div>			
							<!--/ End Footer Links -->			
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- Footer News -->
							<div class="single-widget footer-news widget">	
								<h3 class="widget-title">Blog Page</h3>
								<!-- Single News -->
								<div class="single-f-news">
									<div class="post-thumb"><a href="#"><img src="img/blog-3.jpg" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>April 15, 2020</time></p>
										<h4 class="title"><a href="blog-sngle.html">We Provide you Best &amp; Creative Consulting Service</a></h4>
									</div>
								</div>
								<!--/ End Single News -->
								<!-- Single News -->
								<div class="single-f-news">
									<div class="post-thumb"><a href="#"><img src="img/blog-4.jpg" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>April 10, 2020</time></p>
										<h4 class="title"><a href="blog-sngle.html">We Provide you Best &amp; Creative Consulting Service</a></h4>
									</div>
								</div>
								<!--/ End Single News -->
							</div>			
							<!--/ End Footer News -->			
						</div>
						<div class="col-lg-3 col-md-6 col-12">	
							<!-- Footer Contact -->		
							<div class="single-widget footer_contact widget">	
								<h3 class="widget-title">Contact</h3>
								<p>At DA Tech, we have perceived that businesses need to leave behind a wide digital footprint to grow.</p>
								<ul class="address-widget-list">
									<li class="footer-mobile-number"><i class="fa fa-phone"></i>+(600) 125-4985-214</li>
									<li class="footer-mobile-number"><i class="fa fa-envelope"></i>info@thedatech.com</li>
									<li class="footer-mobile-number"><i class="fa fa-map-marker"></i>Office 6/1 5-A, Ground Floor, Sultan Manzil, Nazimabad Block 5, Karachi.</li>
									<li class="footer-mobile-number"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.4066204251044!2d67.01964176734148!3d24.925983032842733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDU1JzMyLjMiTiA2N8KwMDEnMTguNiJF!5e0!3m2!1sen!2s!4v1610803772126!5m2!1sen!2s" width="250" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></li>
								</ul>
							</div>		
							<!--/ End Footer Contact -->						
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
							<!-- Footer Newsletter -->
							<div class="footer-newsletter">
								<form action="#" method="post" class="newsletter-area">
									<input type="email" placeholder="Your email address">
									<button type="submit" class="hvr-shutter-in-horizontal">Sign Up</button>
								</form>
							</div>
							<!--/ End Footer Newsletter -->
						</div>
					</div>
				</div>
			</div>
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="copyright-content">
								<!-- Copyright Text -->
								<p>&copy;Copyright 2021 DATech | All Right Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>

            
            <script>
    // Get the video
    var video = document.getElementById("myVideo");

    // Get the button
    var btn = document.getElementById("myBtn");

    // Pause and play the video, and change the button text
    function myFunction() {
    if (video.paused) {
        video.play();
        btn.innerHTML = "Pause";
    } else {
        video.pause();
        btn.innerHTML = "Play";
    }
    }
    </script>

<!-- vanilla js file-->
{{-- <div class="your-element"></div> --}}

{{-- <script type="text/javascript" src="vanilla-tilt.js"></script> --}}
{{-- <script type="text/javascript">
	VanillaTilt.init(document.querySelector(".your-element"), {
		max: 25,
		speed: 400
	});
	
	//It also supports NodeList
	VanillaTilt.init(document.querySelectorAll(".your-element"));
</script> --}}

            <!-- vanilla js file
            <script src="js/vanilla-tilt.min.js"></script-->
			<!-- Jquery JS -->
        <script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Modernizr JS -->
		<script src="js/modernizr.min.js"></script>
		<!-- ScrollUp JS -->
		<script src="js/scrollup.js"></script>
		<!-- FacnyBox JS -->
		<script src="js/jquery-fancybox.min.js"></script>
		<!-- Cube Portfolio JS -->
		<script src="js/cubeportfolio.min.js"></script>
		<!-- Slick Nav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- Slick Nav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- Slick Slider JS -->
		<script src="js/owl-carousel.min.js"></script>
		<!-- Easing JS -->
		<script src="js/easing.js"></script>
		<!-- Magnipic Popup JS -->
		<script src="js/magnific-popup.min.js"></script>
		<!-- Active JS -->
		<script src="js/active.js"></script>
		<!-- parallax.js -->
		<script src="js/parallaxie.js"></script>
		<!-- vanilla JS -->
		<script type="text/javascript" src="js/vanilla-tilt.min.js"></script>
		<script src="js/jquery.easeScroll.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js" integrity="sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg==" crossorigin="anonymous"></script>
		

		<script>
        $('.testimonials').parallaxie({
            speed: 0.5,
            offset: 50,
        });
        </script>



<script>
$("html").easeScroll(
	{
  frameRate: 60,
  animationTime: 1000,
  stepSize: 120,
  pulseAlgorithm: !0,
  pulseScale: 8,
  pulseNormalize: 1,
  accelerationDelta: 20,
  accelerationMax: 1,
  keyboardSupport: !0,
  arrowScroll: 50
});

</script>
</body>
</html>