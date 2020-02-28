@extends('public/master')

@section('konten')
<section class="latest-post-area pb-120">
	<div class="container no-padding">
		<div class="row">
			<div class="col-lg-8 post-list">
				<!-- Start single-post Area -->
				@foreach($kegiatan as $k)
				<div class="single-post-wrap">
					<div class="feature-img-thumb relative">
						<div class="overlay overlay-bg"></div>
						<img class="img-fluid" src="{{ URL::to('/') }}/album/{{ $k->gambar }}" alt="">
					</div>
					<div class="content-wrap">
						<!-- <ul class="tags mt-10">
							<li><a href="#">Food Habit</a></li>
						</ul> -->
						<a href="#">
							<h3>{{$k->nama_kegiatan}}</h3>
						</a>
						@php
							$tanggal = new DateTime($k->created_at);
							$tanggal = $tanggal->format("d-m-Y");
						@endphp
						<ul class="meta pb-20">
							<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$tanggal}}</a></li>
						</ul>
						<p>
							{{$k->isi}}
						</p>
					
					<div class="navigation-wrap justify-content-between d-flex">
						<a class="prev" href="{{route('public.kegiatan')}}"><span class="lnr lnr-arrow-left"></span>Kembali</a>
						<!-- <a class="next" href="#">Next Post<span class="lnr lnr-arrow-right"></span></a> -->
					</div>
				</div>
			</div>
			@endforeach
			<!-- End single-post Area -->
		</div>
		@include('public/layouts/side')
	</div>
</div>
</section>
<!-- End latest-post Area -->
</div>
@endsection