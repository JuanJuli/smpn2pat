<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use Illuminate\Http\Request;

class PPengumumanController extends Controller
{
	public function tampilisidatabase(){

    $pengumuman = Pengumuman::all();        

    return view('public.menu.pengumuman.pengumuman', ['pengumuman' => $pengumuman]); 

   }

    public function show(){
    	return view('public/menu/pengumuman/pengumuman');
    }
    public function store(){
    	
    }

    public function pengumuman($id) {
        $this->data['title'] = 'Pengumuman';
        $this->data['pengumuman'] = Models\Pengumuman::find($id);
        return view('menu.pengumuman', $this->data);
    }
}
