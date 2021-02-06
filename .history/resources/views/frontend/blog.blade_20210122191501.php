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
									<li><a href="blog-grid.php">Blog Grid</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>News & Articles</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->
		
		<!-- Blog Layout -->
		<section class="blog-layout news-default section-space">
			<div class="container">
				<div class="row ">
				@foreach ($blogs as $blog)
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head overlay">
								<img src="{{asset('img/blogs/'.$blog->featured_image)}}" alt="#">
								<ul class="news-meta">
									{{-- <li class="author"><a href="#"><i class="fa fa-user"></i>site</a></li> --}}
									<li class="date"><i class="fa fa-calendar"></i>{{ \Carbon\Carbon::parse($blog->created_ad)->format('j F, Y') }}
</li>
									{{-- <li class="view"><i class="fa fa-comments"></i>0</li> --}}
								</ul>
							</div>
							<div class="news-body">
								<div class="news-content">
									<h3 class="news-title"><a href="{{url('blog/'.$blog->slug)}}">{{$blog->title}}</a></h3>
									<div class="news-text"><p>{{Str::limit($blog->description, 200)}}</p></div>
									<a href="{{url('blog/'.$blog->slug)}}" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>

				@endforeach

					{{-- <div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news ">
							<div class="news-head overlay">
								<img src="img/blog-2.jpg"" alt="#">
								<ul class="news-meta">
									<li class="author"><a href="#"><i class="fa fa-user"></i>site</a></li>
									<li class="date"><i class="fa fa-calendar"></i>April 15, 2020</li>
									<li class="view"><i class="fa fa-comments"></i>0</li>
								</ul>
							</div>
							<div class="news-body">
								<div class="news-content">
									<h3 class="news-title"><a href="blog-single.php">Grow your Online Business With this Awesome Articles</a></h3>
									<div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas</p></div>
									<a href="blog-single.php" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news ">
							<div class="news-head overlay">
								<img src="img/blog-3.jpg"" alt="#">
								<ul class="news-meta">
									<li class="author"><a href="#"><i class="fa fa-user"></i>site</a></li>
									<li class="date"><i class="fa fa-calendar"></i>April 15, 2020</li>
									<li class="view"><i class="fa fa-comments"></i>0</li>
								</ul>
							</div>
							<div class="news-body">
								<div class="news-content">
									<h3 class="news-title"><a href="blog-single.php">How to Start a Simple Business Agency Without Invest</a></h3>
									<div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas</p></div>
									<a href="blog-single.php" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news ">
							<div class="news-head overlay">
								<img src="img/blog-4.jpg"" alt="#">
								<ul class="news-meta">
									<li class="author"><a href="#"><i class="fa fa-user"></i>site</a></li>
									<li class="date"><i class="fa fa-calendar"></i>April 15, 2020</li>
									<li class="view"><i class="fa fa-comments"></i>0</li>
								</ul>
							</div>
							<div class="news-body">
								<div class="news-content">
									<h3 class="news-title"><a href="blog-single.php">Let’s Build Your Dream Web with Bizwheel Theme</a></h3>
									<div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas</p></div>
									<a href="blog-single.php" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news ">
							<div class="news-head overlay">
								<img src="img/blog-5.jpg" alt="#">
								<ul class="news-meta">
									<li class="author"><a href="#"><i class="fa fa-user"></i>site</a></li>
									<li class="date"><i class="fa fa-calendar"></i>April 15, 2020</li>
									<li class="view"><i class="fa fa-comments"></i>0</li>
								</ul>
							</div>
							<div class="news-body">
								<div class="news-content">
									<h3 class="news-title"><a href="blog-single.php">We Have 30+ Years of Experience in Consulting</a></h3>
									<div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas</p></div>
									<a href="blog-single.php" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news ">
							<div class="news-head overlay">
								<img src="img/blog-6.jpg" alt="#">
								<ul class="news-meta">
									<li class="author"><a href="#"><i class="fa fa-user"></i>site</a></li>
									<li class="date"><i class="fa fa-calendar"></i>April 15, 2020</li>
									<li class="view"><i class="fa fa-comments"></i>0</li>
								</ul>
							</div>
							<div class="news-body">
								<div class="news-content">
									<h3 class="news-title"><a href="blog-single.php">The Powerfull web Design Tools to Create Any Design</a></h3>
									<div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas</p></div>
									<a href="blog-single.php" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div> --}}
				</div>
				{{-- ./row --}}
				
				<div class="row">
					<div class="col-12">
						<!-- Pagination -->
						<div class="pagination-plugin">
							<ul class="pagination-list">
								<li class="prev"><a href="#">Prev</a></li>
								<li class="page-numbers"><a href="#">1</a></li>
								<li class="page-numbers current"><a href="#">2</a></li>
								<li class="page-numbers"><a href="#">3</a></li>
								<li class="next"><a href="#">Next</a></li>
							</ul>
						</div>
						<!--/ End Pagination -->
					</div>
				</div>
			</div>
		</section>

@endsection
		