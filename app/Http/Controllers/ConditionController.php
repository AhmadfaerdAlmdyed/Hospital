<?php
  //الاقسام
namespace App\Http\Controllers;

use App\Models\Condition;
use Illuminate\Http\Request;

class ConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data= Condition::all();
        return view('admin.conditions.index' ,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.conditions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->input();
        $request->validate([
            'title' => 'required|string',
            'descrption' => 'required',
        ]);
        $conditions = new Condition();
        $conditions->title = $input['title'];
        $conditions->descrption = $input['descrption'];
        $saved = $conditions->save();
        if($saved){
            session()->flash('massage','conditions cerated scssesfuly');
            return redirect()->route('conditions.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function show(Condition $condition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conditions=Condition::find($id);
        return view('admin.conditions.edit',compact('conditions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $input = $request->input();
        $request->validate([
            'title' => 'required|string',
            'descrption' => 'required',
        ]);
        $conditions =  Condition::find($id);
        $conditions->title = $input['title'];
        $conditions->descrption = $input['descrption'];
        $saved = $conditions->save();
        if($saved){
            session()->flash('massage','conditions updateed scssesfuly');
            return redirect()->route('conditions.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Condition::find($id);
        $deleted= $item->delete();
        if($deleted) {
            session()->flash('massage','Condition deleted scssesfuly');
            return redirect()->back();
         }else{
            return 'error';
         }
    }
}
