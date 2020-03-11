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
        $companies  = Company::orderBy('created_at','asc')->get();
        $summaries  = Summary::select('company_id','exception','note_more')->take(30)->get();
        return  view('frontend.pages.car',compact('companies','summaries'));
    }
    public function droppImage( Request $request)
    {
        $company_id = $request->get('id');
//        $notes  = Summary::select('note_more')->where('company_id', '=', $company_id)->get();
        $summaries  = Summary::select('company_id','exception','note_more')->where('company_id', '=', $company_id)->get();
//        $html   =  view('frontend.pages.car_notes')->with(['summaries'=>$summaries])->render();
        return response()->json([
            'success' => true,
            'summaries'    => $summaries
        ]);

    }
}
