@extends('public/master')
@section('konten')
<div class="site-main-container">
<!-- Start top-post Area -->
<section class="top-post-area pt-10" style="margin-bottom: 10px;">
	<div class="container no-padding">
		<div class="row">
			@foreach($album as $al)
			<div class="col-lg-12">
				<div class="hero-nav-area">
					<h1 class="text-white">Album {{$al->nama}}</h1>
					<p class="text-white link-nav"><a href="{{route('public')}}">Home </a>
					<span class="lnr lnr-arrow-right"></span><a href="{{route('public.galery')}}">Galery </a></p>
				</div>
			</div>
			@endforeach
		</div>
		<div class="container" style="margin-top: 10px;background-color: pink;padding: 8px;">
			<div class="row">
				@foreach($foto as $f)
				<div class="col-md-4 top-post-left" style="margin-bottom: 10px;">
					<div class="feature-image-thumb relative">
						<!-- <div class="overlay overlay-bg">
							
						</div> -->
					<img style="max-height: 400px;" class="img-fluid" src="{{ URL::to('/') }}/album/{{ $f->nama }}" alt="">
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>	
</section>
</div>
@endsection