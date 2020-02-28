<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Foto;
use File;
use Redirect;
class GaleryController extends Controller
{
    public function index()
    {
        $album = Album::all();
        $foto = Foto::all();
    	return view('public/menu/galery/galery',compact(
            'album','foto'));
    }


    public function update(Request $request){
    	$this->validate($request, [
            'nama' => 'required',
            'keterangan' => 'required'
        ]);

        $album = Album::where('id',$request->id);
        $album->update([
        	'nama'=>$request->nama,
        	'keterangan'=>$request->keterangan
        ]);

        return redirect(route('admin.galery'));
    }

    public function show(){

    	$album = Album::get();

    	return view('menu/galery/galery',compact('album'));
    }

    public function add(){
    	return view('menu/galery/tambah');
    }

    public function edit($id){
    	$album = Album::where('id',$id)->get();
    	return view('menu/galery/edit',compact('album'));
    }

    public function store(Request $request){

    	$this->validate($request, [
            'foto' => 'required',
            'nama' => 'required',
            'keterangan' => 'required'
        ]);
        $album = Album::create([
        	'nama'=>$request->nama,
        	'keterangan'=>$request->keterangan
        ]);

        if($request->hasfile('foto'))
         {

            foreach($request->file('foto') as $file)
            {
                $name=$file->getClientOriginalName();
                $file->move(public_path().'/album/', $name);  
                $data[] = $name;  
            }
         }

         $id = $album->id;

         foreach ($data as $dt) {
         	Foto::create([
         		'nama'=>$dt,
         		'id_a'=>$id
         	]);
         }

         return redirect(route('admin.galery'));
    }

    public function destroy($id){
    	$path = 'album/';

        $foto = Foto::where('id_a',$id)->get();

        foreach ($foto as $f) {
        	File::delete($path.$f->nama);
        }
        
        Foto::where('id_a',$id)->delete();

    	Album::where('id',$id)->delete();

    	return redirect(route('admin.galery'));
    }

    public function detail($id){
    	$album = Album::where('id',$id)->get();
    	$foto = Foto::where('id_a',$id)->get();
    	return view('menu/galery/detail',compact('album','foto'));
    }

    public function tambahFoto($id){
    	$album = Album::where('id',$id)->get();
    	return view('menu/galery/foto',compact('album'));
    }

    public function addFoto(Request $request){
    	$this->validate($request, [
            'foto' => 'required'
        ]);

        if($request->hasfile('foto'))
         {

            foreach($request->file('foto') as $file)
            {
                $name=$file->getClientOriginalName();
                $file->move(public_path().'/album/', $name);  
                $data[] = $name;  
            }
         }

         foreach ($data as $dt) {
         	Foto::create([
         		'nama'=>$dt,
         		'id_a'=>$request->id
         	]);
         }

         return redirect(route('detail.album',$request->id));
    }

    public function hapusFoto($id){
    	$path = 'album/';

        $foto = Foto::where('id_f',$id)->get();
        foreach ($foto as $f) {
        	File::delete($path.$f->nama);
        }
        
        Foto::where('id_f',$id)->delete();

        return Redirect::back();
    }
}
