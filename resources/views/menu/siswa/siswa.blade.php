@extends('layouts/master')

@section('title')
<title>SMPN 2 PATROL</title>
@endsection

@section('header')
<h1>
        Data Siswa
        <!-- <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Data Siswa</a></li>
      </ol>
@endsection

@section('konten')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<button style="margin-bottom: 25px;" type="button" class="btn btn-primary btn-sm">Tambah Data Siswa</button>
                <div class="table-responsive" >
              <table style="overflow-x: scroll;" id="example1" class="table table-bordered table-striped">
                  <thead>
            <tr>
                 <th>Nama Siswa</th>
                 <th>Jenis Kelamin</th>
                 <th>Alamat</th>
                 <th>Kelas</th>
                 <th>Pilihan</th>
            </tr>
        </thead>
      <tbody>
      	<tr>
      		<td>Juan Juliyanto</td>
      		<td>Laki-laki</td>
      		<td>Widasari</td>
      		<td>8C</td>
      		<td>
      			<button class="btn btn-sm btn-primary">Edit</button>
      		</td>
      	</tr>
    </tbody>
                </table></div>
     </div></div>
@endsection