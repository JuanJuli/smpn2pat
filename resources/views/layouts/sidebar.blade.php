<ul class="sidebar-menu" data-widget="tree">
    <li class="header">Menu</li>
    <!-- Optionally, you can add icons to the links -->
    @if(URL::current() == URL::route('admin'))
    <li class="active">
    	@else
    	<li>
    	@endif
    	<a href="{{ route('admin')}}"><i class="fa fa-home"></i> <span>Home</span></a>
    </li>

    @if(URL::current() == URL::route('siswa'))
    <li class="active">
    	@else
    	<li>
    	@endif
    	<a href="{{ route('siswa')}}"><i class="fa fa-users"> <span>Data Siswa</span></i></a></li>

    @if(URL::current() == URL::route('kegiatan'))
    <li class="active">
    	@else
    	<li>
    	@endif
    	<a href="{{ route('kegiatan')}}"><i class="fa fa-cube"> <span>Kegiatan</span></i></a></li>

    @if(URL::current() == URL::route('pengumuman'))
    <li class="active">
    	@else
    	<li>
    	@endif
    	<a href="{{ route('pengumuman')}}"><i class="fa fa-list"> <span>Pengumuman</span></i></a></li>

    @if(URL::current() == URL::route('identitas'))
    <li class="active">
    	@else
    	<li>
    	@endif
    	<a href="{{ route('identitas')}}"><i class="fa fa-address-card"> <span>Identitas</span></i></a></li>

    <li>
        <a href="#"><i class="fa fa-users"><span> User</span></i></a>
    </li>

</ul>