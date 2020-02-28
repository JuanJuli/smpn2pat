@extends('layouts/master')

@section('title')
<title>SMPN 2 PATROL</title>
@endsection

@section('header')
<h1>
        Tambah Siswa
        <!-- <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Tambah Siswa</a></li>
      </ol>
@endsection


@section('konten')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Tambah Siswa</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form method="post" enctype="multipart/form-data" 
    action="{{route('add.siswa')}}">
    {{ csrf_field() }}
      <label>Nama Siswa</label>
      <input class="form-control" type="text" name="nama" required>
      <label>Kelas</label>
      <select class="form-control"  name="kelas">
      @foreach($kelas as $ks)
        <option value="{{$ks->id}}">{{$ks->nama}}</option>
      @endforeach
      </select>
      <label>NIS</label>
      <input class="form-control" type="text" name="nis" required>
      <label>Jenis Kelamin</label>
      <select class="form-control" name="jk">
        <option value="perempuan">Perempuan</option>
        <option value="Laki-laki">Laki-laki</option>
      </select>
      <label>Alamat</label>
      <input class="form-control" type="text" name="alamat" required>
      <button style="margin-top: 10px;" type="submit" class="btn btn-primary btn-sm">Tambah</button>
    </form>
 </div>
</div>
@endsection