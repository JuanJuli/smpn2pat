<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KegiatanController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
        $kegiatan = DB::table('kegiatan')->get();
        return view('menu/kegiatan/kegiatan',['kegiatan'=>$kegiatan]);
    }

    public function create(){
        return view('menu/kegiatan/tambah');
    }

    public function edit($id){
        $kegiatan = DB::table('kegiatan')->where('id',$id)->get();
        return view('menu/kegiatan/edit',['kegiatan'=>$kegiatan]);
    }

    public function store(Request $request){
        DB::table('kegiatan')->insert([
            'nama_kegiatan'=>$request->nama,
            'isi'=>$request->isi,
            'tanggal'=>date('Y-m-d')
        ]);

        return redirect('kegiatan');
    }

    public function update(Request $request){
        DB::table('kegiatan')->where('id',$request->id)->update([
            'nama_kegiatan'=>$request->nama,
            'isi'=>$request->isi
        ]);
        return redirect('kegiatan');
    }

    public function destroy($id){
        DB::table('kegiatan')->where('id',$id)->delete();

        return redirect('kegiatan');
    }
}
