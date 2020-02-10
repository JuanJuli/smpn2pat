@extends('layouts/master')

@section('title')
<title>SMPN 2 PATROL</title>
@endsection

@section('header')
<h1>
        Kegiatan
        <!-- <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Kegiatan</a></li>
      </ol>
@endsection


@section('konten')
<div class="box">
               

            <div class="box-header">
              <h3 class="box-title">Data Kegiatan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="{{route('tambah.k')}}" style="margin-bottom: 25px;" type="button" class="btn btn-primary btn-sm">Tambah Data Kegiatan</a>
                <div class="table-responsive" >
              <table style="overflow-x: scroll;" id="example1" class="table table-bordered table-striped">
                  <thead>
            <tr>
                 <th>Nama Kegiatan</th>
                 <th>Tanggal Kegiatan</th>
                 <th>Isi</th>
                 <th>Gambar</th>
                 <th>Pilihan</th>
            </tr>
        </thead>
      <tbody>
      	@foreach($kegiatan as $k)
        <tr>
          <td>{{ $k->nama_kegiatan }}</td>
          <td>{{ $k->created_at }}</td>
          <td>{{ $k->isi }}</td>
          <td>{{ $k->gambar}}</td>
          <td>
            <a class="btn btn-sm btn-primary" href="{{route('admin.ubahk',$k->id)}}">Edit</a>
            <a class="btn btn-sm btn-danger" href="{{route('kegiatan.hapus',$k->id)}}">Hapus</a>
          </td>
        </tr>
        @endforeach
    </tbody>
                </table></div>
     </div></div>
@endsection