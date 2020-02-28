@extends('layouts/master')

@section('title')
<title>Edit Identitas</title>
@endsection

@section('header')
<h1>
        Edit Identitas
        <!-- <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Identitas Sekolah</a></li>
      </ol>
@endsection

@section('konten')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Edit Data Identitas Sekolah</h3>
    </div>
            <!-- /.box-header -->
    <div class="box-body">
    	@foreach($identitas as $i)
    	<form action="{{route('identitas.update')}}" method="post" enctype="multipart/form-data">
    	{{ csrf_field() }}
    		<input type="hidden" name="id" value="{{ $i->id }}">
    		<label>Nama Sekolah</label>
    		<input class="form-control" type="text" name="nama" value="{{$i->nama }}">
    		<label>Alamat</label>
    		<input class="form-control" type="text" name="alamat" value="{{$i->alamat}}">
    		<label>Email</label>
    		<input class="form-control" type="email" name="email" value="{{ $i->email }}">
            <label>Logo Sekolah</label>
            <input type="file" name="logo" class="form-control">
            <label>Gambar 1</label>
            <input type="file" name="gambar1" class="form-control">
            <label>Gambar 2</label>
            <input type="file" name="gambar2" class="form-control">
            <label>Gambar 3</label>
            <input type="file" name="gambar3" class="form-control">
            <small>*Kosongkan jika tidak ingin diubah</small><br>
    		<button style="margin-top: 10px;" type="submit" class="btn btn-primary btn-sm">Edit</button>
    	</form>
    	@endforeach            
    </div>
</div>
@endsection