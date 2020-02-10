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
        <li><a href="#">Tambah Kegiatan</a></li>
      </ol>
@endsection


@section('konten')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Kegiatan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="post" 
              action="{{route('ini')}}"
              enctype="multipart/form-data">
              {{ csrf_field() }}
                <label>Nama Kegiatan</label>
                <input class="form-control" type="text" name="nama">
                <label>Isi</label>
                <textarea class="form-control" name="isi"></textarea>
                <label>Gambar</label>
                <input type="file" name="file" class="form-control">
                <button style="margin-top: 10px;" type="submit" class="btn btn-sm btn-primary">Submit</button>
              </form>
     </div>
   </div>
@endsection