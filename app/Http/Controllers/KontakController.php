<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function show(){
    	return view('public/menu/kontak/kontak');
    }
}
