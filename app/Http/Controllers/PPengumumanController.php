<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use App\Kegiatan;

use Illuminate\Http\Request;

class PPengumumanController extends Controller
{
	public function tampilisidatabase(){

    $pengumuman = Pengumuman::all();        
    $kegiatan = Kegiatan::all();

    return view('public.menu.pengumuman.pengumuman',compact('kegiatan','pengumuman')); 

   }

   public function tampilisisatudata($id){

    $pengumuman = Pengumuman::first();        

    return view('public.menu.pengumuman.pengumuman', ['pengumuman' => $pengumuman]); 

   }

    public function show(){
    	return view('public/menu/pengumuman/pengumuman');
    }

    public function pengumuman($id) {
        $this->data['title'] = 'Pengumuman';
        $this->data['pengumuman'] = Models\Pengumuman::find($id);
        return view('menu.pengumuman', $this->data);
    }
}
