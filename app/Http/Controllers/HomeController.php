<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Achivement;
use App\Models\Award;
use App\Models\Blog;
use App\Models\Show;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function view()
    {
        $achivments = Achivement::all();
        $shows = Show::all();
        $awards = Award::all();
        $blogs = Blog::all();
        $abouts = About::all();
        return view('website.fixed.main',compact('achivments','shows','awards','blogs','abouts'));
    }
}
