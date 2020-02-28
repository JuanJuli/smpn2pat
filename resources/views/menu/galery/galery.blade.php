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
        <li><a href="#">Data Album Sekolah</a></li>
      </ol>
@endsection

@section('konten')
<div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Data Album Sekolah</h3>
        <a style="float: right;" href="{{route('tambah.galery')}}" style="margin-bottom: 25px;" type="button" class="btn btn-primary btn-sm">Tambah Album</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="table-responsive" >
        <table style="overflow-x: scroll;" id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                 <th>Nama Album</th>
                 <th>Keterangan</th>
                 <th>Tanggal</th>
                 <th>Pilihan</th>
              </tr>
          </thead>
          <!-- table -->
          <tbody>
            @foreach($album as $sw)
            <tr>
              <td>{{$sw->nama}}</td>
              <td>{{$sw->keterangan}}</td>
              @php
                $tanggal = new DateTime($sw->created_at);
                $tanggal = $tanggal->format("d-m-Y");
              @endphp
              <td>{{$tanggal}}</td>
              <td>
                <a href="{{route('edit.galery',$sw->id)}}" class="btn btn-sm btn-primary">Edit</a>
                <a href="{{route('destroy.album',$sw->id)}}" class="btn btn-sm btn-danger">Hapus</a>
                <a href="{{route('detail.album',$sw->id)}}" class="btn btn-info btn-sm">Detail</a>
              </td>
            </tr>
            @endforeach
          </tbody>
    </table>
  </div>
</div>
</div>
@endsection

@section('skrip')
<script type="text/javascript">
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

</script>
@endsection