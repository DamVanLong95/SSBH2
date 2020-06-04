<?php

namespace App\Http\Controllers\Car;
use App\Summation;
use App\Company;
use App\Summary;
use App\Permission;
use App\Punishment;
use App\Brand;
use App\Finance,App\Activity,App\Detail,App\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\General;


class CarController extends Controller
{
   
    public function checkImage(Request $request){
        $data = [];
        $company_id = $request->get('id');

        $img = Company::where('id',$company_id)->first();

        return response()->json([
            'status' => 'success',
            'img'    => $img,
        ]);



    }
    public function index(){
        $companies  = Company::orderBy('created_at','asc')->get();
        $terms_data = Summary::select('company_id','terms','note_more','id','rate_fee')
                    ->take(24)
                    ->get();//Du lieu dieu khoan bo sung
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
        $permission  = Permission::select('company_id','note_rule','rules_owner')
                    ->take(24)
                    ->get();
        $finances   = Finance::select('company_id','finance','money')
                    ->take(17)
                    ->get();
        $companies_cheap = Company::where('classify','=', 1)->get();
        $companies_recoup= Company::where('classify','=',2)->get();
        
        $data = array();
        $data['companies_cheap'] = $companies_cheap;
        $data['companies_recoup'] = $companies_recoup; 

       
        return  view('frontend.pages.car',compact([
               'data', 'companies','terms_data','dedutible_data','exception_data','punishment','brands','permission','finances'
                 ]));
    }
    public function droppImage( Request $request)
    {
        $company_id = $request->get('id');
        $indexCol   = $request->get('indexCol');
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
        $permissions = Permission::select('company_id','rules_owner','note_rule','rate_star_nv')
                    ->where('company_id' ,'=', $company_id)
                    ->get();
        $punishment = Punishment::select('company_id','sanction','content','rate_star_ct')
                    ->where('company_id' ,'=', $company_id)
                    ->get();
        $promotion  = $summaries->first();//KHUYEN MAI
        $terms = Summary::select('company_id','terms','note_more','id','rate_star_dkbs','rate_fee')
                    ->where('company_id', '=', $company_id)
                    ->take(24)
                    ->get();//DIEU KHOAN BO SUNG
        $finances   = Finance::select('company_id','finance','money')
                    ->where('company_id', '=', $company_id)
                    ->get();
        $activities = Activity::select('company_id','location_id','amount')
                    ->where('company_id', '=', $company_id)
                    ->where('amount','<>','')
                    ->get();
        $detail     = Detail::select('company_id','location_id','content')
                     ->where('company_id', '=', $company_id)
                     ->get();
        $rating_and_model = General::where('company_id','=',$company_id)->first();
        $locations = Location::all();
        $data = array();      
        $total=0;
        foreach($activities as $value){
             $total=$total + $value['amount'];
        }
       $data['activities'] = $activities;
       $data['total']      = $total; 
       $data['detail']     = $detail;
       $data['locations']   =$locations;
       $data['rating_and_model']  = $rating_and_model;
       $html = view('frontend/pages/network')->with(['locations'=> $locations ,'detail' => $detail])->render();
        return response()->json([
            'success' => true,
            'indexCol' => $indexCol,
            'summaries'    => $summaries,
            'exception'    => $exception,
            'deductible'    => $deductible,
            'permissions'   => $permissions,
            'punishment'    => $punishment,
            'promotion'     => $promotion,
            'terms'         => $terms,
            'finances'      =>$finances ,
            'data'    => $data,
            'html'    =>$html
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
    public function address(Request $request){
        $location_id = $request->get('location_id');
        $company_id = $request->get('company_id');
        $detail     = Detail::select('company_id','location_id','content','address','phone')
                    ->where('company_id', '=', $company_id)
                    ->where('location_id', '=', $location_id)
                    ->get();
        $data['detail'] = $detail;
        $activity  = Activity::select('company_id','location_id','amount')
                    ->where('company_id', '=', $company_id)
                    ->where('location_id', '=', $location_id)
                    ->get();
        $data['activity'] = $activity;
        $location  = Location::select('name')->where('id', '=', $location_id)->get();
        $data['location'] = $location;
        $html = view('frontend.pages.car_address')->with('data', $data)->render();
        return response()->json([
            'success' =>true,
            'html' => $html
        ]);
    }
    public function filterCompanies(Request $request)
    {
        $checkId = $request->get('checkedID');
        $logos = [];
        foreach($checkId as $key =>$checked){
            $logos[$key] = Company::select('id','logo')->where('id','=',$checked)->get();
        }
        $html = view('frontend.pages.car_banner')->with('logos', $logos)->render();
        return response()->json([
            'success' =>true,
            'html' => $html
        ]);
    }
    public static function trimtext($data, $limit) {
        $arr = explode(" ", $data);
        $new_arr = array_slice($arr, 0, $limit);
        return implode(" ", $new_arr);
    }
}