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
									<li><a href="services.php">Services</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>Our Services</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Breadcrumb -->
		
		<!-- Services -->
		<section class="services section-bg section-space">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title  style2 text-center">
							<div class="section-top">
								<h1><span>Creative</span><b>Service We Provide</b></h1><h4>We provide quality service &amp; support..</h4>
							</div>
							<div class="section-bottom">
								<div class="text-style-two">
									<p>Aliquam Sodales Justo Sit Amet Urna Auctor Scelerisquinterdum Leo Anet Tempus Enim Esent Egetis Hendrerit Vel Nibh Vitae Ornar Sem Velit Aliquam</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="img/service-01.jpg" alt="#">
								<div class="icon-bg"><i class="fa fa-handshake-o"style="padding-top:20px;"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-business.php">Business Strategy</a></h4>
								<p>Cras venenatis, purus sit amet tempus mattis, justo nisi facilisis metus, in tempus ipsum ipsum eu ipsum. Class aptent taciti</p>
								<a class="btn" href="service-business.php"><i class="fa fa-arrow-circle-o-right"style="padding-top:20px;"></i>View Service</a>
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="img/service-02.jpg" alt="#">
								<div class="icon-bg"><i class="fa fa-html5" style="padding-top:20px;"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-develop.php">Web Development</a></h4>
								<p>Cras venenatis, purus sit amet tempus mattis, justo nisi facilisis metus, in tempus ipsum ipsum eu ipsum. Class aptent taciti</p>
								<a class="btn" href="service-develop.php"><i class="fa fa-arrow-circle-o-right" style="padding-top:20px;"></i>View Service</a>
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="img/service-03.jpg" alt="#">
								<div class="icon-bg"><i class="fa fa-cube" style="padding-top:20px;"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-market.php">Market Research</a></h4>
								<p>Cras venenatis, purus sit amet tempus mattis, justo nisi facilisis metus, in tempus ipsum ipsum eu ipsum. Class aptent taciti</p>
								<a class="btn" href="service-market.php"><i class="fa fa-arrow-circle-o-right" style="padding-top:20px;"></i>View Service</a>
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="img/service-04.jpg" alt="#">
								<div class="icon-bg"><i class="fa fa-coffee" style="padding-top:20px;"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-design.php">Trend Design</a></h4>
								<p>Cras venenatis, purus sit amet tempus mattis, justo nisi facilisis metus, in tempus ipsum ipsum eu ipsum. Class aptent taciti</p>
								<a class="btn" href="service-design.php"><i class="fa fa-arrow-circle-o-right"></i>View Service</a>
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="img/service-05.jpg" alt="#">
								<div class="icon-bg"><i class="fa fa-bullhorn" style="padding-top:20px;"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-advertise.php">Simply Adertisement</a></h4>
								<p>Cras venenatis, purus sit amet tempus mattis, justo nisi facilisis metus, in tempus ipsum ipsum eu ipsum. Class aptent taciti</p>
								<a class="btn" href="service-advertise.php"><i class="fa fa-arrow-circle-o-right" style="padding-top:20px;"></i>View Service</a>
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="img/service-06.jpg" alt="#">
								<div class="icon-bg"><i class="fa fa-bullseye" style="padding-top:20px;"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-marketing.php">Digital Marketing</a></h4>
								<p>Cras venenatis, purus sit amet tempus mattis, justo nisi facilisis metus, in tempus ipsum ipsum eu ipsum. Class aptent taciti</p>
								<a class="btn" href="service-marketing.php"><i class="fa fa-arrow-circle-o-right" style="padding-top:20px;"></i>View Service</a>
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Services -->
@endsection
		