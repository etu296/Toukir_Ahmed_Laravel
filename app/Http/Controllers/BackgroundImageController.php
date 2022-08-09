<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Http\Request;

class BackgroundImageController extends Controller
{
    public function view()
    {
      $images = Image::all();
        return view('admin.page.image',compact('images'));
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

    public function delete(Request $request, $id)
    {
      Image::find($id)->delete();
      return redirect()->back()->with('msg' , 'Image deleted Successfully!');
    }

}
