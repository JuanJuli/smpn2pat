@extends('public/master')

@section('konten')
<div class="site-main-container">
	<!-- Start top-post Area -->
	<section class="top-post-area pt-10">
		<div class="container no-padding">
			<div class="row">
				<div class="col-lg-12">
					<div class="hero-nav-area">
						<h1 class="text-white">Data Siswa</h1>
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
							<div class="table-responsive">
								<table class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>Nama Siswa</th>
											<th>NIS</th>
											<th>Kelas</th>
											<th>Jenis Kelamain</th>
										</tr>
									</thead>
									<tbody>
										@foreach($siswa as $s)
										<tr>
											<td>{{$s->nama}}</td>
											<td>{{$s->nis}}</td>
											<td>{{$s->kelas->nama}}</td>
											<td>{{$s->jenis_kelamin}}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
					</div>
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