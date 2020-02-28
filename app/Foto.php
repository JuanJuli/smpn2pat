<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
	protected $table = 'foto_album';

    protected $fillable = [
    	'nama',
    	'id_a'
    ];

    public function album(){
    	return $this->belongsTo('App\Album','id_a');
    }
}
