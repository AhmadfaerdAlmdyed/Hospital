<?php

namespace App\Http\Controllers;

use App\Models\Hosptial;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Return_;

class HosptialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Hosptial::all();
        return view('admin.hospitals.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $majors=Major::all();
        return view('admin.hospitals.create',compact('majors'));
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
            'name'=>'required|string',
            'location'=>'required|string',
            'info'=>'nullable|string',
            'is_active'=>'in:on|string',
            'cover'=>'image|nullable|mimes:jpg,png'
        ]);
            $hosptial =new Hosptial();
            $hosptial->name=$request ->get('name');
            $hosptial->location=$request ->get('location');
            $hosptial->info=$request ->get('info');
            if($request->has('cover')){
            $img=$request->file('cover');
                $imgname=time().$hosptial->name.'.'.$img->getClientOriginalExtension();
                $request->file('cover')->storePubliclyAs('hospitals/',$imgname,['disk'=>'public']);
                $hosptial->cover=$imgname ;
                    }
            $hosptial->is_active=$request ->has('is_active');
            $seved= $hosptial->save();
             $hosptial->majors()->attach($request->get('majors'));
            if($seved){
                session()->flash('massage','hospitls cerated scssesfuly');
                return redirect()->route('hosptials.index');
            }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hosptial  $hosptial
     * @return \Illuminate\Http\Response
     */
    public function show(Hosptial $hosptial)
    {
        return $hosptial;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hosptial  $hosptial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hosptial=Hosptial::find($id);
        return view('admin.hospitals.edit',compact('hosptial'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hosptial  $hosptial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required|string',
            'location'=>'required|string',
            'info'=>'nullable|string',
            'is_active'=>'in:on|string',
            'cover'=>'image|nullable|mimes:jpg,png'
        ]);
        $hosptial= Hosptial::find($id);
        $hosptial->name=$request ->get('name');
        $hosptial->location=$request ->get('location');
        $hosptial->info=$request ->get('info');
        if($request->has('cover')){
        $img=$request->file('cover');
            $imgname=time().$hosptial->name.'.'.$img->getClientOriginalExtension();
            $request->file('cover')->storePubliclyAs('hospitals/',$imgname,['disk'=>'public']);
            $hosptial->cover=$imgname ;
                }
        $hosptial->is_active=$request ->has('is_active');
         $seved= $hosptial->save();
        if($seved){
            session()->flash('massage','hospitls Updated  scssesfuly');
           return redirect()->route('hosptials.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hosptial  $hosptial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $item=Hosptial::find($id);
        Storage::disk('public')->delete("hospitals/$item->cover");
        $deleted= $item->delete();
         if($deleted) {
            session()->flash('massage','hospitls deleted scssesfuly');
            return redirect()->back();
         }else{
            return 'error';
         }

    }
}
