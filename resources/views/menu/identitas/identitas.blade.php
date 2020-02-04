@extends('layouts/master')

@section('title')
<title>SMPN 2 PATROL</title>
@endsection

@section('header')
<h1>
        Identitas
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
              <h3 class="box-title">Data Identitas Sekolah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive" >
              <table style="overflow-x: scroll;" id="example1" class="table table-bordered table-striped">
                  <thead>
            <tr>
                 <th>Nama Sekolah</th>
                 <th>Alamat</th>
                 <th>Email</th>
                 <th>Pilihan</th>
            </tr>
        </thead>
      <tbody>
        @foreach($identitas as $i)
        <tr>
          <td>{{$i->nama}}</td>
          <td>{{$i->alamat}}</td>
          <td>{{$i->email}}</td>
          <td>
            <a href="{{route('identitas.edit', $i->id)}}" class="btn btn-xs btn-info">Edit</a>
          </td>
        </tr>
        @endforeach
    </tbody>
                </table></div>
     </div></div>
@endsection