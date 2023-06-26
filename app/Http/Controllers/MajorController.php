<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     $data= Major::all();
        return view('admin.majors.index' ,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.majors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required|string|',
            'descrption'=>'nullable|string',
            'is_active'=>'in:on|string',
            'cover'=>'image|nullable|mimes:jpg,png'
        ]);
        
            $major =new Major();
            $major->name=$request->get('name');
            $major->descrption=$request->get('descrption');
            $major->is_active=$request ->has('is_active');
            if($request->has('cover')){
            $img=$request->file('cover');
                $imgname=time().$major->name.'.'.$img->getClientOriginalExtension();
                $request->file('cover')->storePubliclyAs('majors/',$imgname,['disk'=>'public']);
                $major->cover=$imgname ;
                    }
             $seved= $major->save();
            if($seved){
                session()->flash('massage','majors cerated scssesfuly');
               return redirect()->route('majors.index');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function show(Major $major)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $major=Major::find($id);
        return view('admin.majors.edit',compact('major'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required|string',
            'descrption'=>'required|string',
            'is_active'=>'in:on|string',
            'cover'=>'image|nullable|mimes:jpg,png'
        ]);
        $major= Major::find($id);
        $major->name=$request ->get('name');
        $major->descrption=$request ->get('descrption');
        $major->is_active=$request ->has('is_active');
        if($request->has('cover')){
        $img=$request->file('cover');
            $imgname=time().$major->name.'.'.$img->getClientOriginalExtension();
            $request->file('cover')->storePubliclyAs('majors/',$imgname,['disk'=>'public']);
            $major->cover=$imgname ;
                }
         $seved= $major->save();
        if($seved){
            session()->flash('massage','majors Updated  scssesfuly');
           return redirect()->route('majors.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Major::find($id);
          Storage::disk('public')->delete("majors/$item->cover");
        $deleted= $item->delete();
         if($deleted) {
            session()->flash('massage','majors deleted scssesfuly');
            return redirect()->back();
         }else{
            return 'error';
         }

    }
}
