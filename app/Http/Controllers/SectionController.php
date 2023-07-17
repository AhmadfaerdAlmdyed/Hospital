<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Sections;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data=Sections::all();
        return view('admin.sections.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogs=Blog::all();
      return view('admin.sections.create', compact('blogs'));
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
            'blog'=>'required|string',
            'title' =>'required',
            'points'=>'required|string',
            'descrption'=>'nullable|string',
        ]); 
        $sections =new Sections();
        $sections->blogs_id=$request->get('blog');
        $sections->title=$request->get('title');
        $sections->points= $request->get('points');
        $sections->descrption=$request->get('descrption');
         $seved= $sections->save();
         if($seved){
            session()->flash('massage','sections cerated scssesfuly');
           return redirect()->route('sections.index');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sections=Sections::find($id);
        $blogs=Blog::all();
        return view('admin.sections.edit',compact('blogs','sections'));
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
        $request->validate([
            'blog'=>'required|string',
            'title' =>'required',
            'points'=>'required|string',
            'descrption'=>'nullable|string',
        ]); 
        $sections =Sections::find($id);
        $sections->blogs_id=$request->get('blog');
        $sections->title=$request->get('title');
        $sections->points= $request->get('points');
        $sections->descrption=$request->get('descrption');
         $seved= $sections->save();
         if($seved){
            session()->flash('massage','sections Updated scssesfuly');
           return redirect()->route('sections.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sections=Sections::find($id);
        $deleted= $sections->delete();
        if($deleted) {
           session()->flash('message','sections deleted scssesfuly');
           return redirect()->back();
        }else{
           return 'error';
        }
    }
}
