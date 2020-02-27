<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
use App\Pengumuman;

class PostController extends Controller
{
    public function kegiatan($id){
    	$kegiatan = Kegiatan::where('id',$id)->get();
    	return view('public/menu/kegiatan/post',compact($kegiatan));
    }

    public function pengumuman($id){
    	$pengumuman = Pengumuman::where('id',$id)->get();
    	return view('public/menu/pengumuman/post',compact('pengumuman'));
    }

}
