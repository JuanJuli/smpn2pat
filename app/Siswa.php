<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
    	'nama',
    	'nis',
    	'id_k',
    	'alamat',
    	'kelas',
    	'jenis_kelamin'
    ];

    public function kelas(){
        return $this->belongsTo('App\Kelas','id_k');
    }
}
