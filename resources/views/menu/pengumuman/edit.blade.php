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
            <!-- /.box-header -->
            <div class="box-body">
              @foreach($pengumuman as $p)
              <form method="post" action="{{route('pengumuman.update')}}">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->id }}">
                <label>Nama Pengumuman</label>
                <input class="form-control" type="text" name="nama" value="{{ $p->nama_pengumuman }}">
                <label>Isi</label>
                <textarea class="form-control" name="isi">{{ $p->isi }}</textarea>
                <label>File</label>
                <input type="file" name="file" value="{{ $p->file }}">
                <button class="btn btn-sm btn-primary">Edit</button>
              </form>
              @endforeach
     </div>
   </div>
@endsection