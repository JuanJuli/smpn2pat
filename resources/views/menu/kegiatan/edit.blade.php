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
              <h3 class="box-title">Edit Kegiatan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @foreach($kegiatan as $k)
              <form method="post" action="{{route('kegiatan.update')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $k->id }}">
                <label>Nama Kegiatan</label>
                <input class="form-control" type="text" name="nama" value="{{ $k->nama_kegiatan }}">
                <label>Isi Kegiatan</label>
                <textarea class="form-control" name="isi">{{ $k->isi }}</textarea>
                <label>Gambar</label>
                <input type="file" name="file" class="form-control">
                <button style="margin-top: 10px;" class="btn btn-sm btn-primary">Edit</button>
              </form>
              @endforeach
     </div>
   </div>
@endsection