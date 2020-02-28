<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use DB;

class KelasController extends Controller
{
    public function index()
    {
    	$kelas = Kelas::get();
    	return view('menu/kelas/kelas',compact('kelas'));
    }

    public function show(){
    	return view('menu/kelas/tambah');
    }

    public function edit($id){
    	// $kelas = Kelas::findOrFail($id);
     //    $kelas = $kelas->get();
        $kelas = DB::table('kelas')->where('id',$id)->get();
        return view('menu/kelas/edit',compact('kelas'));
    } 

    public function update(Request $request){
    	$kelas = Kelas::findOrFail($request->id);
        $kelas->update([
            'nama'=>$request->nama
        ]);

        return redirect('kelas');
    }

    public function store(Request $request){
    	Kelas::create([
            'nama'=>$request->nama
        ]);

        return redirect('kelas');
    }

    public function destroy($id){
    	$kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return redirect('kelas');
    }
}
