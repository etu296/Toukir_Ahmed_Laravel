<?php

namespace App\Http\Controllers;

use App\Models\Achivement;
use Illuminate\Http\Request;

class AchivementController extends Controller
{
    public function view()
    {
      $achivments = Achivement::all();
      return view('admin.page.achivement-list',compact('achivments'));
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
            'name'=>'required',
            'category'=>'required',
            'position'=>'required',
            'year'=>'required|numeric',
          ]);
        //   dd($request->all());
        Achivement::create([
            'name'=>$request->name,
            'category'=>$request->category,
            'position'=>$request->position,
            'year'=>$request->year,
            'image'=> $filename
        ]);

        return redirect()->back()->with('msg','Successfully created!');
    }

    public function edit($id)
    {
      $achivements=Achivement::find($id);
     
     if($achivements)
     {
      return view('admin.page.edit-achivement',compact('achivements'));
     }
    }

    public function update(Request $request,$id)
    {
      
      $achivements=Achivement::find($id);
      $achivementimage=$achivements->image;
      if ($request->hasFile('image'))
           {
            // step 2: generate file name
            $achivementimage = $request->file('image')->getClientOriginalName();
            //step 3 : store into project directory
            $request->file('image')->storeAs('/storage',$achivementimage);

              
           }
           if($achivements)
           {
        $achivements->update([
            'name'=>$request->name,
            'category'=>$request->category,
            'position'=>$request->position,
            'year'=>$request->year,
            'image'=> $achivementimage
          
        ]);
        return redirect()->back()->with('msg', ' Updated Successfully.');
      }
    }

    public function delete(Request $request, $id)
    {
     Achivement::find($id)->delete();
     return redirect()->back()->with('msg','Deleted  successfully!');

    }
}
