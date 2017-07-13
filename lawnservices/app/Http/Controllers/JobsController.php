<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;
use App\Clients;

class JobsController extends Controller
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
            $time = time();
            for($i=0;$i < $request->times;$i++){
                $jobs = new Jobs;
                $date = date("Y-m-d",$time);
                $jobs->jobDate = $date;
                $jobs->serviceId = $request->serviceId;
                $jobs->price = $request->price;
                $jobs->notes = $request->notes;
                $jobs->clientId = $clients->id;
                $jobs->invoiceNo = '';
                $jobs->status = '1';
                $jobs->employeeId = $request->employeeId;
                $jobs->save();
                $time += 3600*24*$request->frequency;
            }
            $resp['status']="success";
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
