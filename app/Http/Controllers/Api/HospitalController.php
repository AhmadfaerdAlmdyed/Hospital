<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Hosptial;
use Dotenv\Validator;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospitals=Hosptial::paginate(2);
        return response()->json([
            "message" => "all Hospitals",
            "data" => $hospitals
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        Validator($request->all(),[
            'name'=>'required',
            'is_active'=>'required',
            'location'=>'required'
        ]);
        $hospital =new Hosptial();
        $hospital->name = $request->get('name');
        $hospital->is_active = $request->get('is_active');
        $hospital->location = $request->get('location');
        $hospital->save();

   
        return response()->json([
            "message" => "hospital add successfully",
            "data" => $hospital
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hospital =Hosptial::findOrfail($id);
        return $hospital;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id 
      * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $hospital =Hosptial::findOrfail($id);
        $hospital->delete();
        return response()->json([
            "message" => "hospital deletet  successfully",
            "data" => $hospital
        ]);
    }
}
