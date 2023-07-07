<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Hosptial;
use App\Models\Major;
use App\Models\User;
class FrontendController extends Controller
{
    public function home(){
        $hospitals = Hosptial::where('is_active','1')->get();
    $majors = Major::where('is_active', '1')->get();
    $doctors = Doctor::all();
    return view('frontend.home',compact('hospitals','majors', 'doctors'));
    }
    
    public function hospitals(){
        $hospitals =Hosptial::all();
        return view('frontend.hospitals.allhospitals',compact('hospitals'));
        }
    public function indexhospital($id){
    $hospital = Hosptial::where('is_active','1')->find($id);
    $hospitals=Hosptial::all();
    if($hospital){
    $majors =$hospital->majors;
    $doctors = $hospital->doctors;
    }else{
        $doctors=[];  
        $majors=[];      
    }  
    return view('frontend.hospitals.index',compact('hospital','majors', 'doctors','hospitals'));
    }
}
