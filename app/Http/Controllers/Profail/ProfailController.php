<?php

namespace App\Http\Controllers\Profail;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ProfailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $user = auth()->user();
        $blogs=Blog::all();
        return view('frontend.uesrs.layouts',compact('user','blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $user = auth()->user();
        $blogs=Blog::all();
        return view('frontend.uesrs.index',compact('user','blogs'));
    }
  
    public function PersonalData()
    { 
        $user = auth()->user();
        return view('frontend.uesrs.edit',compact('user'));
    }
  

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    

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
        $input = $request->input();
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:10',
            'country' => 'required|string',
        ]);
        $user = User::find($id);
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->phone = $input['phone'];
        if($input['password']){
        $user->password = Hash::make($input['password']);
        }
        $user->country = $input['country'];
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $imgname = time() . $user->name.'.'.$img->getClientOriginalExtension();
            $request->file('cover')->storePubliclyAs('users/', $imgname, ['disk' => 'public']);
            $user->cover = $imgname;
        }
        $saved = $user->save();
        if ($saved) {
            $user = auth()->user();
            return redirect()->route('profail.index');
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
        //
    }
}
