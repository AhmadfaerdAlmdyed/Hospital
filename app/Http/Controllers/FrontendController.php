<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Sections;
use App\Models\Condition;
use App\Models\Consulting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Hosptial;
use App\Models\Major;
use App\Models\User;
use App\Models\Message;
use App\Models\Messages;
use Illuminate\Support\Facades\Blade;

class FrontendController extends Controller
{
    public function home(){
    $hospitals = Hosptial::where('is_active','1')->get();
    $majors = Major::where('is_active', '1')->get();
    $doctors = Doctor::all();
    $blogs = Blog::all();
    $messages=Messages::all();
    $uesr=User::all();
    return view('frontend.home',compact('hospitals','majors', 'doctors','blogs','messages','uesr'));
    }
    
    public function hospitals(){
        $hospitals =Hosptial::all();
        return view('frontend.hospitals.allhospitals',compact('hospitals'));
    }
    public function majors(){
        $majors =Major::all();
        return view('frontend.majors.allmajors',compact('majors'));
    }
    public function doctors(){
        $doctors =Doctor::all();
        return view('frontend.doctors.alldoctors',compact('doctors'));
    }
    public function blogs(){
        $majors=Major::all();
        return view('frontend.Blogs.blogs',compact('majors'));
    }
    public function conditions(){
        $conditions =Condition::all();
        return view('frontend.conditions.index',compact('conditions'));
    }
    public function indexhospital($id){
        $hospital = Hosptial::where('is_active','1')->find($id);
        $hospitals=Hosptial::all();
        if($hospital){
        $majors =$hospital->majors;
        $doctors =$hospital->doctors;
        }else{
            $doctors=[];  
            $majors=[];      
        }  
        return view('frontend.hospitals.index',compact('hospital','majors', 'doctors','hospitals'));
    }
    public function indexmessages()
    {
        return view('frontend.Messages.index');
    }
    public function indexblogs($id){
        $sections=Sections::where('blogs_id', $id)->get();
        $blogs = Blog::find($id);
        $allblogs=Blog::all();
        return view('frontend.Blogs.index',compact('blogs','allblogs','sections'));
    }
    
   public function consulting(Request $request, $id){
    $input = $request->input();
    $request->validate([
        'name' => 'required|string',
        'email'=>'required|email',
        'phone'=>'required|min:10',
        'major_id'=>'required',
        'illness'=>'string|required',
        'descrption' => 'required',  
    ]);
    if($request->get('is_active')){
    $consulting= new Consulting();
    $consulting->name = $input['name']; 
    $consulting->email = $input['email'];
    $consulting->phone = $input['phone'];
    $consulting->major_id = $input['major_id'];
    $consulting->hosptial_id =$id;
    $consulting->illness = $input['illness'];
    $consulting->descrption = $input['descrption'];
    $seved= $consulting->save();
    if($seved){
        session()->flash('massage','تم ارسال طلبك');
        return redirect()->back();
    }   
    }else{
        session()->flash('massage','عليك الموافقة علي الشروط');
    return redirect()->back();
    }
   }
    
   
}
