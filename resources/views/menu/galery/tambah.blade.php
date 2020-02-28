@extends('layouts/master')

@section('title')
<title>SMPN 2 PATROL</title>
@endsection

@section('header')
<h1>
        Album
        <!-- <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Tambah Album</a></li>
      </ol>
@endsection


@section('konten')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Tambah Album</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form method="post" 
    action="{{route('add.galery')}}"
    enctype="multipart/form-data">
    {{ csrf_field() }}
      <label>Nama Album</label>
      <input class="form-control" type="text" name="nama">
      <label>Keterangan</label>
      <input type="text" name="keterangan" class="form-control">
      <!-- FMF -->
      <label>Foto</label>
      <div class="input-group control-group increment" >
          <input type="file" name="foto[]" class="form-control">
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>
        <div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="foto[]" class="form-control">
            <div class="input-group-btn"> 
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>
        <!-- End FMF -->
      <button style="margin-top: 10px;" type="submit" class="btn btn-sm btn-primary">Submit</button>
    </form>
 </div>
</div>
@endsection

@section('skrip')
<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });
</script>
@endsection