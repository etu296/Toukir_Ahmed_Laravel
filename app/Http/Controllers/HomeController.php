<?php

namespace App\Http\Controllers;

use App\Models\Achivement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function view()
    {
        $achivments = Achivement::all();
        return view('website.fixed.main',compact('achivments'));
    }
}
