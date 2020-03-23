<?php

namespace App\Http\Controllers\Car;
use App\Summation;
use App\Company;
use App\Summary;
use App\Permission;
use App\Punishment;
use App\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function index(){
        $companies  = Company::orderBy('created_at','asc')->get();
        $terms_data = Summary::select('company_id','terms','note_more','id','rate_fee')
                    ->take(24)
                    ->get();//Du lieu dieu khoan bo sung
                    // dd($terms_data);
        $dedutible_data  = Summary::select('company_id','deductible','note_dkkt','id')
                        ->take(24)
                        ->get();//Du lieu  khau tru
        $exception_data =  Summary::select('company_id','exception','note_dklt','id','rate_fee_dklt')
                        ->take(30)
                        ->get();//Du lieu dieu khoan loai tru
        $punishment = Punishment::select('company_id','sanction','content')
                    ->take(19)
                    ->get();
        $brands      = Brand::select('id','name','status')
                    ->where('status','=',1)
                    ->get();
        // dd($brand);
                       
        return  view('frontend.pages.car',compact([
                'companies','terms_data','dedutible_data','exception_data','punishment','brands'
                 ]));
    }
    public function droppImage( Request $request)
    {
        $company_id = $request->get('id');
        $summaries  = Summary::select('company_id','terms','note_more','promotion')
                    ->where('company_id', '=', $company_id)
                    ->take(24)
                    ->get();
        $exception  = Summary::select('company_id','exception','note_dklt','rate_star_dklt')
                     ->where('company_id', '=', $company_id)
                     ->get();
        $deductible = Summary::select('company_id','deductible','note_dkkt')   
                    ->where('company_id', '=', $company_id)
                    ->take(1)
                    ->get();
        $permissions = Permission::select('company_id','rules_owner','note_rule')
                    ->where('company_id' ,'=', $company_id)
                    ->get();
        $punishment = Punishment::select('company_id','sanction','content')
                    ->where('company_id' ,'=', $company_id)
                    ->get();
        $promotion  = $summaries->first();//KHUYEN MAI
        $terms = Summary::select('company_id','terms','note_more','id','rate_star_dkbs','rate_fee')
                    ->where('company_id', '=', $company_id)
                    ->take(24)
                    ->get();//DIEU KHOAN BO SUNG
                    // dd($terms);
        return response()->json([
            'success' => true,
            'summaries'    => $summaries,
            'exception'    => $exception,
            'deductible'    => $deductible,
            'permissions'   => $permissions,
            'punishment'    => $punishment,
            'promotion'     => $promotion,
            'terms'         => $terms,
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
    public function onChange(Request $request){
        $brand_id = $request->get('brand_id');
        $brand_cate = Summation::select('brand_id','cate_car','id')
                    ->where('brand_id','=',$brand_id)
                    ->get();
        if(! $brand_cate) {
            return response()->json( array('success' => false, 'html'=>'No job ') );
        }
        $html = view('frontend.pages.car_notes')->with('brand_cate', $brand_cate)->render();
        return response()->json([
            'success' =>true,
            'html' => $html
        ]);

    }
    public function reference(Request $request){
        $brand_id = $request->get('brand_id');
        $year_sx  = $request->get('year_sx');
        $summation_id = $request->get('cate_id');
        $objec_price = [ 
            2010 =>"price_ten",
            2011 =>"price_eleven",
            2012 =>"price_twelve",
            2013  => "price_thirt", 
            2014=>"price_four",
            2015=>"price_five", 
            2016 => "price_six", 
            2017=>"price_seven",
            2018=>"price_eight",
            2019=>"price_night"
        ];
        $field = $objec_price[$year_sx];
        $summation= Summation::select($field)
                ->where('brand_id','=',$brand_id)
                ->where('id','=',$summation_id)
                ->take(1)
                ->get();
            
        if(! $summation) {
            return response()->json( array('success' => false, 'html'=>'No job ') );
        }
        $price_car = $summation[0][$field];
        return response()->json([
            'success' =>true,
            'price_car' => $price_car
        ]);

    }
}