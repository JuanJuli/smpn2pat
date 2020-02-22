@extends('public/master')

@section('konten')
<div class="site-main-container">
	<!-- Start top-post Area -->
	<section class="top-post-area pt-10">
		<div class="container no-padding">
			<div class="row">
				<div class="col-lg-12">
					<div class="hero-nav-area">
						<h1 class="text-white">Pengumuman</h1>
						<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="#">Pengumuman</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End top-post Area -->
	<!-- Start latest-post Area -->
	<section class="latest-post-area pb-120">
		<div class="container no-padding">
			<div class="row">
				<div class="col-lg-8 post-list">
					<!-- Start single-post Area -->
					<div class="single-post-wrap">
						<div class="content-wrap">
							<!-- <ul class="tags">
								<li><a href="#">Food Habit</a></li>
							</ul> -->
							
							<h3>Libur Nasional dan Cuti Bersama 2019.</h3>
							<ul class="meta pb-20">
								<!-- <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li> -->
								<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
								<!-- <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li> -->
							</ul>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus.
							</p>
						<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</blockquote>
						
						<div class="navigation-wrap justify-content-between d-flex">
							<a class="prev" href="#"><span class="lnr lnr-arrow-left"></span>Prev Post</a>
							<a class="next" href="#">Next Post<span class="lnr lnr-arrow-right"></span></a>
						</div>
						
						<!-- <div class="comment-sec-area">
							<div class="container">
								<div class="row flex-column">
									<h6>05 Comments</h6>
									<div class="comment-list">
										<div class="single-comment justify-content-between d-flex">
											<div class="user justify-content-between d-flex">
												<div class="thumb">
													<img src="img/blog/c1.jpg" alt="">
												</div>
												<div class="desc">
													<h5><a href="#">Emilly Blunt</a></h5>
													<p class="date">December 4, 2017 at 3:12 pm </p>
													<p class="comment">
														Never say goodbye till the end comes!
													</p>
												</div>
											</div>
											<div class="reply-btn">
												<a href="" class="btn-reply text-uppercase">reply</a>
											</div>
										</div>
									</div>
									<div class="comment-list left-padding">
										<div class="single-comment justify-content-between d-flex">
											<div class="user justify-content-between d-flex">
												<div class="thumb">
													<img src="img/blog/c2.jpg" alt="">
												</div>
												<div class="desc">
													<h5><a href="#">Emilly Blunt</a></h5>
													<p class="date">December 4, 2017 at 3:12 pm </p>
													<p class="comment">
														Never say goodbye till the end comes!
													</p>
												</div>
											</div>
											<div class="reply-btn">
												<a href="" class="btn-reply text-uppercase">reply</a>
											</div>
										</div>
									</div>
									<div class="comment-list">
										<div class="single-comment justify-content-between d-flex">
											<div class="user justify-content-between d-flex">
												<div class="thumb">
													<img src="img/blog/c3.jpg" alt="">
												</div>
												<div class="desc">
													<h5><a href="#">Emilly Blunt</a></h5>
													<p class="date">December 4, 2017 at 3:12 pm </p>
													<p class="comment">
														Never say goodbye till the end comes!
													</p>
												</div>
											</div>
											<div class="reply-btn">
												<a href="" class="btn-reply text-uppercase">reply</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
					<!-- <div class="comment-form">
						<h4>Post Comment</h4>
						<form>
							<div class="form-group form-inline">
								<div class="form-group col-lg-6 col-md-12 name">
									<input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
								</div>
								<div class="form-group col-lg-6 col-md-12 email">
									<input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
							</div>
							<div class="form-group">
								<textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
							</div>
							<a href="#" class="primary-btn text-uppercase">Post Comment</a>
						</form>
					</div> -->
				</div>
				<!-- End single-post Area -->
			</div>
			@include('public/layouts/side')
		</div>
	</div>
</section>
<!-- End latest-post Area -->
</div>
@endsection