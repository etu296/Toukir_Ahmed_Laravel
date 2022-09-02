<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function view()
    {
        return view('admin.page.login');
    }
}
