<?php

namespace App\Http\Controllers\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product,App\Company;
use App\Model\Health;
use App\Model\Program;
use App\Location;
use App\Model\Hospital;
use App\Model\District;
use App\Model\Exclusion;
use App\Model\FilterProgram, App\Model\FilterCost,App\Model\FilterScope;
use Illuminate\Support\Collection;
class HealthController extends Controller
{
    
    public function index()
    {

        $products  = Product::orderBy('created_at','desc')->get();
        $saving    = Product::where('cate','=',1)->get();
        $secure    = Product::where('cate','=',2)->get();
        $object_bh = Health::select('comparison')->take(1)->get();

        $scope = Health::select('comparison')->where('id','=',2)->first();
        $benifits = Health::select('comparison')->take(73)->get();
        $healths  = Health::select('comparison')->get();
        $exclusions = Exclusion::select('rules')->take(66)->get();

        $companies = Company::all();


        $data['companies']  = $companies;
        $data['saving']     = $saving;
        $data['secure']     = $secure;
        $data['object_bh']  = $object_bh;
        $data['scope']      = $scope;
        $data['benifits']   = $benifits;
        $data['healths']    = $healths;
        $data['exclusions'] = $exclusions;
        return view('frontend.pages.health',compact('data'));

    }
    public function droppImage(Request $request)
    {
        $data = [];

        $product_id = $request->get('id');

        $programs   = Program::select('id','name','product_id')
                
                    ->where('product_id','=',$product_id)
                
                    ->get();

        $indexCol   = $request->get('indexCol');

        $html       = view('frontend.pages.health_ajax.health_program')

                        ->with(['programs'=>$programs,'indexCol'=> $indexCol])
               
                        ->render();

        $data['programs']   = $programs;

        $locations          = Location::all();

        $html_hospital      = view('frontend.pages.hospital')

                                ->with(['locations'=>$locations,'indexCol'=> $indexCol])

                                ->render();

        $hospital = Hospital::where('product_id','=', $product_id)->get();

        $hospitalCount = count($hospital);

        $data['hospitalCount'] = $hospitalCount;
      
     
        return response()->json([
            'success' =>true,
            'data' => $data,
            'indexCol'=> $indexCol,
            'html' =>$html,
            'html_hospital' => $html_hospital
        ]);
        

    }
    public function selectProgram(Request $request)
    {
        $product_id = $request->get('product_id');
        $program_id = $request->get('program_id');

        $obj_bhs    = Health::select('comparison','content','program_id')
                    ->where('product_id','=',$product_id)
                    ->where('program_id','=',$program_id)
                    ->first();

        $scope = Health::select('comparison','content','program_id')
                    ->where('product_id','=',$product_id)
                    ->where('program_id','=',$program_id)
                    ->take(2)
                    ->get();

        $healths = Health::select('comparison','content','program_id')
                    ->where('product_id','=',$product_id)
                    ->where('program_id','=',$program_id)
                    ->get();
        $exclusions = Exclusion::where('product_id','=',$product_id)->get();

        return response()->json([
            'obj_bhs' => $obj_bhs,
            'scope'    => $scope,
            'healths' => $healths,
            'exclusions'=> $exclusions
        ]);

    }
    public function filterProvince(Request $request)
    {
        $location_id = $request->get('location_id');

        $product_id  = $request->get('product_id');

        $districts   = District::where('location_id','=',$location_id)->get();

        $hospitals = Hospital::where('location_id' ,'=', $location_id)
                    ->where('product_id','=',$product_id)
                    ->get();

        $html_hospital = view('frontend.pages.health_ajax.filter_province')
                        ->with(['hospitals'=>$hospitals])
                        ->render();

        $html_district = view('frontend.pages.health_ajax.district')
                        ->with(['districts'=> $districts])
                        ->render();

        return response()->json([
            'html_hospital' => $html_hospital,
            'html_district' => $html_district
        ]);
    }
    public function filterDistrict(Request $request)
    {
        $district_id = $request->get('district_id');

        $product_id  = $request->get('product_id');

        $hospitals = Hospital::where('district_id' ,'=',$district_id )
                    ->where('product_id','=',$product_id)
                    ->get();

        $html_hospital = view('frontend.pages.health_ajax.filter_province')
                        ->with(['hospitals'=>$hospitals])
                        ->render();

        return response()->json([
            'html_hospital' => $html_hospital,
        ]);
    }
    public function filterHealth(Request $request){
        $programs   = $request->get('program');
        $costs      = $request->get('cost');
        $scopes     = $request->get('scope');
        $companies_id  = $request->get('companies');
        // dd($programs);
       
        $obj_program = [
            1 => 'program_one',
            2 => 'program_two',
            3 => 'program_three',
            4 => 'program_four',
            5 => 'program_five',
            6 => 'program_six',
        ];
        $obj_cost = [
            1 => 'cost_one',
            2 => 'cost_two',
            3 => 'cost_three',
            4 => 'cost_four',
            5 => 'cost_five',
            6 => 'cost_six',
            7 => 'cost_seven',
            8 => 'cost_eight',
            9 => 'cost_night',
        ];
        $obj_scope = [
            1 => 'scope_vn',
            2 => 'scope_dna',
            3 => 'scope_asia',
            4 => 'scope_world'

        ];
        if(!empty($companies_id)){
            
            foreach($companies_id as $value){
                $array_4[] = Company::find($value)->products;
            }
            $items = new Collection();

            foreach($array_4 as $collection)
            {
                foreach($collection as $item)
                {
                    $items->push($item);
                }
            }
        }else{
            $items = new Collection();
        }
        // dd($array_4);
        if(!empty($scopes)){
            $fields = [];
            for($i =0; $i< sizeof($scopes); $i++){
               $fields [] = $obj_scope[$scopes[$i]];
            }  
            $products_id = FilterScope::select('product_id')
                            ->where(function ($query) use ($fields){
                                foreach($fields as $key=>$value)
                                {
                                    $query->orWhere($value,'x');
                                }
                        
                            })->get();
            $array_3 = Product::select('company_id','name','url','cate','id')
                    ->where(function ($query) use ($products_id){
                                foreach($products_id as $value){
                                    $id = $value['product_id'];
                                    $query->orwhere('id','=',$id);
                                }
                                })->get();
        }else{
            $array_3 = new Collection();
        }
        //filter program
        if(!empty($programs)){
            $fields = [];
            for($i =0; $i< sizeof($programs); $i++){
               $fields [] = $obj_program[$programs[$i]];
            }  
            $products_id = FilterProgram::select('product_id')
                            ->where(function ($query) use ($fields){
                                foreach($fields as $key=>$value)
                                {
                                    $query->orWhere($value,'x');
                                }
                        
                            })->get();
         
            $array_1 = Product::select('company_id','name','url','cate','id')
                        ->where(function ($query) use ($products_id){
                        foreach($products_id as $value){
                            $id = $value['product_id'];
                            $query->orwhere('id','=',$id);
                        }
                        })->get();
        }else{
            $array_1 = new Collection();
        }
      
        //filter cost
        if(!empty($costs)){
            $cols = [];
      
            for($i =0; $i< sizeof($costs); $i++){
            
                $cols [] = $obj_cost[$costs[$i]];
            }  
        // dd($cols);
            $products_id = FilterCost::select('product_id')
                    ->where(function ($query) use ($cols){
                    foreach($cols as $key=>$value)
                    {
                        $query->orWhere($value,'x');
                    }
        
                    })->get();
            $array_2 = Product::select('url','id','name','cate')
                    ->where(function ($query) use ($products_id){
                    foreach($products_id as $value){
                        $id = $value['product_id'];
                        $query->orwhere('id','=',$id);
                    }
                     })->get();
        }else{
            $array_2 = new Collection();
        }
        $products = $items  ->merge($array_1)
                            ->merge($array_2)
                            ->merge($array_3);

        // $products = $products->unique(function ($item)
        // {
        //     return $item['name'] ;
        // });
        // dd($products);
        $product_saving=[];
        $product_secure =[];
        foreach($products as $value){
            if($value['cate'] == 1){
                array_push($product_saving,$value);
            }
            if($value['cate'] == 2){
                array_push($product_secure,$value);
            }
        }
        // dd($product_secure);
        $html_saving = view('frontend.pages.health_ajax.banner_health')
                        ->with(['product_saving'=> $product_saving])
                        ->render();
        
        $html_secure = view('frontend.pages.health_ajax.secure_health')
                        ->with(['product_secure'=> $product_secure])
                        ->render();
       
        return response()->json([
            'html_saving' => $html_saving,
            'html_secure' => $html_secure,
        ]);
    }
   
   
}
