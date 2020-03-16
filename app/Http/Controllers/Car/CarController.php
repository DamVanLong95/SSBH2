<?php

namespace App\Http\Controllers\Car;

use App\Company;
use App\Summary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function index(){
        $companies  = Company::orderBy('created_at','asc')->get();
        $terms_data = Summary::select('company_id','terms','note_more','id')
                    ->take(24)
                    ->get();//Du lieu dieu khoan bo sung
        $dedutible_data  = Summary::select('company_id','deductible','note_dkkt','id')
                        ->take(24)
                        ->get();//Du lieu  khau tru
        $exception_data =  Summary::select('company_id','exception','note_dklt','id')
                        ->take(30)
                        ->get();//Du lieu dieu khoan loai tru
        return  view('frontend.pages.car',compact([
                'companies','summaries','terms_data','dedutible_data','exception_data'
                 ]));
    }
    public function droppImage( Request $request)
    {
        $company_id = $request->get('id');
        $summaries  = Summary::select('company_id','terms','note_more')
                    ->where('company_id', '=', $company_id)
                    ->take(24)
                    ->get();
        $exception  = Summary::select('company_id','exception','note_dklt')
                     ->where('company_id', '=', $company_id)
                     ->get();
        $deductible = Summary::select('company_id','deductible','note_dkkt')   
                    ->where('company_id', '=', $company_id)
                    ->take(1)
                    ->get();
        return response()->json([
            'success' => true,
            'summaries'    => $summaries,
            'exception'    => $exception,
            'deductible'    => $deductible
        ]);
    }
    public function showInfo(Request $request)
    {
        $notes = $request->all();
        return response()->json([
            'success' => true,
            'note'    => $notes['note']
        ]);
    }
}
