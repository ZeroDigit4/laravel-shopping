<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function signin(){
    	return view('ban-banh.login');
    }

    public function signup(){
    	return view('ban-banh.signup');
    }

    public function postsignup(Request $request){
        $user = new User;
        $user->full_name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();

        return redirect('/signin');
    }
}
