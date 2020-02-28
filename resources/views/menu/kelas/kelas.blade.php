@extends('layouts/master')

@section('title')
<title>SMPN 2 PATROL</title>
@endsection

@section('header')
<h1>
        Kelas
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Data Kelas</a></li>
      </ol>
@endsection

@section('konten')
<div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Data Siswa</h3>
        <a style="float: right;" href="{{route('form.kelas')}}" style="margin-bottom: 25px;" type="button" class="btn btn-primary btn-sm">Tambah Data Kelas</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="table-responsive" >
        <table style="overflow-x: scroll;" id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                 <th>Kelas</th>
                 <th>Pilihan</th>
              </tr>
          </thead>
          <tbody>
            @foreach($kelas as $ks)
          	<tr>
          		<td>{{$ks->nama}}</td>
          		<td>
          			<a href="{{route('edit.kelas',$ks->id)}}" class="btn btn-sm btn-primary">Edit</a>
                <a href="{{route('destroy.kelas',$ks->id)}}" class="btn btn-sm btn-danger">Hapus</a>
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

        

    });
</script>
@endsection