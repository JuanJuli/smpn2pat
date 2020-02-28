<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
use App\Pengumuman;

class PKegiatanController extends Controller
{
    public function show(){
    	$kegiatan = Kegiatan::all();
    	$pengumuman = Pengumuman::all();
    	return view('public/menu/kegiatan/kegiatan',compact('kegiatan','pengumuman'));
    }
}
