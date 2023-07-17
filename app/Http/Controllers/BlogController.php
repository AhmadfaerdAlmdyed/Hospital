<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data=Blog::all();
        return view('admin.Blogs.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $majors=Major::all();
        return view('admin.Blogs.create',compact('majors'));
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
            'title'=>'required|string',
            'descrption'=>'required|string',
            'cover'=>'image|nullable|mimes:jpg,png'
        ]);
        
            $blogs =new Blog();
            $blogs->title=$request ->get('title');
            $blogs->descrption=$request ->get('descrption');
            if($request->has('cover')){
            $img=$request->file('cover');
                $imgname=time().$blogs->name.'.'.$img->getClientOriginalExtension();
                $request->file('cover')->storePubliclyAs('blogs/',$imgname,['disk'=>'public']);
                $blogs->cover=$imgname ;
                    }
             $blogs->major_id=$request->get('major');
             
             $seved= $blogs->save();
            if($seved){
                session()->flash('massage','Blogs cerated scssesfuly');
                return redirect()->route('blogs.index');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $majors=Major::all();
         $blogs=Blog::find($id);
        return view('admin.Blogs.edit',compact('blogs','majors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'title'=>'required|string',
            'descrption'=>'required|string',
            'cover'=>'image|nullable|mimes:jpg,png'
        ]);
        
            $blogs =Blog::find($id);
            $blogs->title=$request ->get('title');
            $blogs->descrption=$request ->get('descrption');
            if($request->has('cover')){
            $img=$request->file('cover');
                $imgname=time().$blogs->name.'.'.$img->getClientOriginalExtension();
                $request->file('cover')->storePubliclyAs('blogs/',$imgname,['disk'=>'public']);
                $blogs->cover=$imgname ;
             }
            $blogs->major_id=$request->get('major');
            $seved= $blogs->save();
           
            if($seved){
                session()->flash('massage','Blogs cerated scssesfuly');
                return redirect()->route('blogs.index');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    
        $item=Blog::find($id);
        Storage::disk('public')->delete("blogs/$item->cover");
        $deleted= $item->delete();
         if($deleted) {
            session()->flash('massage','blogs deleted scssesfuly');
            return redirect()->back();
         }else{
            return 'error';
         }
         
    }
}
