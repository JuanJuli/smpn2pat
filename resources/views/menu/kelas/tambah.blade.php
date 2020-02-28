@extends('layouts/master')

@section('title')
<title>SMPN 2 PATROL</title>
@endsection

@section('header')
<h1>
        Kelas
        <!-- <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Tambah Kelas</a></li>
      </ol>
@endsection


@section('konten')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Tambah Kelas</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form method="post" enctype="multipart/form-data" 
    action="{{route('add.kelas')}}">
    {{ csrf_field() }}
      <label>Nama Kelas</label>
      <input class="form-control" type="text" name="nama" required>
      <button style="margin-top: 10px;" type="submit" class="btn btn-primary btn-sm">Tambah</button>
    </form>
 </div>
</div>
@endsection