<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Hosptial;
use App\Models\Major;
class FrontendController extends Controller
{
    public function home(){
        $hospitals = Hosptial::where('is_active','1')->get();
        $majors = Major::where('is_active', '1')->get();
        $doctors = Doctor::all();
        return view('frontend.home',compact('hospitals','majors', 'doctors'));
    }
}
