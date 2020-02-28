<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $fillable = [
    	'id',
    	'nama'
    ];

    public function siswa(){
    	return $this->hasmany('App\Siswa');
    }
}
