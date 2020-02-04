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
    	<form action="{{route('identitas.update')}}" method="post">
    	{{ csrf_field() }}
    		<input type="hidden" name="id" value="{{ $i->id }}">
    		<label>Nama Sekolah</label>
    		<input class="form-control" type="text" name="nama" value="{{$i->nama }}">
    		<label>Alamat</label>
    		<input class="form-control" type="text" name="alamat" value="{{$i->alamat}}">
    		<label>Email</label>
    		<input class="form-control" type="email" name="email" value="{{ $i->email }}">
    		<button type="submit" class="btn btn-primary btn-sm">Edit</button>
    	</form>
    	@endforeach            
    </div>
</div>
@endsection