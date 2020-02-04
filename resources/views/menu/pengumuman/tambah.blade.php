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
        <li><a href="#">Tambah Pengumuman</a></li>
      </ol>
@endsection


@section('konten')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Pengumuman</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="post" 
              action="{{route('pengumuman.store')}}">
              {{ csrf_field() }}
                <label>Nama Pengumuman</label>
                <input class="form-control" type="text" name="nama">
                <label>Isi</label>
                <textarea class="form-control" name="isi"></textarea>
                <label>File</label>
                <input type="file" name="file" disabled>
                <button style="margin-top: 10px;" type="submit" class="btn btn-sm btn-primary">Submit</button>
              </form>
     </div>
   </div>
@endsection