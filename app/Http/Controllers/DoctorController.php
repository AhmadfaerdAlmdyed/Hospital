<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Hosptial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Return_;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Doctor::all();
        return view('admin.doctors.index' ,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hospitals=Hosptial::all();
      return view('admin.doctors.create', compact('hospitals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, )
    {
        $request->validate([
            'name'=>'required|string',
            'hospital_id' =>'required',
            'email'=>'required|email',
            'phone'=>'required|min:9',
            'descrption'=>'nullable|string',
            'cover'=>'image|nullable|mimes:jpg,png'
        ]); 
          
            $doctor =new Doctor();
            $doctor->name=$request->get('name');
            $doctor->email=$request->get('email');
            $doctor->hosptial_id = $request->get('hospital_id');
            $doctor->phone=$request->get('phone');
            $doctor->descrption=$request->get('descrption');
            if($request->has('cover')){
            $img=$request->file('cover');
                $imgname=time().$doctor->name.'.'.$img->getClientOriginalExtension();
                $request->file('cover')->storePubliclyAs('doctors/',$imgname,['disk'=>'public']);
                $doctor->cover=$imgname ;
                    }
             $seved= $doctor->save();
             if($seved){
                session()->flash('massage','doctor cerated scssesfuly');
               return redirect()->route('doctors.index');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)

    {
        $hospitals = Hosptial::all();
        return view('admin.doctors.edit',compact('doctor','hospitals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        
        $request->validate([
            'name'=>'required|string|',
            'hospital_id' => 'required',
            'email'=>'required|email',
            'phone'=>'required|max:==9',
            'descrption'=>'nullable|string',
            'cover'=>'image|nullable|mimes:jpg,png'
        ]);
       
            $doctor->name=$request->get('name');
            $doctor->hosptial_id = $request->get('hospital_id');
            $doctor->email=$request->get('email');
            $doctor->phone=$request->get('phone');
            $doctor->descrption=$request->get('descrption');
            if($request->has('cover')){
            $img=$request->file('cover');
                $imgname=time().$doctor->name.'.'.$img->getClientOriginalExtension();
                $request->file('cover')->storePubliclyAs('doctors/',$imgname,['disk'=>'public']);
                $doctor->cover=$imgname ;
                    }
             $seved= $doctor->save();
            if($seved){
                session()->flash('massage','doctor cerated scssesfuly');
               return redirect()->route('doctors.index');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Doctor::find($id);
        Storage::disk('public')->delete("doctors/$item->cover");
      $deleted= $item->delete();
       if($deleted) {
          session()->flash('massage','Doctor deleted scssesfuly');
          return redirect()->back();
       }else{
          return 'error';
       }
    }
}
