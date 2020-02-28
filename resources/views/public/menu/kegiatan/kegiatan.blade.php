@extends('public/master')
@section('konten')
<div class="site-main-container">
<!-- Start top-post Area -->
<section class="top-post-area pt-10">
	<div class="container no-padding">
		<div class="row">
			<div class="col-lg-12">
				<div class="hero-nav-area">
					<h1 class="text-white">Kegiatan</h1>
				</div>
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
				<!-- Start latest-post Area -->
				<div class="latest-post-wrap">
					<h4 class="cat-title">Kegiatan</h4>
					@foreach($kegiatan as $k)
					<div class="single-latest-post row align-items-center">
						<div class="col-lg-5 post-left">
							<div class="feature-img relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="{{ URL::to('/') }}/album/{{ $k->gambar }}" alt="">
							</div>
						</div>
						<div class="col-lg-7 post-right">
							<a href="{{route('post.k',$k->id)}}">
								<h4>{{$k->nama_kegiatan}}</h4>
							</a>
							@php
								$tanggal = new DateTime($k->created_at);
								$tanggal = $tanggal->format("d-m-Y");
							@endphp
							<ul class="meta">
								<li><a href="{{route('post.k',$k->id)}}"><span class="lnr lnr-calendar-full"></span>{{$tanggal}}</a></li>
							</ul>
							<p class="excert">
								{{$k->isi}}
							</p>
						</div>
					</div>
					@endforeach
					<div class="load-more">
						<a href="#" class="primary-btn">Load More Posts</a>
					</div>
					
				</div>
				<!-- End latest-post Area -->
			</div>
			@include('public/layouts/side')	
		</div>
	</div>
</section>
<!-- End latest-post Area -->
</div>
@endsection