<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use Illuminate\Http\Request;

class PharmacyController extends Controller
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
        $pharmacies=Pharmacy::all();
        return view('pharmacy.index',compact('pharmacies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pharmacy.create');
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
            'name'=>'required',
            'address'=>'required',
            'officer_id'=>'required',
            'pharmacy_name'=>'required',
            'phone_id'=>'required',
            'status'=>'required'

        ]);
        Pharmacy::create([
            'name'=>$request->get('name'),
            'address'=>$request->get('address'),
            'officer_id'=>$request->get('officer_id'),
            'pharmacy_name'=>$request->get('pharmacy_name'),
            'phone_id'=>$request->get('phone_id'),
            'status'=>$request->get('status')
        ]);
        return redirect()->route('pharmacy.index')->with('message','Pharmacy Created Successfully');

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
        $pharmacy=Pharmacy::find($id);
        return view('pharmacy.edit',compact('pharmacy'));
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
            'name'=>'required',
            'address'=>'required',
            'officer_id'=>'required',
            'pharmacy_name'=>'required',
            'phone_id'=>'required',
            'status'=>'required'

        ]);

        $pharmacy=Pharmacy::find($id);
        $pharmacy->update($request->all());
        return redirect()->route('pharmacy.index')->with('message','Pharmacy Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pharmacy=Pharmacy::find($id);
        $pharmacy->delete();
        return redirect()->route('pharmacy.index')->with('message','Pharmacy Deleted Successfully');
    }
}
