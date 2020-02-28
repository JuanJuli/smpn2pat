<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'album';

    protected $fillable = [
    	'nama',
    	'keterangan'
    ];

    public function foto(){
    	return $this->hasmany('App\Foto');
    }
}
