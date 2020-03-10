<?php

namespace App\Http\Controllers\Car;

use App\Company;
use App\Summary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    //
    public function index(){
        $companies = Company::orderBy('created_at','asc')->get();
        $summaries  = Summary::select(['dvbaohiem','dkloaitru','ghchu'])->get();
//        dd($summary);
        return  view('frontend.pages.car',compact(['companies','summaries']));
    }
}
