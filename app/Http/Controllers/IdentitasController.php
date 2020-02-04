<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class IdentitasController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $identitas = DB::table('identitas')->get();
        return view('menu/identitas/identitas',['identitas'=>$identitas]);
    }

    public function edit($id){
        $identitas = DB::table('identitas')->where('id',$id)->get();
        return view('menu/identitas/edit',['identitas'=>$identitas]);
    }

    public function update(Request $request){

        DB::table('identitas')->where('id',$request->id)->update([
        'nama'=>$request->nama,
        'alamat'=>$request->alamat,
        'email'=>$request->email
        ]);

        return redirect('identitas');
    }
}
