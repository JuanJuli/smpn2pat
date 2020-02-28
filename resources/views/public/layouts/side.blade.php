<div class="col-lg-4">
	<div class="sidebars-area">
		<div class="single-sidebar-widget editors-pick-widget">
			<h6 class="title">Kegiatan</h6>
			<div class="editors-pick-post">
				<div class="post-lists">
					@php
						$no=1;
					@endphp
					@foreach($kegiatan as $k)
					@php
						$tanggal = new DateTime($k->created_at);
						$tanggal = $tanggal->format("d-m-Y");
					@endphp
					<div class="single-post d-flex flex-row">
						<div class="thumb">
							<img src="{{ URL::to('/') }}/album/{{ $k->gambar }}" alt="" width="75">
						</div>
						<div class="detail">
							<a href="{{route('post.k',$k->id)}}"><h6>{{$k->nama_kegiatan}}</h6></a>
							<ul class="meta">
								<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$tanggal}}</a></li>
							</ul>
						</div>
					</div>
					@php
					$no++;
					@endphp
					@if($no>=6)
						break;
					@endif
					@endforeach
				</div>
			</div>
		</div>

		<div class="single-sidebar-widget most-popular-widget">
			<h6 class="title">Pengumuman</h6>
			@php
				$no=1;
			@endphp
			@foreach($pengumuman as $p)
			@php
				$tanggal = new DateTime($p->created_at);
				$tanggal = $tanggal->format("d-m-Y");
			@endphp
			<div class="single-list flex-row d-flex">
				<div class="details">
					<a href="{{route('post.p',$p->id)}}">
						<h6>{{$p->nama_pengumuman}}</h6>
					</a>
					<ul class="meta">
						<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$tanggal}}</a></li>
					</ul>
				</div>
			</div>
			@php
			$no++;
			@endphp
			@if($no>=6)
				break;
			@endif
			@endforeach
		</div>
	</div>
</div>