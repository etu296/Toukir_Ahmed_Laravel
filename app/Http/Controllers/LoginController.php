<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function view()
    {
        return view('admin.page.login');
    }

    public function store(Request $request)
 
        {
        $userinfo=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        // dd((Auth::attempt($userinfo)));
        if(Auth::attempt($userinfo))
                {
                    return redirect()->route('dashboard');
                }
                else
                return redirect()->route('login')->withErrors('Invalid user Please Login with valid id.');
            
        }
        public function Logout()
        {
            Auth::logout();
            return redirect()->route('login');
        }
        }

