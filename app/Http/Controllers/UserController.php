<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function show()
    {
        $user = User::all();
        return view('menu/user/user',compact('user'));
    }

    public function edit($id){
    	$user = User::where('id',$id)->get();
    	return view('menu/user/edit',compact('user'));
    }

    public function update(Request $request){
    	$user = User::findOrFail($request->id);
    	if (isset($request->password)) {
    		$user->update([
                'name'=>$request->nama,
                'email'=>$request->email,
                'password' => Hash::make($request->password),
            ]);
    	}else{
    		$user->update([
                'name'=>$request->nama,
                'email'=>$request->email
            ]);	
    	}
        return redirect(route('user'));  
    }
}
