<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pengumuman;
use File;


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

    public function ubah($id){
        $pengumuman = DB::table('pengumuman')->where('id',$id)->get();
        return view('menu/pengumuman/edit',['peng'=>$pengumuman]);
    }

    public function store(Request $request){

        $tujuan = 'file/pengumuman';

        $this->validate($request,[
            'nama'=>'required',
            'isi'=>'required'
        ]);

        if (isset($request->file)) {
            $file = $request->file('file');

            $nama_file = $file->getClientOriginalName();

            $file->move($tujuan,$file->getClientOriginalName());

            Pengumuman::create([
                'nama_pengumuman'=>$request->nama,
                'isi'=>$request->isi,
                'file'=>$nama_file
            ]);

        }else{
            Pengumuman::create([
                'nama_pengumuman'=>$request->nama,
                'isi'=>$request->isi,
                'file'=>'kosong'
            ]);
        }

        return redirect('pengumuman');
    }

    public function update(Request $request){
        if (isset($request->file)) {

            $tujuan = 'file/pengumuman/';

            $file = $request->file('file');

            $nama_file = $file->getClientOriginalName();

            $file->move($tujuan,$file->getClientOriginalName());

            $pengumuman = Pengumuman::findOrFail($request->id);

            File::delete($tujuan.$pengumuman->file);

            $pengumuman->update([
                'nama_pengumuman'=>$request->nama,
                'isi'=>$request->isi,
                'file'=>$nama_file
            ]);

        }else{
            $pengumuman = Pengumuman::findOrFail($request->id);
            $pengumuman->update([
                'nama_pengumuman'=>$request->nama,
                'isi'=>$request->isi,
            ]);
        }
        

        return redirect('pengumuman');
    }

    public function destroy($id){
        $tujuan = 'file/pengumuman/';
        $pengumuman = Pengumuman::findOrFail($id);
        File::delete($tujuan.$pengumuman->file);
        $pengumuman->delete();

        return redirect('pengumuman');
    }
}
