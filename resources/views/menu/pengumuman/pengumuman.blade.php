@extends('layouts/master')

@section('title')
<title>SMPN 2 PATROL</title>
@endsection

@section('header')
<h1>
        Pengumuman
        <!-- <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Pengumuman</a></li>
      </ol>
@endsection


@section('konten')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pengumuman</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="{{ route('pengumuman.show')}}" style="margin-bottom: 25px;" type="button" class="btn btn-primary btn-sm">Tambah Pengumuman</a>
                <div class="table-responsive" >
              <table style="overflow-x: scroll;" id="example1" class="table table-bordered table-striped">
                  <thead>
            <tr>
                 <th>Nama Pengumuman</th>
                 <th>Tanggal Pengumuman</th>
                 <th>Isi</th>
                 <th>File</th>
                 <th>Pilihan</th>
            </tr>
        </thead>
      <tbody>
        @foreach($pengumuman as $p)
        <tr>
          <td>{{ $p->nama_pengumuman }}</td>
          <td>{{ $p->created_at }}</td>
          <td>{{ $p->isi }}</td>
          <td>{{ $p->file }}</td>
          <td>
            <a class="btn btn-sm btn-primary" href="{{route('pengumuman.edit',$p->id)}}">Edit</a>
            <a class="btn btn-sm btn-danger" href="{{route('pengumuman.hapus',$p->id)}}">Hapus</a>
          </td>
        </tr>
        @endforeach
    </tbody>
                </table></div>
     </div></div>
@endsection