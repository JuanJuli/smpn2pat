@extends('layouts/master')

@section('title')
<title>SMPN 2 PATROL</title>
@endsection

@section('header')
<h1>
        Siswa
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Data Siswa</a></li>
      </ol>
@endsection

@section('konten')
<div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Data Siswa</h3>
        <a style="float: right;" href="{{route('form.siswa')}}" style="margin-bottom: 25px;" type="button" class="btn btn-primary btn-sm">Tambah Data Siswa</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="row" style="margin-bottom: 10px;">
          <div class="col-md-3">
            <select class="form-control" id="kelas">
             <option value="none">Semua Kelas</option> 
             @foreach($kelas as $ks)
             <option value="{{$ks->id}}">{{$ks->nama}}</option>
             @endforeach
            </select>
          </div>
        </div>
        <div class="table-responsive" style="width: 100%;">
        <table style="width: 100%;" class="table table-bordered table-striped datatable">
            <thead>
              <tr>
                 <th>Nama Siswa</th>
                 <th>Kelas</th>
                 <th>NIS</th>
                 <th>Jenis Kelamin</th>
                 <th>Alamat</th>
                 <th>Pilihan</th>
              </tr>
          </thead>
          <!-- table -->
          <tbody id="body-t">
            @foreach($siswa as $sw)
          	<tr>
          		<td>{{$sw->nama}}</td>
          		<td>{{$sw->kelas->nama}}</td>
          		<td>{{$sw->nis}}</td>
          		<td>{{$sw->jenis_kelamin}}</td>
              <td>{{$sw->alamat}}</td>
          		<td>
          			<a href="{{route('edit.siswa',$sw->id)}}" class="btn btn-sm btn-primary">Edit</a>
                <a href="{{route('destroy.siswa',$sw->id)}}" class="btn btn-sm btn-danger">Hapus</a>
          		</td>
          	</tr>
            @endforeach
          </tbody>
    </table>
  </div>
</div>
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
                url  : "<?php echo route('ubah.siswa'); ?>",
                data : {id:id,_token:token},
                success:function(data){
                    $("#body-t").html(data);
                }
            });
        });
       $(".datatable").dataTable({
          "ordering":false
       });
    });
</script>
@endsection