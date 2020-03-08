<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use App\Kegiatan;

use Illuminate\Http\Request;

class PPengumumanController extends Controller
{
	public function show(){

    $pengumuman_post = Pengumuman::orderBy('created_at', 'DESC')->paginate(4);
    $pengumuman = Pengumuman::orderBy('created_at', 'DESC')->get();        
    $kegiatan = Kegiatan::orderBy('created_at', 'DESC')->get();

    return view('public.menu.pengumuman.pengumuman',compact('kegiatan','pengumuman','pengumuman_post')); 

   }
}
