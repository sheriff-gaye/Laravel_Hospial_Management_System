<?php

namespace App\Http\Controllers;

use App\Models\Bed;
use Illuminate\Http\Request;

class BedControllclser extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beds=Bed::all();
        return view('bed.index',compact('beds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bed.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'room'=>'required','bed'=>'required',
            'price'=>'required','status'=>'required',
           'floor'=>'required','type'=>'required'

        ]);


        Bed::create($request->all());
        return redirect()->route('bed.index')->with('message','Bed Created Successfully');
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
        $bed=Bed::find($id);
        return view('bed.edit',compact('bed'));
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
        $this->validate($request,[
            'room'=>'required','bed'=>'required',
            'price'=>'required','status'=>'required',
           'floor'=>'required','type'=>'required'

        ]);

        $bed=Bed::find($id);
        $bed->update($request->all());


        return redirect()->route('bed.index')->with('message','Bed Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bed=Bed::find($id);
        $bed->delete();
        return redirect()->route('bed.index')->with('message','Bed Deleted Successfully');
    }
}
