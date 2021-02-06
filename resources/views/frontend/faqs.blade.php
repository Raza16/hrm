@extends('frontend/layouts/master')

@section('main-content')

		<!-- Breadcrumb -->
		<div class="breadcrumbs overlay" style="background-image:url('img/breadcrumb.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="faqs.php">Faqs</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>Asked & Questions</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->

		<!-- Faqs -->
		<section class="faqs section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-7 col-12">
						<div class="faqs-main m-top-30">
							<div class="row">
								<div class="col-12">
									<div id="accordion" role="tablist">
										<!-- Single Faq -->
										<div class="single-faq">
											<div class="faq-heading" role="tab" id="faq1">
												<h4 class="faq-title">
													<a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													<i class="fa fa-pencil"></i>How Can i Start my Online Business?
													</a>
												</h4>
											</div>
											<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="faq1" data-parent="#accordion">
												<div class="faq-body">
													<p>Proin dui purus, facilisis quis euismod quis, euismod eu augue. Etiam vel dui arcu. Cras varius mi ut eros pharetra, id aliquam metus venenatis. Donec sollicitudin tincidunt semper. Integer ultrices luctus ultricies. Curabitur quis sem eget ipsum vulputate pulvinar. Curabitur ullamco</p>
												</div>
											</div>
										</div>
										<!--/ End Single Faq -->
										<!-- Single Faq -->
										<div class="single-faq">
											<div class="faq-heading" role="tab" id="faq2">
												<h4 class="faq-title">
													<a class="collapsed" data-toggle="collapse"  href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
													<i class="fa fa-pencil"></i> Can you give me 50% discount as 1st purchase?
													</a>
												</h4>
											</div>
											<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="faq2" data-parent="#accordion">
												<div class="faq-body">
													<p>Proin dui purus, facilisis quis euismod quis, euismod eu augue. Etiam vel dui arcu. Cras varius mi ut eros pharetra, id aliquam metus venenatis. Donec sollicitudin tincidunt semper. Integer ultrices luctus ultricies. Curabitur quis sem eget ipsum vulputate pulvinar. Curabitur ullamco</p>
												</div>
											</div>
										</div>
										<!--/ End Single Faq -->
										<!-- Single Faq -->
										<div class="single-faq">
											<div class="faq-heading" role="tab" id="faq3">
												<h4 class="faq-title">
													<a class="collapsed" data-toggle="collapse"  href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
													<i class="fa fa-pencil"></i>How Do i Start making Money from Home??
													</a>
												</h4>
											</div>
											<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="faq3" data-parent="#accordion">
												<div class="faq-body">
													<p>Proin dui purus, facilisis quis euismod quis, euismod eu augue. Etiam vel dui arcu. Cras varius mi ut eros pharetra, id aliquam metus venenatis. Donec sollicitudin tincidunt semper. Integer ultrices luctus ultricies. Curabitur quis sem eget ipsum vulputate pulvinar. Curabitur ullamco</p>
												</div>
											</div>
										</div>
										<!--/ End Single Faq -->
										<!-- Single Faq -->
										<div class="single-faq">
											<div class="faq-heading" role="tab" id="faq4">
												<h4 class="faq-title">
													<a class="collapsed" data-toggle="collapse"  href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
													<i class="fa fa-pencil"></i>Can i use unlimited website from a single licence?
													</a>
												</h4>
											</div>
											<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="faq4" data-parent="#accordion">
												<div class="faq-body">
													<p>Proin dui purus, facilisis quis euismod quis, euismod eu augue. Etiam vel dui arcu. Cras varius mi ut eros pharetra, id aliquam metus venenatis. Donec sollicitudin tincidunt semper. Integer ultrices luctus ultricies. Curabitur quis sem eget ipsum vulputate pulvinar. Curabitur ullamco</p>
												</div>
											</div>
										</div>
										<!--/ End Single Faq -->
										<!-- Single Faq -->
										<div class="single-faq">
											<div class="faq-heading" role="tab" id="faq5">
												<h4 class="faq-title">
													<a class="collapsed" data-toggle="collapse"  href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
													<i class="fa fa-pencil"></i>Have any replace or refund policy?
													</a>
												</h4>
											</div>
											<div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="faq5" data-parent="#accordion">
												<div class="faq-body">
													<p>Proin dui purus, facilisis quis euismod quis, euismod eu augue. Etiam vel dui arcu. Cras varius mi ut eros pharetra, id aliquam metus venenatis. Donec sollicitudin tincidunt semper. Integer ultrices luctus ultricies. Curabitur quis sem eget ipsum vulputate pulvinar. Curabitur ullamco</p>
												</div>
											</div>
										</div>
										<!--/ End Single Faq -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 col-12">
						<div class="faq-img m-top-30">
							<img src="img/faq.png" alt="#">
						</div>
					</div>
				</div>
			</div>
		</section>	
		<!--/ End Faqs -->
		
		<div class="faq-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
						<div class="section-title default text-center">
							<div class="section-top">
								<h1><span>Contact Us</span><b>Still no luck?</b></h1>
							</div>
							<div class="section-bottom">
								<div class="text">
									<p>Lorem Ipsum Dolor Sit Amet, Conse Ctetur Adipiscing Elit, Sed Do Eiusmod Tempor Ares Incididunt Utlabore. Dolore Magna Ones Baliqua</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12">
						<!-- Contact Form -->
						<div class="contact-form-area faq-form m-top-30">
							<div class="form-inner">
								<div class="form-title">
									<h4>Get In Touch</h4>
									<p>Contact with us if you have any question!</p>
								</div>
								<form class="form" action="#" method="post">
									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<div class="icon"><i class="fa fa-user"></i></div>
												<input type="text" name="user-name" placeholder="Full name">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<div class="icon"><i class="fa fa-envelope"></i></div>
												<input type="email" name="email" placeholder="Type email">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<div class="icon"><i class="fa fa-tag"></i></div>
												<input type="text" name="subject" placeholder="Type subject">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group textarea">
												<div class="icon"><i class="fa fa-pencil"></i></div>
												<textarea type="textarea" placeholder="Your message" rows="5"></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="bizwheel-btn theme-2">Send Now</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!--/ End contact Form -->
					</div>
				</div>
			</div>
		</div>
		
		<!-- Call To Action -->
		<section class="call-action overlay" style="background-image:url('img/cta-bg.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-12">
						<div class="call-inner">
							<h2>Brand Products &amp; Creativity is our Fashion</h2>
							<p>ehicula maximus velit. Morbi non tincidunt purus, a hendrerit nisi. Vivamus elementum</p>
						</div>
					</div>
					<div class="col-lg-3 col-12" style="margin-bottom: 50px;">
						<div class="button">
							<a href="{{url('/portfolio')}}" class="bizwheel-btn">Our Portfolio</a>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!--/ End Call to action -->

@endsection