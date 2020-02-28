@extends('public/master')
@section('konten')
<div class="site-main-container">
<!-- Start top-post Area -->
<section class="top-post-area pt-10" style="margin-bottom: 10px;">
	<div class="container no-padding">
		<div class="row">

			<div class="col-lg-12">
				<div class="hero-nav-area">
					<h1 class="text-white">Galery</h1>
					<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="archive.html">Galery </a></p>
				</div>
			</div>

		</div>
		<div class="container" style="margin-top: 10px;background-color: pink;padding: 8px;">
			<div class="row">
				@foreach($album as $al)
				@php
					$tanggal = new DateTime($al->created_at);
					$tanggal = $tanggal->format("d-m-Y");
				@endphp
				<div class="col-lg-4 top-post-left" style="margin-bottom: 10px;">
					<div class="feature-image-thumb relative">
						<div class="overlay overlay-bg"></div>
						@foreach($foto as $f)
							@if($al->id==$f->id_a)
							<img class="img-fluid" src="{{ URL::to('/') }}/album/{{ $f->nama }}" alt="">
							@php
								break;
							@endphp
							@endif
						@endforeach
					</div>
					<div class="top-post-details" style="margin-left: 0px;padding-left: 0px;">
						<a href="{{route('post.album',$al->id)}}">
							<h5 style="color: white;" >{{$al->nama}}</h5>
						</a>
						<ul class="meta">
							<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$tanggal}}</a></li>
						</ul>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>	
</section>
<!-- End top-post Area -->
<!-- Start latest-post Area -->
<!-- End latest-post Area -->
</div>
@endsection