<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctor/index', compact('doctors'));
    }

    public function view()
    {
        $doctors = Doctor::all();
        return view('homepage/tim-dokter', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->input();

        // Doctor::create($request->all());
        // return view('doctor/create');   

        $doctor = new Doctor;
        $doctor->doctorname = $request->doctorname;
        $doctor->doctornik = $request->doctornik;
        $doctor->doctorphone = $request->doctorphone;
        $doctor->doctoremail = $request->doctoremail;
        $doctor->doctorspecialist = $request->doctorspecialist;
        $doctor->doctorphoto = $request->doctorphoto;

        if($request->hasFile('doctorphoto')){
            $request->file('doctorphoto')->move('assets/images/team/',$request->file('doctorphoto')->getClientOriginalName());
            $doctor->doctorphoto = $request->file('doctorphoto')->getClientOriginalName();
            $doctor->save();
        }
        
        $doctor->save();

        return redirect()->route('doctorlist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        return view('doctor.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        // return $doctor;
        // Doctor::where('id', $doctor->id)
        // ->update([
        //     'doctorname' => $doctor->doctorname,
        //     'doctornik' => $request->doctornik,
        //     'doctorphone' => $request->doctorphone,
        //     'doctoremail' => $request->doctoremail,
        //     'doctorspecialist' => $request->doctorspecialist,
        //     'doctorphoto' => $doctor->doctorphoto

        // ]);

        $datas = [
            
            'doctorname' => $doctor->doctorname,
            'doctornik' => $request->doctornik,
            'doctorphone' => $request->doctorphone,
            'doctoremail' => $request->doctoremail,
            'doctorspecialist' => $request->doctorspecialist,
            'doctorphoto' => $doctor->doctorphoto
           ];
           $datas2 = [
               
            'doctorname' => $doctor->doctorname,
            'doctornik' => $request->doctornik,
            'doctorphone' => $request->doctorphone,
            'doctoremail' => $request->doctoremail,
            'doctorspecialist' => $request->doctorspecialist
              ];
   
           $doctor::where('id', $doctor->id)
              ->update(
              $request->hasFile('doctorphoto')?  $datas : $datas2
           );
           if($request->hasFile('doctorphoto')){
               $request->file('doctorphoto')->move('assets/images/team/',$request->file('doctorphoto')->getClientOriginalName());
               $doctor->doctorphoto = $request->file('doctorphoto')->getClientOriginalName();
               $doctor->save();
           }
        return redirect()->route('doctorshow', [$doctor->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        Doctor::destroy($doctor->id);
        return redirect()->route('doctorlist');
    }
}