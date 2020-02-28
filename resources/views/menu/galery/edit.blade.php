@extends('layouts/master')

@section('title')
<title>SMPN 2 PATROL</title>
@endsection

@section('header')
<h1>
        Album
        <!-- <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Tambah Album</a></li>
      </ol>
@endsection


@section('konten')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Tambah Album</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form method="post" 
    action="{{route('update.album')}}"
    enctype="multipart/form-data">
    {{ csrf_field() }}
      @foreach($album as $al)
      <input type="hidden" name="id" value="{{$al->id}}">
      <label>Nama Album</label>
      <input class="form-control" type="text" name="nama" value="{{$al->nama}}">
      <label>Keterangan</label>
      <input type="text" name="keterangan" class="form-control" value="{{$al->keterangan}}">
      @endforeach
        <!-- End FMF -->
      <button style="margin-top: 10px;" type="submit" class="btn btn-sm btn-primary">Submit</button>
    </form>
 </div>
</div>
@endsection
