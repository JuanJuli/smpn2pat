@extends('layouts/master')

@section('title')
<title>SMPN 2 PATROL</title>
@endsection

@section('header')
<h1>
        Album Sekolah
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Album Sekolah</a></li>
      </ol>
@endsection

@section('konten')
<div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Album Sekolah</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        @foreach($album as $al)
        <div class="row">
          <div class="col-md-2">
            Nama
          </div>
          <div class="col-md-6">
            :&emsp;{{$al->nama}}
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            Keterangan
          </div>
          <div class="col-md-6">
            :&emsp;{{$al->keterangan}}
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            Tanggal
          </div>
          <div class="col-md-6">
            :&emsp;
            @php
              $tanggal = new DateTime($al->created_at);
              $tanggal = $tanggal->format("d-m-Y");
              $id = $al->id;
            @endphp
            {{$tanggal}}
          </div>
        </div>
        @endforeach
        <br>
        <div class="table-responsive" >
        <table style="overflow-x: scroll;" id="example1" class="table">
            <thead>
              <tr>
                 <th align="justify">Foto</th>
                 <th>Pilihan <a href="{{route('tambah.foto',$id)}}" class="btn btn-xs btn-primary" style="float: right;">Tambah Foto</a></th>
              </tr>
          </thead>
          <!-- table -->
          
          <tbody>
            @foreach($foto as $f)
              <tr>
                <td>
                  <img width="75" class="img-thumbnail" src="{{ URL::to('/') }}/album/{{ $f->nama }}">
                </td>
                <td>
                  <a href="{{route('hapus.foto',$f->id_f)}}" class="btn btn-danger btn-sm">Hapus</a>
                </td>
              </tr>
            @endforeach
          </tbody>

    </table>
  </div>
</div>
</div>
@endsection