<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class PengumumanController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pengumuman = DB::table('pengumuman')->get();
        return view('menu/pengumuman/pengumuman',['pengumuman'=>$pengumuman]);
    }

    public function show(){
        return view('menu/pengumuman/tambah');
    }

    public function edit($id){
        $pengumuman = DB::table('pengumuman')->where('id',$id)->get();
        return view('menu/pengumuman/edit',['pengumuman'=>$pengumuman]);
    }

    public function store(Request $request){
        DB::table('pengumuman')->insert([
            'nama_pengumuman'=>$request->nama,
            'isi'=>$request->isi,
            'file'=>"file",
            'created_at'=>date('Y-m-d')
        ]);

        return redirect('pengumuman');
    }

    public function update(Request $request){
        DB::table('pengumuman')->where('id',$request->id)->update([
            'nama_pengumuman'=>$request->nama,
            'isi'=>$request->isi,
            'file'=>"file"
        ]);
        return redirect('pengumuman');
    }

    public function destroy($id){
        DB::table('pengumuman')->where('id',$id)->delete();

        return redirect('pengumuman');
    }
}
