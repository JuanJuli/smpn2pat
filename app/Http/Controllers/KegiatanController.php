<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use App\Kegiatan;

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

    public function tambah(){
        return view('menu/kegiatan/tambah');
    }

    public function ubah($id){
        $kegiatan = DB::table('kegiatan')->where('id',$id)->get();
        return view('menu/kegiatan/edit',['kegiatan'=>$kegiatan]);
    }

    public function store(Request $request){

        if (isset($request->file)) {

            $tujuan = 'file/kegiatan';

            $this->validate($request,[
                'nama'=>'required',
                'isi'=>'required',
                'file'=>'required'
            ]);

            $file = $request->file('file');

            $nama_file = $file->getClientOriginalName();

            $file->move($tujuan,$file->getClientOriginalName());
     
            Kegiatan::create([
                'nama_kegiatan'=>$request->nama,
                'isi'=>$request->isi,
                'gambar'=>$nama_file
            ]);

        }else{
            $this->validate($request,[
                'nama'=>'required',
                'isi'=>'required'
            ]);

            Kegiatan::create([
                'nama_kegiatan'=>$request->nama,
                'isi'=>$request->isi,
                'gambar'=>'none'
            ]);

        }
        

        return redirect('kegiatan');
    }

    public function update(Request $request){
        if (isset($request->file)) {

            $tujuan = 'file/kegiatan';

            $file = $request->file('file');

            $nama_file = $file->getClientOriginalName();

            $file->move($tujuan,$file->getClientOriginalName());

            $kegiatan = Kegiatan::findOrFail($request->id);

            File::delete($tujuan.$kegiatan->gambar);

            $kegiatan->update([
                'nama_kegiatan'=>$request->nama,
                'isi'=>$request->isi,
                'gambar'=>$nama_file
            ]);

        }else{
            $kegiatan = Kegiatan::findOrFail($request->id);
            $kegiatan->update([
                'nama_kegiatan'=>$request->nama,
                'isi'=>$request->isi
            ]);
        }

        return redirect('kegiatan');
    }

    public function destroy($id){

        $tujuan = 'file/kegiatan/';

        $kegiatan = Kegiatan::findOrFail($id);

        File::delete($tujuan.$kegiatan->gambar);

        $kegiatan->delete();

        return redirect('kegiatan');
    }
}
