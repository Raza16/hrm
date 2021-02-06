@extends('frontend/layouts/master')

@section('title')
	<title>DATech | Blog</title>
@endsection

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
									<li class="date"><i class="fa fa-calendar"></i>{{ \Carbon\Carbon::parse($blog->created_at)->format('j F, Y') }}</li>
									{{-- <li class="view"><i class="fa fa-comments"></i>0</li> --}}
								</ul>
							</div>
							<div class="news-body">
								<div class="news-content">
									<h3 class="news-title"><a href="{{url('blog/'.$blog->slug)}}">{{$blog->title}}</a></h3>
									<div class="news-text">{!! Str::limit($blog->description, 200) !!}</p></div>
									<a href="{{url('blog/'.$blog->slug)}}" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
				@endforeach
				</div>
				{{-- ./row --}}
				
				<div class="row">
					<div class="col-12">
						<!-- Pagination -->
						<div class="pagination-plugin">
							<ul class="pagination-list">
								{{-- <li class="prev"><a href="#">Prev</a></li>
								<li class="page-numbers"><a href="#">1</a></li>
								<li class="page-numbers current"><a href="#">2</a></li>
								<li class="page-numbers"><a href="#">3</a></li>
								<li class="next"><a href="#">Next</a></li> --}}
								<li class="next"><a href="{{ $blogs->links() }}-">{{ $blogs->links() }}-</a></li> 
							</ul>
						</div>
						<!--/ End Pagination -->
					</div>
				</div>
			</div>
		</section>

@endsection
		