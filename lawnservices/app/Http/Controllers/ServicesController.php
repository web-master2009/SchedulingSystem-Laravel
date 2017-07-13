<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;


class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(["test"=>"OK"]);
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
        //
        
        $this->validate($request,array(
            'service' => 'required|max:255',
        ));
        
        $services = new Services;
        $services->service = $request->service;
        $services->serviceCode = $request->serviceCode;
        $services->defaultGLAccount = $request->defaultGLAccount;
        $services->status = $request->status;
        $services->save();
        $services = Services::all();
        $resp['status']="success";
        $resp['services']= $services;
        return response()->json($resp);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $services = Services::all();
        return view('home/index')->with('services',$services);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
            $id = $request -> id;
            $services = Services::find($id);
            $services -> service = $request -> service;
            $services -> serviceCode = $request -> serviceCode;
            $services -> defaultGLAccount = $request -> defaultGLAccount;
            $services -> status = $request -> status;
            $services -> save();
            $resp['status']="success";
            $services = Services::all();
            $resp['services']= $services;
            return response()->json($resp);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req) {
        Services::find ( $req->id )->delete();
        $services = Services::all();
        $resp['status']="success";
        $resp['services']= $services;
        return response()->json($resp);
    }
}
