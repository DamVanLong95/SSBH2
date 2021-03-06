<?php

namespace App\Http\Controllers\longevity;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Model\Longevity;
use App\Model\ProductLongevity;
use App\Model\FilterBanner;
use App\Company;
use App\Model\GroupProduct;
use App\Model\Benifit, App\Model\SickGroup;
use App\Model\SickLongevity;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use App\Model\ClassifyLongevity,App\Model\TypeLongevity;
class LongevityController extends Controller
{
    //
    public function index()
    {
        $products = Longevity::all();
        $classifies = ClassifyLongevity::all();
        $scope_secure = Longevity::select('product_id','comparison')
                    ->take(4)
                    ->get();//pham vi bao ve
        $benifits = Longevity::select('product_id','comparison')
                    ->take(23)
                    ->get();//quyen loi san pham
                    // dd($benifits);
        $benifits_more =  Longevity::select('product_id','comparison','id')
                            ->take(28)
                            ->get();// quyen loi bo sung
        $benifits_group = GroupProduct::select('name','parent_id','id')
                    ->where('parent_id','=',null)
                    ->get();
                    // dd($benifits_group);
        $group_sicks = SickGroup::all();
        
        $companies          = Company::where('classify',4)->orderBy('name')->get();
        $data['companies']  = $companies;
        $data['products']   = $products;
        $data['scope_secure']    = $scope_secure;
        $data['benifits_more']   = $benifits_more;
        $data['benifits_group']  = $benifits_group;
        $data['benifits']        = $benifits;
        $data['group_sicks']     = $group_sicks ;
        return view('frontend.pages.longevity',compact('data','products','classifies'));
    }
    public function checkImg(Request $request){
        $product_id = $request->get('id');
        $indexCol   = $request->get('indexCol');
        $tbl_data     = $this->displayData($product_id, $indexCol);
        return response()->json($tbl_data);
    }
    public function droppImage(Request $request){
        $product_id = $request->get('id');
        $indexCol = $request->get('indexCol');
        $data     = $this->displayData($product_id, $indexCol);
        return response()->json($data);
    }
    public function filterBanner(Request $request)
    {
        $params = $request->get('params');
      
        $param_companies = $request->get('param_companies');
        $params_fillter =  collect($params)->filter(function($value, $index){
            return $value > 6;
        })->values()->toArray();
        $params =  collect($params)->filter(function($value, $index){
            return $value <=6 ;
        });
        $params = $params->toArray();

        $products =[];
        $references = [
            7=> 'age_to_eightten',
            8=> 'eightten_to_sixtyfive',
            9=> 'over_sixtyfive',
            10=> 'bh_die',
            11=> 'bh_poor',
            12=> 'benifit_free',
            13=> 'benifit_medical'
        ];
        $product_second = new Collection();
        if(sizeof($params_fillter) > 0){
            for($i=0; $i < sizeof($params_fillter); $i++){
                $fields [] = $references[$params_fillter[$i]];
            }
           
            $products_id = FilterBanner::where(function ($query) use($fields){
              
                for($i=0; $i< sizeof($fields) ;$i++){
                   
                    $query->where($fields[$i],'=',1);
                   
                }
            })->get(); 
            $ids = [];
            foreach($products_id as $v){
                array_push($ids, $v['product_longevity_id']);
            } 
            if(sizeof ($products_id) > 0 ){
                $product_second = ProductLongevity::whereIn('id',$ids)->get();
            }
            // dd($product_second);
        }else{
            $product_second = new Collection();
        }
       
        if(!collect($param_companies)->isEmpty()){
           
            $product_filter_companies = ProductLongevity::whereIn('company_id',$param_companies)->get();
        }
        // dd($product_filter_companies);
        $product_saving =[];
        $product_secure =[];
        $product_invest =[];
        $product_edu =[];
        $product_retire =[];
        $product_concern =[];
        $products = ProductLongevity::all()->sortBy('name');
        if(sizeof($product_second) > 0 ){
            $products = $product_second->intersect($products);
            if(isset($product_filter_companies)){
                $products = $product_filter_companies->intersect($products);
            }
        } else{
           
            if(isset($product_filter_companies)){
                $products_companies = $product_filter_companies->intersect($products);
                $products = $products_companies;
            }
            
        }
        
        foreach($products as $key=>$value){
            
            foreach($value->type as $val){
              
                if(sizeof($params) > 0){
                    if($val->type == 1 && in_array($val->type,$params))  array_push($product_saving,$value);
                    if($val->type == 2 && in_array($val->type,$params))  array_push($product_invest,$value);
                    if($val->type == 3 && in_array($val->type,$params))  array_push($product_secure,$value);
                    if($val->type == 4 && in_array($val->type,$params))  array_push($product_edu,$value);;
                    if($val->type == 5 && in_array($val->type,$params))  array_push($product_retire,$value);
                    if($val->type == 6 && in_array($val->type,$params))  array_push($product_concern,$value);
                }else if(sizeof($params) == 0){
                    // dd($val);
                    if($val->type == 1 )  array_push($product_saving,$value);
                    if($val->type == 2 )  array_push($product_invest,$value);
                    if($val->type == 3 )  array_push($product_secure,$value);
                    if($val->type == 4 )  array_push($product_edu,$value);;
                    if($val->type == 5 )  array_push($product_retire,$value);
                    if($val->type == 6 )  array_push($product_concern,$value);
                }
                   
            }
        }
        // dd($product_saving);
        $html_saving = view('frontend.pages.health_ajax.secure_longevity')
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
    public function displayPopup(Request $request){
        $data = $request->all();
        // dd($data);
        $product_longevity_id   = $data['product_longevity_id'];//id san pham nhan tho
        $product_group_id       = $data['product_group_id'];//nhom san pham bo tro
        // dd($product_group_id);
        $group_parent = GroupProduct::where('id',$product_group_id)->first();

        $group_child = Benifit::select('id','group_child')
                    ->where('product_group_id','=',$product_group_id)
                    ->get();
        $group_child = $group_child->unique('group_child');
        // dd($group_child);
        $spbt = Benifit::select('id','product_longevity_id','product_group_id','product_more_name','product_longevity_name','content')
                    ->whereIn('product_longevity_id',$product_longevity_id) 
                    ->where('product_group_id',  $product_group_id )
                    ->get();
        $product_name = $spbt->unique('product_longevity_name');
        // $spbt_more = $spbt->unique('product_more_name');
     
       
        $spbt_more = $spbt->unique(function($item){
            return $item['product_longevity_id'].$item['product_more_name'];
        });
        // dd($spbt_more);
        foreach($product_name as $key=>$val){
            
            $filtered = $spbt_more->filter(function ($value, $key) use($val) {
                return $value['product_longevity_id'] ==  $val['product_longevity_id'];
            });
            $val['product_more'] =   $filtered;
        }
       
        // dd($product_name);
        $product_longevity = ProductLongevity::whereIn('id',$product_longevity_id)->get();

        $result = array(
            'product_name'  => $product_name,
            'group_child'   => $group_child,
            'group_parent'  => $group_parent,
            'spbt_more'          => $spbt_more,
            'product_longevity' => $product_longevity
        );
        // foreach($result['product_name'] as $value){
        //     dd($value->product_longevity_name);
        // }
        $html = view('frontend.pages.health_ajax.popup')
                    ->with(['result' => $result,'product_longevity_id' => json_encode($product_longevity_id)])
                    ->render();
        return response()->json([
            'success' => true,
            'html' => $html
        ]);
    }
    public function showProduct(Request $request){

        $product_name = $request->get('product_name');
        $product_id   = $request->get('product_id');
        $title        = $request->get('title');

        $benifits  = Benifit::where('product_more_name','=', $product_name)
                    ->where('product_longevity_id',$product_id)
                    ->get();

        $benifits = $benifits->filter(function($value, $key) use ($title){
            return strcmp($value['product_longevity_name'],$title)== 0;
        })->values();
        return response()->json([
            'status' => 'success',
            'benifits' => $benifits
        ]);
    }
    static function displayData($product_id, $indexCol){
        $product_name = ProductLongevity::where('id','=',$product_id)->first();
        $longevities = Longevity::select('product_id','comparison','content')
                    ->where('product_id','=',$product_id)
                    ->get();
     
        $benifits = Longevity::select('product_id','comparison','content')
                    ->where('product_id','=',$product_id)
                    ->get();
      
            
        return [
             'success'      => true,
             'indexCol'     => $indexCol,
             'longevities'  => $longevities,
             'product_name' => $product_name,
            
        ];
    }
    public function showData(Request $request){
        $product_longevity_id   = $request->get('product_id');
        $group_sick_id          = $request->get('group_sick_id'); 
        
        $company_longevity = ProductLongevity::whereIn('id',$product_longevity_id)->get();
        $result = [];
        foreach($company_longevity as $value){
            array_push($result, $value->company->id);
        }
        $result = array_unique($result);
        
        $data = SickLongevity::where('group_sick_id',$group_sick_id)
                ->whereIn('company_id', $result)
                ->get();
        $header = $data->unique(function ($item)
        {
            return $item['insurance'] ;
        });
        $html = view('frontend.pages.popup_sick')->with(['data'=> $data, 'header' => $header])->render();
        return response()->json([
            'success' => true,
            'html' => $html
        ]);
    }
    // acction for list sick
    public function sickShow(Request $request){
        // dd($request->all());
        $group_sick_id          = $request->get('group_sick');
        $product_longevity_id   = $request->get('product_longevity');

        $product_longevity    = ProductLongevity::find($product_longevity_id);
        $name                 = $product_longevity->company->name;
        $company_id           = $product_longevity->company->id;

    //    dd($product_longevity_id);
        $data_show = SickLongevity::where('company_id',$company_id)
                        ->where('group_sick_id',$group_sick_id)        
                        ->get();
        $header = $data_show->unique(function ($item)
        {
            return $item['insurance'] ;
        });
        $html = view('frontend.pages.popup_sick')->with(['data_show'=> $data_show, 'header' => $header])->render();
       return response()->json($html);

    }



}
