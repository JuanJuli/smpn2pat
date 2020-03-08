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
					<div class="latest-post-wrap">
					<h4 class="cat-title">Siswa</h4>
					<!-- Start single-post Area -->
					<div class="single-post-wrap">
						<div class="content-wrap">
							<div style="margin-bottom: 10px;">
								<h4 style="float: left;margin-bottom: 10px;">Data Siswa</h4>

								<select style="float: right;margin-bottom: 10px;" class="form-control" id="kelas">
									<option>Semua Kelas</option>
								@foreach($kelas as $ks)
					             <option value="{{$ks->id}}">{{$ks->nama}}</option>
					             @endforeach
								</select>
							</div>
							<div style="width: 100%;max-width: 630px;" class="table-responsive">
								<table style="width: 630px;" class="table table-striped table-bordered datatable">
									<thead>
										<tr>
											<th>Nama Siswa</th>
											<th>NIS</th>
											<th>Kelas</th>
											<th>Jenis Kelamain</th>
										</tr>
									</thead>
									<tbody id="body-t">
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

@section('skrip')
<script type="text/javascript">
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#kelas").change(function(){
            var id = $(this).val();
            var token = $("input[nama='_token']").val();
            $.ajax({
                type : "post",
                url  : "<?php echo route('post.ukelas'); ?>",
                data : {id:id,_token:token},
                success:function(data){
                    $("#body-t").html(data);
                }
            });
        });

        $(".datatable").dataTable({
        	"ordering":false,
        	"bInfo":false
        });
});
</script>
@endsection