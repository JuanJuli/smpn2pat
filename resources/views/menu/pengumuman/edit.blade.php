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
  @foreach($peng as $p)
  <div class="box-body">
    <form method="post" action="{{route('update.adminp')}}" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="hidden" name="id" value="{{ $p->id }}">
      <label>Nama Pengumuman</label>
      <input class="form-control" type="text" name="nama" value="{{ $p->nama_pengumuman }}">
      <label>Isi</label>
      <textarea class="form-control" name="isi">{{ $p->isi }}</textarea>
      <label>File</label>
      <input type="file" name="file" class="form-control">
      <button style="margin-top: 10px;" class="btn btn-sm btn-primary">Edit</button>
    </form>
  </div>
  @endforeach
</div>
@endsection