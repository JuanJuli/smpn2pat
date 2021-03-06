<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
use App\Identitas;
use App\Pengumuman;
class PublicController extends Controller
{
    public function show(){
    	$kegiatan = Kegiatan::paginate(5);
    	$pengumuman = Pengumuman::paginate(5);
    	$identitas = Identitas::get();
    	return view('public',compact('kegiatan','pengumuman','identitas'));
    }
}
