@extends('layouts/master')

@section('title')
<title>SMPN 2 PATROL</title>
@endsection

@section('header')
<h1>
        Edit Data Siswa
        <!-- <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Edit Data Siswa</a></li>
      </ol>
@endsection


@section('konten')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Edit Siswa</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form method="post" enctype="multipart/form-data" 
    action="{{route('update.siswa')}}">
    {{ csrf_field() }}
    @foreach($siswa as $sw)
      <input type="hidden" name="id" value="{{$sw->id}}">
      <label>Nama Siswa</label>
      <input class="form-control" type="text" name="nama" required value="{{$sw->nama}}">
      <label>Kelas</label>
      <select class="form-control"  name="kelas">
      @foreach($kelas as $ks)
        <option <?php if($ks->id==$sw->id_k){
          ?>
          selected
          <?php
        } ?> value="{{$ks->id}}">{{$ks->nama}}</option>
      @endforeach
      </select>
      <label>NIS</label>
      <input class="form-control" type="text" name="nis" required value="{{$sw->nis}}">
      <label>Jenis Kelamin</label>
      <select class="form-control" name="jk">
        @if($sw->jenis_kelamin=='perempuan')
          <option selected value="Perempuan">Perempuan</option>
          <option value="Laki-laki">Laki-laki</option>
        @else
          <option selected value="Laki-laki">Laki-laki</option>
          <option value="perempuan">Perempuan</option>
        @endif
      </select>
      <label>Alamat</label>
      <input class="form-control" type="text" name="alamat" required value="{{$sw->alamat}}">
    @endforeach
      <button style="margin-top: 10px;" type="submit" class="btn btn-primary btn-sm">Edit</button>
    </form>
 </div>
</div>
@endsection