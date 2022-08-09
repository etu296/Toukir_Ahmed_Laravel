<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Http\Request;

class BackgroundImageController extends Controller
{
    public function view()
    {
        return view('admin.page.image');
    }
    public function store(Request $request)
    {
       if($request->hasFile('image'))
       {
        $image = $request->file('image');
        $filename = date('Ymdhms') . '.' . $image->getClientOriginalExtension();
        $image -> storeAs ('/storage', $filename);
       }
       $request->validate([
        'image'=>'required',
      ]);
    //  dd($request->all());
      Image::create([
       'image'=> $filename,
      ]);
      return redirect()->back()->with('msg' , 'Image added Successfully!');
    }

}
