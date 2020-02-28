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
						<p class="text-white link-nav"><a href="{{route('public')}}">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="{{route('public.pengumuman')}}">Pengumuman</a>
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
							@foreach($pengumuman as $p)
							<h3>{{$p->nama_pengumuman}}</h3>
							<ul class="meta pb-20">
								<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$p->created_at}}</a></li>
							</ul>
							<p>
								{{$p->isi}}
							</p>
							@if($p->file!="kosong")
						<blockquote><a href="{{ URL::to('/') }}/file/pengumuman/{{ $p->file }}">{{$p->file}}</a></blockquote>
							@endif
							@endforeach
						<div class="navigation-wrap justify-content-between d-flex">
						<a class="prev" href="{{route('public.pengumuman')}}"><span class="lnr lnr-arrow-left"></span>Kembali</a>
						<!-- <a class="next" href="#">Next Post<span class="lnr lnr-arrow-right"></span></a> -->
					</div>
				</div>
				<!-- End single-post Area -->
			</div>
		</div>
		@include('public/layouts/side')
	</div>
</section>
<!-- End latest-post Area -->
</div>
@endsection