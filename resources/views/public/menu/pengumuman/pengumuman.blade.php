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
					<h4 class="cat-title">Pengumuman</h4>
					@foreach($pengumuman as $p )
					<div class="single-latest-post row align-items-center">
						
						<div class="col-lg-12">
							<a href="{{route('post.p',$p->id)}}">
								
								<h4>{{ $p->nama_pengumuman }}</h4>
							</a>
							<ul class="meta">
								<li><a href="#"><span class="lnr lnr-user"></span>Administrator</a></li>
								<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$p->created_at}}</a></li>
								<li><a href="#"><span class="lnr lnr-tag"></span>Pengumuman</a></li>
							</ul>
							<p>
								{{$p->isi}}
							</p>
						</div>
					</div>
					@endforeach
				</div>

				<!-- End latest-post Area -->
			</div>
			@include('public/layouts/side')
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End latest-post Area -->
</div>
@endsection