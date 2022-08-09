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

        return redirect()->back()->with('msg','Successfully send your message!');
    }

    public function delete(Request $request, $id)
    {
     Achivement::find($id)->delete();
     return redirect()->back()->with('msg','Deleted  successfully!');

    }
}
