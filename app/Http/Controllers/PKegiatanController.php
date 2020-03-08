<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
use App\Pengumuman;

class PKegiatanController extends Controller
{
    public function show(){
    	$kegiatan_post = Kegiatan::orderBy('created_at', 'DESC')->paginate(4);

    	$kegiatan = Kegiatan::orderBy('created_at', 'DESC')->get();
    	$pengumuman = Pengumuman::orderBy('created_at', 'DESC')->get();

    	return view('public/menu/kegiatan/kegiatan',compact('kegiatan','pengumuman','kegiatan_post'));
    }
}
