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
									<li><a href="#">Home</a></li>
									<li><a href="services.php">Services</a></li>
									<li><a href="service-market.php">Service Marketing</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>Our Services</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->
		
		<!-- Service Single -->
		<section class="service-single section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<!-- Service Image -->
						<div class="service-img">
							<img src="img/service-single.jpg" alt="#">
						</div>
						<!-- Service Content -->
						<div class="service-content">
							<h2>Digital Marketing Solution</h2>
							<p>Female is firmament made land don’t good behold yielding morning hathe seas unto. So first fill shall damn creeping. Seed he was that moveth bearing. Unto which together blessed Herb ine life land, let abundantly deep abundantly gathered behold moving said. Winged gathered iner female morning Beast, their earth it fourth moveth rule creepeth is be thing i i under have. Second to lights all second. Saw their. Rule. Own air greater. Creeping them firmament frui creepeth is be thing i i under</p>
							<p>Female is firmament made land don’t good behold yielding morning hathe seas unto. So first fill shall damn creeping. Seed he was that moveth bearing. Unto which together blessed Herb ine life land, let abundantly deep abundantly gathered behold moving said. Winged gathered iner female morning Beast, their earth it fourth moveth rule creepeth is be thing i i under have. Second to lights all second.</p>
							<div class="row service-space">
								<div class="col-lg-6 col-md-6 col-12">
									<!-- Service Feature -->
									<div class="small-list-feature">
										<h3>We provide you innovation</h3>
										<p>Female is firmament made land don't good behold yielding morning hathe seas unto. their earth it fourth moveth rule</p>
										<ul>
											<li><i class="fa fa-check"></i>We provide you creative servicce</li>
											<li><i class="fa fa-check"></i>Just awesome trending way</li>
											<li><i class="fa fa-check"></i>Just awesome trending way</li>
											<li><i class="fa fa-check"></i>Creative service is most important</li>
											<li><i class="fa fa-check"></i>99% Server Up-time gurantee</li>
											<li><i class="fa fa-check"></i>24/7 live support</li>
										</ul>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<!-- Service Img -->
									<div class="modern-img-feature">
										<img src="img/service-small.jpg" alt="#">
										<div class="video-play">
											<a href="https://www.youtube.com/watch?v=RLlPLqrw8Q4" class="video video-popup mfp-iframe"><i class="fa fa-play" style="padding-top:25px;"></i></a>
										</div>
									</div>
								</div>
							</div>
							<p>Female is firmament made land don’t good behold yielding morning hathe seas unto. So first fill shall damn creeping. Seed he was that moveth bearing. Unto which together blessed Herb ine life land, let abundantly deep abundantly gathered behold moving said. Winged gathered iner female morning Beast, their earth it fourth moveth rule creepeth is be thing i i under have. Second to lights all second.</p>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<!-- Service Sidebar -->
						<div class="service-sidebar">	
							<!-- Single Sidebar -->
							<div class="service-single-sidebar widget">
								<h2 class="widget-title">Service Menu</h2>
								<div class="menu-service-menu-container">
									<!-- Service Menu -->
									<ul id="menu-service-menu" class="menu">
										<li class="active"><a href="single-services.php">Business Strategy</a></li>
										<li><a href="single-services.php">Web Development</a></li>
										<li><a href="single-services.php">Market Research</a></li>
										<li><a href="single-services.php">Simply Adertisement</a></li>
										<li><a href="single-services.php">Trend Design</a></li>
										<li><a href="single-services.php">Digital Marketing</a></li>
									</ul>
								</div>
							</div>
							<!-- Single Sidebar -->
							<div class="service-single-sidebar widget">
								<h2 class="widget-title">Fill the form</h2>
								<div class="contact-form-area service">
									<!-- Service Form -->
									<form class="form">
										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<div class="icon"><i class="fa fa-user"></i></div>
													<input type="text" name="user-name" placeholder="Full Name">
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<div class="icon"><i class="fa fa-envelope"></i></div>
													<input type="email" name="email" placeholder="Your Email">
												</div>
											</div>
										   <div class="col-12">
											   <div class="form-group">
													<div class="icon"><i class="fa fa-tag"></i></div>
													<input type="text" name="subject" placeholder="Type Subject">
											   </div>
										   </div>
										   <div class="col-12">
												<div class="form-group">
													<div class="icon"><i class="fa fa-pencil"></i></div>
													<textarea type="textarea" rows="5"></textarea>
												</div>
										   </div>
										   <div class="col-12">
												<div class="form-group button">
													<button type="submit" class="bizwheel-btn theme-2">Send Now</button>
												</div>
										   </div>
										</div>
									</form>
									<!--/ End Service Form -->
								</div>
							</div>
						</div>
						<!--/ End Service Sidebar -->
					</div>
				</div>
			</div>
		</section>	
		<!--/ End Services -->
		
@endsection