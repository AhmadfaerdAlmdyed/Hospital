<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UesrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=User::all();
        return view('admin.uesrs.index' ,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        $user=User::find($id);
        return view('admin.uesrs.edit',compact('user'));
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
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:10',
            'cover' => 'image|nullable|mimes:jpg,png'
        ]);
        
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->password = Hash::make($request->get('password'));
        $user->country = $request->get('country');
        if ($request->has('cover')) {
            $img = $request->file('cover');
            $imgname = time() . $user->name.'.'.$img->getClientOriginalExtension();
            $request->file('cover')->storePubliclyAs('users/', $imgname, ['disk' => 'public']);
            $user->cover = $imgname;
        }
        $saved = $user->save();
        if ($saved) {
            $user = auth()->user();
            return redirect()->route('uesrs.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *Storage
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=User::find($id);
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
