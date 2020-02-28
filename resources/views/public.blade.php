@extends('public/master')
@section('konten')
<div class="site-main-container">
<!-- Start top-post Area -->
<section class="top-post-area pt-10">
	<div class="container no-padding">
		@foreach($identitas as $id)
		<div class="row small-gutters">
			<div class="col-lg-8 top-post-left">
				<div class="feature-image-thumb relative">
					<div class="overlay overlay-bg"></div>
					<img class="img-fluid" src="{{ URL::to('/') }}/album/{{ $id->gambar1 }}" alt="">
				</div>
				<div class="top-post-details">
				</div>
			</div>
			<div class="col-lg-4 top-post-right">
				<div class="single-top-post">
					<div class="feature-image-thumb relative">
						<div class="overlay overlay-bg"></div>
						<img class="img-fluid" src="{{ URL::to('/') }}/album/{{ $id->gambar2 }}" alt="">
					</div>
				</div>
				<div class="single-top-post" style="margin-top: 5px;">
					<div class="feature-image-thumb relative">
						<div class="overlay overlay-bg"></div>
						<img class="img-fluid" src="{{ URL::to('/') }}/album/{{ $id->gambar3 }}" alt="">
					</div>
					<div class="top-post-details">
					</div>
				</div>
			</div>
		</div>
		@endforeach
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
					@foreach($kegiatan as $kg)
					<div class="single-latest-post row align-items-center">
						<div class="col-lg-5 post-left">
							<div class="feature-img relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="{{ URL::to('/') }}/album/{{ $kg->gambar }}" alt="">
							</div>
						</div>
						<div class="col-lg-7 post-right">
							<a href="{{route('post.k',$kg->id)}}">
								<h4>{{$kg->nama_kegiatan}}</h4>
							</a>
							<ul class="meta">
								<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$kg->created_at}}</a></li>
							</ul>
							<p>
								{{ $kg->isi }}
							</p>
						</div>
					</div>
					@endforeach
					<div class="load-more">
						<a href="{{route('public.kegiatan')}}" class="primary-btn">Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="sidebars-area">
					<div class="single-sidebar-widget editors-pick-widget">
						<h6 class="title">Pengumuman</h6>
						<div class="editors-pick-post">
							<div class="post-lists">
								@foreach($pengumuman as $p)
								<div class="single-post d-flex flex-row">
									<div class="detail">
										<a href="{{route('post.p',$p->id)}}"><h6>{{ $p->nama_pengumuman}}</h6></a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$p->created_at}}</a></li>	
										</ul>
									</div>
								</div>
								@endforeach
								<div class="load-more">
									<a href="{{route('public.pengumuman')}}" class="primary-btn">Selengkapnya</a>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="single-sidebar-widget newsletter-widget">
						<h6 class="title">Newsletter</h6>
						<p>
							Here, I focus on a range of items
							andfeatures that we use in life without
							giving them a second thought.
						</p>
						<div class="form-group d-flex flex-row">
							<div class="col-autos">
								<div class="input-group">
									<input class="form-control" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" type="text">
								</div>
							</div>
							<a href="#" class="bbtns">Subcribe</a>
						</div>
						<p>
							You can unsubscribe us at any time
						</p>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End latest-post Area -->
</div>
@endsection