<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
use App\Pengumuman;
use App\Siswa;
use App\Album;
use App\Foto;

class PostController extends Controller
{
    public function kegiatan($id){
    	$kegiatan = Kegiatan::where('id',$id)->get();
        $pengumuman = Pengumuman::all();
    	return view('public/menu/kegiatan/post',compact('kegiatan','pengumuman'));
    }

    public function pengumuman($id){
        $kegiatan = Kegiatan::all();
    	$pengumuman = Pengumuman::where('id',$id)->get();
    	return view('public/menu/pengumuman/post',compact('pengumuman','kegiatan'));
    }

    public function siswa(){
        $kegiatan = Kegiatan::all();
        $pengumuman = Pengumuman::all();
    	$siswa = Siswa::all();
    	return view('public/menu/siswa/siswa',compact('siswa','pengumuman','kegiatan'));
    }

    public function album($id){
        $album = Album::where('id',$id)->get();
        $foto  = Foto::where('id_a',$id)->get();

        return view('public/menu/galery/post',compact('album','foto'));
    }

}
