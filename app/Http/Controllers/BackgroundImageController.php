<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Http\Request;

class BackgroundImageController extends Controller
{
    public function view()
    {
        return view('admin.page.backgrounimg_list');
    }
    public function store()
    {


    }

}
