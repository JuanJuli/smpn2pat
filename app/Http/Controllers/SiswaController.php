<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;

class SiswaController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $siswa = Siswa::with('kelas')->get();
        $kelas = Kelas::orderBy('nama','ASC')->get();
        return view('menu/siswa/siswa',compact('siswa','kelas'));
    }

    public function ubah(Request $request){
        $siswa = Siswa::where('id_k',$request->id)->get();
        $tr = '<!-- table -->';
        foreach ($siswa as $sw) {
            $tr .= '<tr>
                <td>'.$sw->nama.'</td>
                <td>'.$sw->kelas->nama.'</td>
                <td>'.$sw->nis.'</td>
                <td>'.$sw->jenis_kelamin.'</td>
              <td>'.$sw->alamat.'</td>
                <td>
                    <a href="siswa/edit/'.$sw->id.'" class="btn btn-sm btn-primary">Edit</a>
                <a href="siswa/hapus/'.$sw->id.'" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>';
        }

        return $tr;
    }

    public function update(Request $request){
        $siswa = Siswa::findOrFail($request->id);
        $siswa->update([
            'nama'=>$request->nama,
            'nis'=>$request->nis,
            'id_k'=>$request->kelas,
            'alamat'=>$request->alamat,
            'jenis_kelamin'=>$request->jk
        ]);

        return redirect('siswa');

    }

    public function store(Request $request){

        Siswa::create([
            'nama'=>$request->nama,
            'nis'=>$request->nis,
            'id_k'=>$request->kelas,
            'alamat'=>$request->alamat,
            'jenis_kelamin'=>$request->jk
        ]);

        return redirect('siswa');
    }

    public function edit($id){
        $siswa = Siswa::with('kelas')->where('id',$id)->get();
        $kelas = Kelas::get();
        return view('menu/siswa/edit',compact('siswa','kelas'));
    }

    public function show(){
        $kelas = Kelas::orderBy('nama','ASC')->get();
        return view('menu/siswa/tambah',compact('kelas'));   
    }

    public function destroy($id){

        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('siswa');
        
    }
}
