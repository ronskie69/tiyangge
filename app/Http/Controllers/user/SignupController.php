<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\SignupModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(Request $request){

        $this->validate($request, [
            'username' => 'required|max:255',
            'password' => 'required|max:255',
            'alias'    => 'required|max:255'
        ]);

        SignupModel::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'alias' => $request->alias,
        ]);

       if(!auth()->attempt([
            'username' => $request->username,
            'password' => $request->password,
            'alias' => $request->alias,
        ], $request->remember)) {
            return back()->with('status', 'Invalid or empty input!');  
        }

        return redirect('login');
    }
}
