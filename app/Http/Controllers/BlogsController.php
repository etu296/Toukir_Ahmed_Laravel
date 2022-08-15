<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Blog;
use App\Models\Show;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function view()
    {
        $blogs = Blog::all();
        return view('admin.page.blog-list',compact('blogs'));
    }
    public function viewShow()
    {
        $shows = Show::all();
        return view('admin.page.show-list',compact('shows'));
    }
    public function viewAwards()
    {
        $awards = Award::all();
        return view('admin.page.awards-list',compact('awards'));
    }
    public function store(Request $request)
    {
        if($request->hasFile('image1'))
        {
            $file = $request->file('image1');
            $filename =  $file->getClientOriginalName();
            $file -> storeAs ('/storage', $filename);
            $image1 = $filename; 
            }
       $request->validate([
        'image1'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        
      ]);
    //  dd($request->all());
        Blog::create([
       'image1'=> $filename,
     
      ]);
      return redirect()->back()->with('msg' , 'Image added Successfully!');
    }

    public function storeShows(Request $request)
    {
      if($request->hasFile('filenames'))
      {
        
          $file = $request->file('filenames');
          $filename =  $file->getClientOriginalName();
          $file -> storeAs ('/storage', $filename);
          $filenames = $filename; 
          }
     $request->validate([
      'filenames'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      
    ]);
  //  dd($request->all());
     Show::create([
     'filenames'=> $filename,
   
    ]);
    return redirect()->back()->with('msg' , 'Image added Successfully!');
    }

    public function storeAwards(Request $request)
    {
      if($request->hasFile('awards'))
      {
        
          $file = $request->file('awards');
          $filename =  $file->getClientOriginalName();
          $file -> storeAs ('/storage', $filename);
          $awards = $filename; 
          }
     $request->validate([
      'awards'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      
    ]);
  //  dd($request->all());
      Award::create([
     'awards'=> $filename,
   
    ]);
    return redirect()->back()->with('msg' , 'Image added Successfully!');
    }


    public function delete(Request $request, $id)
    {
      Blog::find($id)->delete();
      return redirect()->back()->with('msg' , 'Image deleted Successfully!');
    }
    public function deleteShow(Request $request, $id)
    {
      Show::find($id)->delete();
      return redirect()->back()->with('msg' , 'Image deleted Successfully!');
    }
    public function deleteAwards(Request $request, $id)
    {
      Award::find($id)->delete();
      return redirect()->back()->with('msg' , 'Image deleted Successfully!');
    }
}
