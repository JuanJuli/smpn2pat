@extends('public/master')
@section('konten')
<div class="site-main-container">
<!-- Start top-post Area -->
<section class="top-post-area pt-10">
	<div class="container no-padding">
		<div class="row">
			<div class="col-lg-12">
				<div class="hero-nav-area">
					<h1 class="text-white">Contact Us</h1>
					<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="contact.html">Contact Us </a></p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End top-post Area -->
<!-- Start contact-page Area -->
<section class="contact-page-area pt-50 pb-120">
	<div class="container">
		<div class="row contact-wrap">
			<div class="map-wrap" style="width:100%; height: 445px;" id="">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.274659148155!2d108.00159131431151!3d-6.358484663972739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e694b74fc4f3a9d%3A0x759a9a28558d686e!2sSMPN%202%20Patrol!5e0!3m2!1sid!2sid!4v1581382281235!5m2!1sid!2sid" width="1090" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
			<div class="col-lg-3 d-flex flex-column address-wrap">
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-home"></span>
					</div>
					<div class="contact-details">
						<h7>Patrol, Indramayu</h7>
						<p>
							Jalan Arjasari Kecamatan Patrol - Indramayu
						</p>
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-phone-handset"></span>
					</div>
					<div class="contact-details">
						<h7>(0234) 5613380</h7>
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-envelope"></span>
					</div>
					<div class="contact-details">
						<h7>smpnegeri2patrol@ymail.com</h7>
					</div>
				</div>
			</div>
			<div class="col-lg-9">
				<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
					<div class="row">
						<div class="col-lg-6">
							<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
							
							<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
							<input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
						</div>
						<div class="col-lg-6">
							<textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>
						</div>
						<div class="col-lg-12">
							<div class="alert-msg" style="text-align: left;"></div>
							<button class="primary-btn primary" style="float: right;">Send Message</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- End contact-page Area -->
</div>
@endsection