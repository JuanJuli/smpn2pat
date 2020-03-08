<header>
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
					<ul>
					</ul>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
					<ul>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="logo-wrap" style="background-color: white;">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
					<a href="{{route('public')}}">
						<img width="75" class="img-fluid" src="{{ asset('/album/logo.png') }}" alt="">
					</a>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
					<h3>SMP NEGERI 2 PATROL</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="container main-menu" id="main-menu">
		<div class="row align-items-center justify-content-between">
			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li class="menu-active"><a href="{{route('public')}}">Home</a></li>
					<li><a href="{{route('post.siswa')}}">Siswa</a></li><li><a href="{{route('public.kegiatan')}}">Kegiatan</a></li>
					<li><a href="{{route('public.pengumuman')}}">Pengumuman</a></li>
					<li><a href="{{route('public.galery')}}">Galery</a></li>
					<li><a href="{{route('tentang')}}">Tentang</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>