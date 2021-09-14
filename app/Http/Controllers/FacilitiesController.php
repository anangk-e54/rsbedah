<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;

class FacilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities = Facility::all();
        return view('facility/index', compact('facilities'));
    }

    public function view()
    {
        $facilities = Facility::all();
        return view('homepage/fasilitas', compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facility/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $facility = new Facility;
        $facility->facility_name = $request->facility_name;
        $facility->description = $request->description;
        $facility->facility_img = $request->facility_img;

        if($request->hasFile('facility_img')){
            $request->file('facility_img')->move('assets/images/team/',$request->file('facility_img')->getClientOriginalName());
            $facility->facility_img = $request->file('facility_img')->getClientOriginalName();
            $facility->save();
        }
        
        $facility->save();

        return redirect()->route('facilitylist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function show(Facility $facility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function edit(Facility $facility)
    {
        // return $facility;
        return view('facility.edit', compact('facility'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facility $facility)
    {
        $datas = [
            
            'facility_name' => $facility->facility_name,
            'description' => $request->description,
            'facility_img' => $facility->facility_img
           ];
           $datas2 = [
               
            'facility_name' => $facility->facility_name,
            'description' => $request->description
              ];
   
           $facility::where('id', $facility->id)
              ->update(
              $request->hasFile('facility_img')?  $datas : $datas2
           );
           if($request->hasFile('facility_img')){
               $request->file('facility_img')->move('assets/images/team/',$request->file('facility_img')->getClientOriginalName());
               $facility->facility_img = $request->file('facility_img')->getClientOriginalName();
               $facility->save();
           }
        return redirect()->route('facilitylist', [$facility->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facility $facility)
    {
        Facility::destroy($facility->id);
        return redirect()->route('facilitylist');
    }
}