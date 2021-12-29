<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients=Patient::all();
        return view('Patience.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Patience.create');
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
            'date'=>'required', 'patient'=>'required',
            'name'=>'required', 'gender'=>'required',
            'dob'=>'required','occupation'=>'required',
            'relative'=>'required','rname'=>'required',
            'phone'=>'required','home-phone'=>'required',
            'blood'=>'required','religion'=>'required',
            'address'=>'required','doctor'=>'required',
            'bed'=>'required','image'=>'required|mimes:png,jpg,jpeg',
            'symptoms'=>'required','username'=>'required'
        ]);

        $image=$request->file('image');
        $name=time().'.'.$image->getClientOriginalExtension();
        $destinationPath=public_path('/images');
        $image->move($destinationPath,$name);

            Patient::create([
                'date'=>$request->get('date'),'patient'=>$request->get('patient'),
                'name'=>$request->get('name'),'gender'=>$request->get('gender'),
                'dob'=>$request->get('dob'),'occupation'=>$request->get('occupation'),
                'relative'=>$request->get('relative'),'rname'=>$request->get('rname'),
                'phone'=>$request->get('phone'),'home-phone'=>$request->get('home-phone'),
                'blood'=>$request->get('blood'),'religion'=>$request->get('religion'),
                'address'=>$request->get('address'),'doctor'=>$request->get('doctor'),
                 'bed'=>$request->get('bed'),'image'=>$name,'symptoms'=>$request->get('symptoms'),
                 'username'=>$request->get('username')

            ]);

            return redirect()->route('patient.index')->with('message','Patient Created Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient=Patient::find($id);
        return view('Patience.show',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient=Patient::find($id);
        return view('Patience.edit',compact('patient'));
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
            'date'=>'required', 'patient'=>'required',
            'name'=>'required', 'gender'=>'required',
            'dob'=>'required','occupation'=>'required',
            'relative'=>'required','rname'=>'required',
            'phone'=>'required','home-phone'=>'required',
            'blood'=>'required','religion'=>'required',
            'address'=>'required','doctor'=>'required',
            'bed'=>'required','image'=>'mimes:png,jpg,jpeg',
            'symptoms'=>'required','username'=>'required'
        ]);

        $patient=Patient::find($id);
        $patient->update($request->all());

        if ($request->exists('image'))
        {

        $image=$request->file('image');
        $name=time().'.'.$image->getClientOriginalExtension();
        $destinationPath=public_path('/images');
        $image->move($destinationPath,$name);

        $patient->image = $name;
        $patient->save();
        }


        return redirect()->route('patient.index')->with('message','Patient Updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient=Patient::find($id);
        $patient->delete();

        return redirect()->route('patient.index')->with('message','Patient Deleted Sucessfully');
    }
}
