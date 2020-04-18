<?php

namespace App\Http\Controllers\longevity;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Model\Longevity;
use App\Model\ProductLongevity;
use App\Model\FilterBanner;
use App\Company;
use Illuminate\Support\Collection;
class LongevityController extends Controller
{
    //
    public function index()
    {

        $products = Longevity::all();
        $saving = ProductLongevity::where('classify_id','=',1)->get();
        $secure = ProductLongevity::where('classify_id','=',3)->get();
        $scope_secure = Longevity::select('product_id','comparison')
                    ->take(4)
                    ->get();//pham vi bao ve
        $benifits = Longevity::select('product_id','comparison')
                    ->take(23)
                    ->get();//quyen loi san pham
                    // dd($benifits);
        $benifits_more =  Longevity::select('product_id','comparison')
                            ->take(28)
                            ->get();//quyen loi san pham
        $companies          = Company::all();
        $data['companies']  = $companies;
        $data['saving']     = $saving;
        $data['secure']     = $secure;
        $data['products']   = $products;
        $data['scope_secure']    = $scope_secure;
        $data['benifits_more']   = $benifits_more;
        $data['benifits'] = $benifits;
        return view('frontend.pages.longevity',compact('data','products'));
    }
    public function droppImage(Request $request){
        $product_id = $request->get('id');
        $product_name = ProductLongevity::where('id','=',$product_id)->first();
        $longevities = Longevity::select('product_id','comparison','content')
                    ->where('product_id','=',$product_id)
                    ->get();
     
        $benifits = Longevity::select('product_id','comparison','content')
                    ->where('product_id','=',$product_id)
                    ->get();
        return response()->json([
             'success'      => true,
             'longevities' =>$longevities,
             'product_name'    => $product_name
        ]);
    }
    public function filterBanner(Request $request)
    {
        $params = $request->get('params');
        $param_companies = $request->get('param_companies');
        $references = [
            1=> 'invest',
            2=> 'edu',
            3=> 'retire',
            4=> 'concern',
            5=> 'age_to_eightten',
            6=> 'eightten_to_sixtyfive',
            7=> 'over_sixtyfive',
            8=> 'bh_die',
            9=> 'bh_poor',
            10=> 'benifit_free',
            11=> 'benifit_medical'
        ];
        $fields = [];

        if(!empty($params)){
            for($i=0; $i < sizeof($params); $i++){
                $fields [] = $references[$params[$i]];
            }
            $products_id = FilterBanner::select('id','company_id','product_longevity_id')->where(function ($query) use($fields){
                // dd($fields);
                foreach($fields as $field){
                    $query->orwhere($field,'=','x');
                }
            })->get(); 
          
            $products = ProductLongevity::select('id','name','url','classify_id')->where(function($query) use ($products_id){
                foreach($products_id as $product_id){
                    $query->orwhere('id','=',$product_id['product_longevity_id']);
                }
            })->get();
        }else{
            $products = new Collection();
        }
        if(!empty($param_companies)){
           
            $product_filter_companies = ProductLongevity::select('id','name','url','classify_id')
                        ->where(function($query) use ($param_companies){
                            foreach($param_companies as $id){
                                $query->orwhere('company_id','=',$id);
                            }
                        })->get();
        }else{
            $product_filter_companies = new Collection();
        }
        //  dd($product_filter_companies);
        $products = $products->merge($product_filter_companies);

        $products = $products->unique(function ($item)
        {
            return $item['name'] ;
        });
        
        $product_saving=[];
        $product_secure =[];
        $product_invest =[];
        $product_edu =[];
        $product_retire =[];
        $product_concern =[];
        foreach($products as $value){
            if($value['classify_id'] == 1)
                array_push($product_saving,$value);
            if($value['classify_id'] == 2)
                array_push($product_invest,$value);
            if($value['classify_id'] == 3)
                array_push($product_secure,$value);
             if($value['classify_id'] == 4)
                array_push($product_edu,$value);
             if($value['classify_id'] == 5)
                array_push($product_retire,$value);
             if($value['classify_id'] == 6)
                array_push($product_concern,$value);
        }
        // dd($product_secure);
        $html_saving = view('frontend.pages.health_ajax.saving_longevity')
                    ->with(['product_saving'=> $product_saving])
                    ->render();

        $html_secure = view('frontend.pages.health_ajax.secure_longevity')
                    ->with(['product_secure'=> $product_secure])
                    ->render();
        $html_invest = view('frontend.pages.health_ajax.secure_longevity')
                    ->with(['product_invest'=> $product_invest])
                    ->render();
        $html_retire = view('frontend.pages.health_ajax.secure_longevity')
                    ->with(['product_retire'=> $product_retire])
                    ->render();
        $html_edu = view('frontend.pages.health_ajax.secure_longevity')
                    ->with(['product_edu'=> $product_edu])
                    ->render();
        $html_concern = view('frontend.pages.health_ajax.secure_longevity')
                    ->with(['product_concern'=> $product_concern])
                    ->render();
                    
        return response()->json([
            'html_saving' => $html_saving,
            'html_secure' => $html_secure,
            'html_invest' => $html_invest,
            'html_retire' => $html_retire,
            'html_edu' => $html_edu,
            'html_concern' => $html_concern,
            'product_saving'=>$product_saving,
            'product_secure'=>$product_secure,
            'product_invest'=>$product_invest,
            'product_retire'=>$product_retire,
            'product_concern'=>$product_concern,
            'product_edu'=>$product_edu,
        ]);

    }



}
