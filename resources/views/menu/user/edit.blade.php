@extends('layouts/master')

@section('title')
<title>SMPN 2 PATROL</title>
@endsection

@section('header')
<h1>
        User
        <!-- <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Edit User</a></li>
      </ol>
@endsection


@section('konten')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Edit User</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form method="post" enctype="multipart/form-data" 
    action="{{route('update.user')}}">
    {{ csrf_field() }}
    @foreach($user as $u)
      <input type="hidden" name="id" value="{{$u->id}}">
      <label>Nama User</label>
      <input class="form-control" type="text" name="nama" required value="{{$u->nama}}">
      <label>Email</label>
      <input class="form-control" type="email" name="email" required value="{{$u->email}}">
      <label>Password</label>
      <input class="form-control" type="password" name="password">
    @endforeach
      <button style="margin-top: 10px;" type="submit" class="btn btn-primary btn-sm">Edit</button>
    </form>
 </div>
</div>
@endsection