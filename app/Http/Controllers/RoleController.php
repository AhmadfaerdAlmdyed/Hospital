<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role=Role::all();
       return view('admin.roles.index',compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.roles.cerate');
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
        $role=new Role();
        $role->name=$request->get('name');
        $role->guard_name=$request->get('guard_name');
       $saved= $role->save();
        if ($saved) {
            session()->flash('message', 'role created successfuly');
            return redirect()->route('roles.index');
        }


    }
//
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
        $role=Role::find($id);
        return view('admin.roles.edit',compact('role'));

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
        $role= Role::find($id);
        $role->name=$request->get('name');
        $role->guard_name=$request->get('guard_name');
       $saved= $role->save();
        if ($saved) {
            session()->flash('message', 'role update successfuly');
            return redirect()->route('roles.index');
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
        $role=Role::find($id);
        $deleted= $role->delete();
        if($deleted) {
           session()->flash('message','roles deleted scssesfuly');
           return redirect()->back();
        }else{
           return 'error';
        }
    }
}
