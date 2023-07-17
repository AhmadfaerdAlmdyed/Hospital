<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages =Messages::all();
        return view('admin.Messages.index',compact('messages'));
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
        $request->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'phone'=>'required|min:9',
            'reason'=>'string',
            'messages'=>'string'
        ]); 
            $messages =new Messages();
            $messages->name=$request->get('name');
            $messages->email=$request->get('email');
            $messages->phone=$request->get('phone');
            $messages->reason=$request->get('reason');
            $messages->messages=$request->get('messages');
             $seved= $messages->save();
             if($seved){
                return redirect()->route('home');
                session()->flash('massage','تم ارسال سؤالك بنجاج');
            }
    }

    
    public function show(Messages $messages)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $messages=Messages::find($id);
        return view('admin.Messages.reply',compact('messages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'reply'=>'required',
        ]); 
        $messages=Messages::find($id);
        $messages->reply=$request->get('reply');
        $saved= $messages->save();
         if ($saved) {
             session()->flash('message', 'تم ارسال الرد');
             return redirect()->route('messages.index');
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Messages::find($id);
        $deleted= $item->delete();
         if($deleted) {
            session()->flash('massage','Messages deleted scssesfuly');
            return redirect()->back();
         }else{
            return 'error';
         }
    }
}
