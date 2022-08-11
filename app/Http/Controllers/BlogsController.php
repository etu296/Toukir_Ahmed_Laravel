<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function view()
    {
        $blogs = Blog::all();
        return view('admin.page.blog-list',compact('blogs'));
    }
    public function store(Request $request)
    {
        $image1 = [];
        if($request->hasFile('image1'))
        {
            foreach($request->file('image1') as $file)
            {
            $file = $request->file('image1');
            $filename =  $file->getClientOriginalName();
            $file -> storeAs ('/storage', $filename);
            $image1[] = $filename; 
            }
        }
       
     
       $request->validate([
        'image1'=>'required',
        
      ]);
    //  dd($request->all());
      Blog::create([
       'image1'=> $filename,
     
      ]);
      return redirect()->back()->with('msg' , 'Image added Successfully!');
    }

    public function delete(Request $request, $id)
    {
      Blog::find($id)->delete();
      return redirect()->back()->with('msg' , 'Image deleted Successfully!');
    }
}
