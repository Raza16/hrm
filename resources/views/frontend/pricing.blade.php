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
									<li><a href="pricing.php">Pricing</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>Pricing Plan</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->
		
		<!-- Pricing Plan -->
		<section class="pricing section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
						<div class="section-title default text-center">
							<div class="section-top">
								<h1><span>Pricing</span><b>Pricing Plan</b></h1>
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
					<div class="col-lg-4 col-md-4 col-12">
						<!-- Single pricing -->
						<div class="single-pricing">
							<!-- Price Head -->
							<div class="price-head">
								<h4 class="small-title">Starter<span>Great for small business</span></h4>
								<div class="icon-head">
									<i class="fa fa-bicycle"></i>
								</div>
							</div>
							<h2 class="price"><span><b>$</b>19</span><b class="renew">Monthly</b></h2>
							<ul class="price-list">
								<li>01 Free website</li>
								<li>Unlimited disk spaces</li>
								<li>Creative design</li>
								<li>Free consulting service</li>
								<li>24/7 live support</li>
								<li>99% Uptime gurantee</li>
							</ul>
							<div class="button">
								<a class="bizwheel-btn theme-1" href="contact.php">Buy Now</a>
							</div>
						</div>
						<!--/ End Single pricing -->
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<!-- Single pricing -->
						<div class="single-pricing">
							<!-- Price Head -->
							<div class="price-head">
								<div class="p-best"><p>Best Plan<span>25% off</span></p></div>
								<h4 class="small-title">Medium<span>Great for medium business</span></h4>
								<div class="icon-head">
									<i class="fa fa-bicycle"></i>
								</div>
							</div>
							<h2 class="price"><span><b>$</b>39</span><b class="renew">Monthly</b></h2>
							<ul class="price-list">
								<li>01 Free website</li>
								<li>Unlimited disk spaces</li>
								<li>Creative design</li>
								<li>Free consulting service</li>
								<li>24/7 live support</li>
								<li>99% Uptime gurantee</li>
							</ul>
							<div class="button">
								<a class="bizwheel-btn theme-1" href="contact.php">Buy Now</a>
							</div>
						</div>
						<!--/ End Single pricing -->
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<!-- Single pricing -->
						<div class="single-pricing">
							<!-- Price Head -->
							<div class="price-head">
								<h4 class="small-title">Starter<span>Great for small business</span></h4>
								<div class="icon-head">
									<i class="fa fa-bicycle"></i>
								</div>
							</div>
							<h2 class="price"><span><b>$</b>79</span><b class="renew">Monthly</b></h2>
							<ul class="price-list">
								<li>01 Free website</li>
								<li>Unlimited disk spaces</li>
								<li>Creative design</li>
								<li>Free consulting service</li>
								<li>24/7 live support</li>
								<li>99% Uptime gurantee</li>
							</ul>
							<div class="button">
								<a class="bizwheel-btn theme-1" href="contact.php">Buy Now</a>
							</div>
						</div>
						<!--/ End Single pricing -->
					</div>
				</div>
			</div>
		</section>	
		<!--/ End Pricing Plan -->

@endsection