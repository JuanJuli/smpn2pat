<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    protected $table = 'identitas';

    protected $fillable = [
    	'nama',
    	'alamat',
    	'email',
    	'logo',
    	'gambar1',
    	'gambar2',
    	'gambar3'
    ];
}
