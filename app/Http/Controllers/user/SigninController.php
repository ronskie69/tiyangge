<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if(!auth()->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)) {
            return back()->with('status','Invalid credentials!');
        }

        return redirect('home');
    }
}
