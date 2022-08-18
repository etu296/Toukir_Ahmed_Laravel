<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function view()
    {
      $abouts = About::all();
      return view('admin.page.about-list',compact('abouts'));
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
            'phone'=>'required|numeric|digits:11',
            'email'=>'required|email',
            'degree'=>'required',
            'description'=>'required',
            'age'=>'required|numeric',
          ]);
        //   dd($request->all());
        About::create([
            'phone'=>$request->phone,
            'degree'=>$request->degree,
            'email'=>$request->email,
            'age'=>$request->age,
            'description'=>$request->description,
            'image'=> $filename
        ]);

        return redirect()->back()->with('msg','Successfully created!');
    }

    public function edit($id)
    {
      $abouts=About::find($id);
     
     if($abouts)
     {
      return view('admin.page.edit-about',compact('abouts'));
     }
    }

    public function update(Request $request,$id)
    {
      
        $abouts=About::find($id);
        $aboutimage=$abouts->image;
      if ($request->hasFile('image'))
           {
            // step 2: generate file name
            $aboutimage = $request->file('image')->getClientOriginalName();
            //step 3 : store into project directory
            $request->file('image')->storeAs('/storage',$aboutimage);

              
           }
           if($abouts)
           {
        $abouts->update([
            'phone'=>$request->phone,
            'degree'=>$request->degree,
            'email'=>$request->email,
            'age'=>$request->age,
            'description'=>$request->description,
            'image'=> $aboutimage
          
        ]);
        return redirect()->back()->with('msg', ' Updated Successfully.');
      }
    }

    public function delete(Request $request, $id)
    {
     About::find($id)->delete();
     return redirect()->back()->with('msg','Deleted  successfully!');

    }
}
