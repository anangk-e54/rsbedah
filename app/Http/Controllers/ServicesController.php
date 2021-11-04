<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('service/index', compact('services'));
    }

    public function view()
    {
        $services = Service::all();
        // return $services;
        return view('homepage/layanan', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service;
        $service->service_name = $request->service_name;
        $service->description = $request->description;
        $service->service_img = $request->service_img;

        if($request->hasFile('service_img')){
            $request->file('service_img')->move('assets/images/team/',$request->file('service_img')->getClientOriginalName());
            $service->service_img = $request->file('service_img')->getClientOriginalName();
            $service->save();
        }
        
        $service->save();

        return redirect()->route('servicelist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('homepage/layanan-lihat', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        // return $service;
        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $datas = [
            
            'service_name' => $service->service_name,
            'description' => $request->description,
            'service_img' => $service->service_img
           ];
           $datas2 = [
               
            'service_name' => $service->service_name,
            'description' => $request->description
              ];
   
           $service::where('id', $service->id)
              ->update(
              $request->hasFile('service_img')?  $datas : $datas2
           );
           if($request->hasFile('service_img')){
               $request->file('service_img')->move('assets/images/team/',$request->file('service_img')->getClientOriginalName());
               $service->service_img = $request->file('service_img')->getClientOriginalName();
               $service->save();
           }
        return redirect()->route('servicelist', [$service->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        Service::destroy($service->id);
        return redirect()->route('servicelist');
    }
}