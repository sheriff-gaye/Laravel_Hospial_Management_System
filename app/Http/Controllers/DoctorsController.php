<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctors;
use App\Models\Marketing;
use Illuminate\Http\Request;

class DoctorsController extends Controller
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
        $doctors=Doctors::all();
        return view('doctors.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('doctors.create');
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
            'name'=>'required', 'username'=>'required',
            'dob'=>'required', 'address'=>'required',
            'country'=>'required','phone'=>'required',
            'specialist'=>'required','department'=>'required',
            'biography'=>'required','image'=>'required|mimes:png,jpg,jpeg',
            'status'=>'required','gender'=>'required'
        ]);

        $image=$request->file('image');
        $name=time().'.'.$image->getClientOriginalExtension();
        $destinationPath=public_path('/images');
        $image->move($destinationPath,$name);

            Doctors::create([
                'name'=>$request->get('name'),
                'username'=>$request->get('username'),
                'dob'=>$request->get('dob'),
                'gender'=>$request->get('gender'),
                'address'=>$request->get('address'),
                'phone'=>$request->get('phone'),
                'country'=>$request->get('country'),
                'specialist'=>$request->get('specialist'),
                'department'=>$request->get('department'),
                'biography'=>$request->get('biography'),
                'image'=>$name,
                'status'=>$request->get('status')

            ]);

            return redirect()->route('doctors.index')->with('message','Doctor Created Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $doctor=Doctors::find($id);
        return view('doctors.show',compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor=Doctors::find($id);
        return view('doctors.edit',compact('doctor'));
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
            'name'=>'required', 'username'=>'required',
            'dob'=>'required', 'address'=>'required',
            'country'=>'required','phone'=>'required',
            'specialist'=>'required','department'=>'required',
            'biography'=>'required','image'=>'mimes:png,jpg,jpeg',
            'status'=>'required','gender'=>'required'
        ]);
        $doctor=Doctors::find($id);
        $doctor->update($request->all());

        if ($request->exists('image'))
        {
        $image=$request->file('image');
        $name=time().'.'.$image->getClientOriginalExtension();
        $destinationPath=public_path('/images');
        $image->move($destinationPath,$name);

        $doctor->image = $name;
        $doctor->save();
        }



        return redirect()->route('doctors.index')->with('message','Doctor Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor=Doctors::find($id);
        $doctor->delete();
        return redirect()->route('doctors.index')->with('message','Doctor Deleted Successfully');
    }
}
