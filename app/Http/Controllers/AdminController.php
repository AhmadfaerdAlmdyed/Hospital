<?php

namespace App\Http\Controllers;

use App\Events\HellowEvent;
use App\Mail\WellcomeMAil;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use PHPUnit\TextUI\Help;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Admin::where('id' ,'!=' , auth()->id())->get();
        $roles = Role::all();
        return view('admin.admins.index',compact('data', 'roles'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.admins.create',compact('roles'));
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
            'role_id' => 'required|string|exists:roles,id',
            'name' => 'required|string|min:3|max:40',
            'email' => 'required|email|string|unique:admins,email',
            'password' => 'required|string|min:6|max:15'
        ]);
        $role = Role::where('id',$request->get('role_id'))->first();
        $admin = new Admin();
        $admin->name = $request->get('name');
        $admin->email = $request->get('email');
        $admin->password = Hash::make($request->get('password'));
        $saved = $admin->save();
        $admin->assignRole($role);
        if ($saved) {
            session()->flash('message', 'admin created successfuly');
            return redirect()->route('admins.index');
        }
        return redirect()->back();
    }
//
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('admin.admins.edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:40',
            'email' => 'required|email|string|unique:admins,email',
        ]);
        $admin->name = $request->get('name');
        $admin->email = $request->get('email');
        $saved = $admin->save();
        if ($saved) {
            session()->flash('message', 'admin updated successfuly');
            return redirect()->route('admins.index');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $deleted = $admin->delete();
        if ($deleted) {
            session()->flash('message', 'admin deleted successfuly');
            return redirect()->back();
        } else {
            return 'error';
        }
    }
}
