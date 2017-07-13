<?php

namespace App\Http\Controllers;
use App\Services;
use App\Clients;
use App\Jobs;
class HomeController extends Controller
{
    public function index()
    {
        $services = Services::all();
        $clients = Clients::all();
        $jobs = Jobs::all();
        foreach($jobs as $job){
            $service = Services::find($job->serviceId);
            $job['serviceCode']=$service->serviceCode;
            $job['defaultGLAccount']=$service->defaultGLAccount;
        }
        return view('home/index')->withServices($services)
        ->withClients($clients)
        ->withJobs($jobs);
    }

    public function minor()
    {
        return view('home/minor');
    }
}
