@extends('layouts/master')

@section('title')
<title>SMPN 2 PATROL</title>
@endsection

@section('header')
<h1>
        Data Kelas
        <!-- <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Edit Data Kelas</a></li>
      </ol>
@endsection


@section('konten')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Edit Kelas</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form method="post" enctype="multipart/form-data" 
    action="{{route('update.kelas')}}">
    {{ csrf_field() }}
    @foreach($kelas as $sw)
      <input type="hidden" name="id" value="{{$sw->id}}">
      <label>Nama Kelas</label>
      <input class="form-control" type="text" name="nama" required value="{{$sw->nama}}">
    @endforeach
      <button style="margin-top: 10px;" type="submit" class="btn btn-primary btn-sm">Edit</button>
    </form>
 </div>
</div>
@endsection