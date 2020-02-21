@extends('public/master')
@section('konten')
<div class="site-main-container">
<!-- Start top-post Area -->
<section class="top-post-area pt-10">
	<div class="container no-padding">
		<div class="row">
			<div class="col-lg-12">
				<div class="hero-nav-area">
					<h1 class="text-white">Berpikir Kreatif & Inovatif</h1>
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
					<h4 class="cat-title">Pengumuman Terbaru</h4>
					@foreach($pengumuman as $p )
					<div class="single-latest-post row align-items-center">
						<div class="col-lg-5 post-left">
							<div class="feature-img relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="{{ asset('magazine/img/libur.jpg') }}"  style="border:0px; width:400px; height:200px;"  alt="">
							</div>
							<ul class="tags">
								<li><a href="#">Libur Semester</a></li>
							</ul>
						</div>
						<div class="col-lg-7 post-right">
							<a href="image-post.html">
								
								<h4>{{ $p->nama_pengumuman }}</h4>
							</a>
							<ul class="meta">
								<li><a href="#"><span class="lnr lnr-user"></span>Administrator</a></li>
								<li><a href="#"><span class="lnr lnr-calendar-full"></span>2 Januari , 2020</a></li>
								<li><a href="#"><span class="lnr lnr-tag"></span>Pengumuman</a></li>
							</ul>
							<p>
								{{$p->isi}}Libur semester ganjil tahun ajaran 2019/2020 dimulai dari tanggal 4 Januari 2020.
							</p>
						</div>
					</div>
					<div class="single-latest-post row align-items-center">
						<div class="col-lg-5 post-left">
							<div class="feature-img relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="{{ asset('magazine/img/bagiraport.jpg') }}"  style="border:0px; width:400px; height:200px;"  alt="">
							</div>
							<ul class="tags">
								<li><a href="#">Pembagian Raport</a></li>
							</ul>
						</div>
						<div class="col-lg-7 post-right">
							<a href="image-post.html">
								<h4>{{$p->nama_pengumuman}}Pengumuman pembagian Raport Akhir Semester 1/Ganjil 2019</h4>
							</a>
							<ul class="meta">
								<li><a href="#"><span class="lnr lnr-user"></span>Administrator</a></li>
								<li><a href="#"><span class="lnr lnr-calendar-full"></span>18 Desember, 2019</a></li>
								<li><a href="#"><span class="lnr lnr-tag"></span>Pengumuman</a></li>
							</ul>
							<p>
								{{$p->isi}}Berakhirnya semester ganjil tahun pelajaran 2018-2019, ditandai dengan pembagian laporan hasil belajar.
							</p>
						</div>
					</div>
					<div class="single-latest-post row align-items-center">
						<div class="col-lg-5 post-left">
							<div class="feature-img relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="{{ asset('magazine/img/libur.jpg') }}"  style="border:0px; width:400px; height:200px;"  alt="">
							</div>
							<ul class="tags">
								<li><a href="#">Libur Hari Raya</a></li>
							</ul>
						</div>
						<div class="col-lg-7 post-right">
							<a href="image-post.html">
								<h4>{{$p->nama_pengumuman}}Pengumuman Libur Nasional Hari Raya Idul Adha 1440 H</h4>
							</a>
							<ul class="meta">
								<li><a href="#"><span class="lnr lnr-user"></span>Administrator</a></li>
								<li><a href="#"><span class="lnr lnr-calendar-full"></span>11 Agustus, 2019</a></li>
								<li><a href="#"><span class="lnr lnr-tag"></span>Pengumuman</a></li>
							</ul>
							<p>
								{{$p->isi}}libur
							</p>
						</div>
					</div>
					<div class="single-latest-post row align-items-center">
						<div class="col-lg-5 post-left">
							<div class="feature-img relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="{{ asset('magazine/img/kurban.jpg') }}"  style="border:0px; width:400px; height:200px;"  alt="">
							</div>
							<ul class="tags">
								<li><a href="#">Penyembelihan Qurban</a></li>
							</ul>
						</div>
						<div class="col-lg-7 post-right">
							<a href="image-post.html">
								<h4>{{$p->nama_pengumuman}}Penyembelihan Hewan Kurban Idul Adha 2019</h4>
							</a>
							<ul class="meta">
								<li><a href="#"><span class="lnr lnr-user"></span>Administrator</a></li>
								<li><a href="#"><span class="lnr lnr-calendar-full"></span>, 2018</a></li>
								<li><a href="#"><span class="lnr lnr-tag"></span>Pengumuman</a></li>
							</ul>
							<p>
								{$p->isi}Idul Adha yang biasa disebut lebaran haji atapun lebaran kurban sangat identik dengan penyembelihan hewan kurban. SMP Negeri 2 Patrol tahun ini juga melakukan penyembelihan hewan kurban. Yang rencananya akan dihadiri oleh guru-guru, siswa dan pengurus OSIS.
							</p>
						</div>
					</div>
					<div class="single-latest-post row align-items-center">
						<div class="col-lg-5 post-left">
							<div class="feature-img relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="{{ asset('magazine/img/ajar.jpg') }}"  style="border:0px; width:400px; height:200px;"  alt="">
							</div>
							<ul class="tags">
								<li><a href="#">Tahun Ajaran Baru</a></li>
							</ul>
						</div>
						<div class="col-lg-7 post-right">
							<a href="image-post.html">
								<h4>{{$p->nama_pengumuman}}Pengumuman Peserta Didik Baru Tahun Pelajaran 2019-2020</h4>
							</a>
							<ul class="meta">
								<li><a href="#"><span class="lnr lnr-user"></span>Administrator</a></li>
								<li><a href="#"><span class="lnr lnr-calendar-full"></span>1 Juli, 2019</a></li>
								<li><a href="#"><span class="lnr lnr-tag"></span>Pengumuman</a></li>
							</ul>
							<p class="excert">
								{{$p->isi}}Setelah libur semester ganjil tahun ajaran 2016-2017, proses belajar mengajar di semester genap tahun ajaran 2019-2020 mulai aktif kembali tanggal 6 Januari 2020.
							</p>
						</div>
					</div>
					<div class="single-latest-post row align-items-center">
						<div class="col-lg-5 post-left">
							<div class="feature-img relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="{{ asset('magazine/img/pawidya.jpg') }}" style="border:0px; width:400px; height:200px;" alt="">
							</div>
							<ul class="tags">
								<li><a href="#">Pawidya</a></li>
							</ul>
						</div>
						<div class="col-lg-7 post-right">
							<a href="image-post.html">
								<h4>{{$p->nama_pengumuman}}SMPN 2 Patrol Resepsi Pelepasan Siswa Tahun Ajaran 2018/2019.</h4>
							</a>
							<ul class="meta">
								<li><a href="#"><span class="lnr lnr-user"></span>Administrator</a></li>
								<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
								<li><a href="#"><span class="lnr lnr-tag"></span>Pengumuman</a></li>
							</ul>
							<p>
								{{$p->isi}SMP Negeri 2 Patrol adakan pelepasan Siswa/i kelas IX, Tahun Ajaran 2018/2019 bertempat di halaman SMPN 2 Patrol Desa Arjasari, Kecamatan Patrol Kabupaten Indramayu. Dengan mengusung Tema Meraih Cita-cita Sambut Masa Depan dengan Kemandirian Berakhlak Mulia. Yang bertujuan untuk menumbuhkan, kecintaan serta pengabdian keluarga besar SMPN 2 Patrol. Kepada Almamater Pendidikan. Juga mempererat tali silaturahmi untuk meningkatkan rasa persaudaraan, dan kebersamaan.
							</p>
						</div>
					</div>
					<!-- @endforeach -->
				</div>

				<!-- End latest-post Area -->
			</div>
			<div class="col-lg-4">
				<div class="sidebars-area">
					<div class="single-sidebar-widget editors-pick-widget">
						<h6 class="title">Editor’s Pick</h6>
						<div class="editors-pick-post">
							<div class="feature-img-wrap relative">
								<div class="feature-img relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/e1.jpg" alt="">
								</div>
								<ul class="tags">
									<li><a href="#">Travel</a></li>
								</ul>
							</div>
							<div class="post-lists">
								<div class="single-post d-flex flex-row">
									<div class="thumb">
										<img src="img/e2.jpg" alt="">
									</div>
									<div class="detail">
										<a href="image-post.html"><h6>Jadwal Pelajaran Semester Genap 2019/2020</h6></a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
											<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
										</ul>
									</div>
								</div>
								<div class="single-post d-flex flex-row">
									<div class="thumb">
										<img src="img/e3.jpg" alt="">
									</div>
									<div class="detail">
										<a href="image-post.html"><h6>Kalender Akademik Smp Negeri Patrol</h6></a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
											<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
										</ul>
									</div>
								</div>
								<div class="single-post d-flex flex-row">
									<div class="thumb">
										<img src="img/e4.jpg" alt="">
									</div>
									<div class="detail">
										<a href="image-post.html"><h6>5 Tips For Offshore Soft
										Development </h6></a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
											<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="single-sidebar-widget ads-widget">
						<img class="img-fluid" src="img/sidebar-ads.jpg" alt="">
					</div>
					<div class="single-sidebar-widget most-popular-widget">
						<h6 class="title">Most Popular</h6>
						<div class="single-list flex-row d-flex">
							<div class="thumb">
								<img src="img/m1.jpg" alt="">
							</div>
							<div class="details">
								<a href="image-post.html">
									<h6>Help Finding Information
									Online is so easy</h6>
								</a>
								<ul class="meta">
									<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
									<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
								</ul>
							</div>
						</div>
						<div class="single-list flex-row d-flex">
							<div class="thumb">
								<img src="img/m2.jpg" alt="">
							</div>
							<div class="details">
								<a href="image-post.html">
									<h6>Compatible Inkjet Cartr
									world famous</h6>
								</a>
								<ul class="meta">
									<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
									<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
								</ul>
							</div>
						</div>
						<div class="single-list flex-row d-flex">
							<div class="thumb">
								<img src="img/m3.jpg" alt="">
							</div>
							<div class="details">
								<a href="image-post.html">
									<h6>5 Tips For Offshore Soft
									Development </h6>
								</a>
								<ul class="meta">
									<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
									<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
								</ul>
							</div>
						</div>
						<div class="single-list flex-row d-flex">
							<div class="thumb">
								<img src="img/m4.jpg" alt="">
							</div>
							<div class="details">
								<a href="image-post.html">
									<h6>5 Tips For Offshore Soft
									Development </h6>
								</a>
								<ul class="meta">
									<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
									<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End latest-post Area -->
</div>
@endsection