<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permission=Permission::all();
        return view('admin.Permissions.index',compact('permission'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Permissions.cerate');
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
            'name' => 'required|string|min:3|max:40',
            'guard_name' => 'required|string|in:admin,web',
        ]);
        $permission=new Permission();
        $permission->name=$request->get('name');
        $permission->guard_name=$request->get('guard_name');
       $saved= $permission->save();
        if ($saved) {
            session()->flash('message', 'permission created successfuly');
            return redirect()->route('permissions.index');
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
        $permission=Permission::find($id);
        return view('admin.permissions.edit',compact('permission'));
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
            'name' => 'required|string|min:3|max:40',
            'guard_name' => 'required|string|in:admin,web',
        ]);
        $permission= Permission::find($id);
        $permission->name=$request->get('name');
        $permission->guard_name=$request->get('guard_name');
       $saved= $permission->save();
        if ($saved) {
            session()->flash('message', 'permission update successfuly');
            return redirect()->route('permissions.index');
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
        $permission=Permission::find($id);
        $deleted= $permission->delete();
        if($deleted) {
           session()->flash('message','permission deleted scssesfuly');
           return redirect()->back();
        }else{
           return 'error';
        }
    }
}
