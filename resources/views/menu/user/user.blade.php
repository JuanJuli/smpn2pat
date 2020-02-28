@extends('layouts/master')

@section('title')
<title>SMPN 2 PATROL</title>
@endsection

@section('header')
<h1>
        User
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Data User</a></li>
      </ol>
@endsection

@section('konten')
<div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Data User</h3>
        <!-- <a style="float: right;" href="{{route('user')}}" style="margin-bottom: 25px;" type="button" class="btn btn-primary btn-sm">Tambah User</a> -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="table-responsive" >
        <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                 <th>Nama User</th>
                 <th>Email</th>
                 <th>Pilihan</th>
              </tr>
          </thead>
          <!-- table -->
          <tbody id="body-t">
            @foreach($user as $u)
          	<tr>
          		<td>{{$u->name}}</td>
              <td>{{$u->email}}</td>
          		<td>
          			<a href="{{route('edit.user',$u->id)}}" class="btn btn-sm btn-primary">Edit</a>
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

    });
</script>
@endsection