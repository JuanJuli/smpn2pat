<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Identitas;
use DB;
use File;


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

        $identitas =  Identitas::findOrFail($request->id);

        if(isset($request->logo))
         {

            $file = $request->file('logo');
        
            $name=$file->getClientOriginalName();

            $file->move(public_path().'/album/', $name);  

            File::delete(public_path().'/album/',$identitas->logo);

            Identitas::where('id',$request->id)->update([
                'logo'=>$name
            ]);
            
         }

         if($request->hasfile('gambar1'))
         {

            $file = $request->file('gambar1');
            
            $name=$file->getClientOriginalName();
            $file->move(public_path().'/album/', $name);

            File::delete(public_path().'/album/',$identitas->gambar1);

            Identitas::where('id',$request->id)->update([
                'gambar1'=>$name
            ]);
            
         }

         if($request->hasfile('gambar2'))
         {

            $file = $request->file('gambar2');
            
            $name=$file->getClientOriginalName();

            $file->move(public_path().'/album/', $name); 

            File::delete(public_path().'/album/',$identitas->gambar2);

            Identitas::where('id',$request->id)->update([
                'gambar2'=>$name
            ]);

            
         }

         if($request->hasfile('gambar3'))
         {

            $file = $request->file('gambar3');
            
            $name=$file->getClientOriginalName();

            $file->move(public_path().'/album/', $name); 

            File::delete(public_path().'/album/',$identitas->gambar3);

            Identitas::where('id',$request->id)->update([
                'gambar3'=>$name
            ]);
            
         }

         $identitas->update([
        'nama'=>$request->nama,
        'alamat'=>$request->alamat,
        'email'=>$request->email
        ]);

        return redirect('identitas');
    }
}
