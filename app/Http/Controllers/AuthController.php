<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerStore(Request $request)
    {
        $user = new User();
        $user ->name = $request->name;
        $user ->email = $request->email;
        $user ->password = Hash::make($request->password);
        $user->save();
        return redirect()->url('login');
    }

    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $user = DB::table('users')->where('id', auth()->id())->first();

            if ($user->role == 3) {
                return redirect()->route('admin');
            } else {
                return redirect()->route('player');
            }
       
  
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

        public function dashboard()
        {
            return view('dashboard');
        }

    
}
