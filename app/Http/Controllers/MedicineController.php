<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
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
        $medicines=Medicine::all();
        return view('Medicine.index',compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Medicine.create');
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
            'e_date'=>'required',
            'm_name'=>'required',
            'price'=>'required',
            'qty'=>'required',
            'description'=>'required',
            'status'=>'required'
        ]);


        Medicine::create($request->all());
        return redirect()->route('medicine.index')->with('message','Medicine Created Successfully');
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
        $medicine=Medicine::find($id);
        return view('Medicine.edit',compact('medicine'));
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
            'e_date'=>'required',
            'm_name'=>'required',
            'price'=>'required',
            'qty'=>'required',
            'description'=>'required',
            'status'=>'required' ]);

            $medicine=Medicine::find($id);
            $medicine->update($request->all());
            return redirect()->route('medicine.index')->with('message','Medicine Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicine=Medicine::find($id);
        $medicine->delete();
        return redirect()->route('medicine.index')->with('message','Medicine Deleted Successfully');
    }
}
