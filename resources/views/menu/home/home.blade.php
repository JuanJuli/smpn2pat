@extends('layouts/master')

@section('title')
<title>SMPN 2 PATROL</title>
@endsection

@section('header')
<h1>
        Home
        <!-- <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-home"></i> Home</a></li>
      </ol>
@endsection

@section('konten')
<div class="container-fluid">
          <div class="row">
            <div style="min-height: 50px;border-width: 3px;" class="box box-solid box-primary">
              <div class="box-body">
                <h4><i class="fa fa-users"></i><span>Juan Juliyanto</span></h4>
                    <span>Selamat Datang Administrator</span>
              </div>
            </div>
          </div>
        </div>
@endsection