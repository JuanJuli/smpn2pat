<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
use App\Pengumuman;
use App\Siswa;
use App\Album;
use App\Kelas;
use App\Foto;

class PostController extends Controller
{
    public function kegiatan($id){

    	$kegiatan_post = Kegiatan::where('id',$id)->get();

        $kegiatan = Kegiatan::where('id','!=',$id)->orderBy('created_at', 'DESC')->get();
        $pengumuman = Pengumuman::orderBy('created_at', 'DESC')->get();

    	return view('public/menu/kegiatan/post',compact('kegiatan','pengumuman','kegiatan_post'));
    }

    public function pengumuman($id){

        $kegiatan = Kegiatan::orderBy('created_at', 'DESC')->get();
        $pengumuman = Pengumuman::where('id','!=',$id)->orderBy('created_at', 'DESC')->get();

    	$pengumuman_post = Pengumuman::where('id',$id)->get();

    	return view('public/menu/pengumuman/post',compact('pengumuman','kegiatan','pengumuman_post'));
    }

    public function siswa(){
        $kelas = Kelas::get();
        $kegiatan = Kegiatan::orderBy('created_at', 'DESC')->get();
        $pengumuman = Pengumuman::orderBy('created_at', 'DESC')->get();

    	$siswa = Siswa::all();
    	return view('public/menu/siswa/siswa',compact('siswa','pengumuman','kegiatan','kelas'));
    }

    public function album($id){
        $album = Album::where('id',$id)->get();
        $foto  = Foto::where('id_a',$id)->get();

        return view('public/menu/galery/post',compact('album','foto'));
    }

    public function kelas(Request $request){
        $siswa = Siswa::where('id_k',$request->id)->get();
        $tr = '<!-- table -->';
        foreach ($siswa as $sw) {
            $tr .= '<tr>
                <td>'.$sw->nama.'</td>
                <td>'.$sw->nis.'</td>
                <td>'.$sw->kelas->nama.'</td>
                <td>'.$sw->jenis_kelamin.'</td>
            </tr>';
        }

        return $tr; 
    }

}
