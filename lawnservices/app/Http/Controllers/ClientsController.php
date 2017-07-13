<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'firstName' => 'required|max:255',
            'surname' => 'required|max:255',
        ));
        
        $clients = new Clients;
        $clients->firstName = $request->firstName;
        $clients->surname = $request->surname;
        $clients->displayName = $request->displayName;
        $clients->active = $request->active;
        $clients->streetNo = $request->streetNo;
        $clients->street = $request->street;
        $clients->suburb = $request->suburb;
        $clients->postCode = $request->postCode;
        $clients->phone1 = $request->phone1;
        $clients->phone2 = $request->phone2;
        $clients->email = $request->email;
        $clients->fax = $request->fax;
        $clients->save();
        $clients = Clients::all();
        $resp['status']="success";
        $resp['clients']= $clients;
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
        $id = $request->id;
        $clients = Clients::find($id);
        $clients->firstName = $request->firstName;
        $clients->surname = $request->surname;
        $clients->displayName = $request->displayName;
        $clients->active = $request->active;
        $clients->streetNo = $request->streetNo;
        $clients->street = $request->street;
        $clients->suburb = $request->suburb;
        $clients->postCode = $request->postCode;
        $clients->phone1 = $request->phone1;
        $clients->phone2 = $request->phone2;
        $clients->email = $request->email;
        $clients->fax = $request->fax;
        $clients->save();
        $clients = Clients::all();
        $resp['status']="success";
        $resp['clients']= $clients;
        return response()->json($resp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        Clients::find($req->id)->delete();
        $clients = Clients::all();
        $resp['status']="success";
        $resp['clients']= $clients;
        return response()->json($resp);
    }
}
