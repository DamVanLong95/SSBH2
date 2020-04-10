<?php

namespace App\Http\Controllers\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Model\Health;
use App\Model\Program;
use App\Location;
use App\Model\Hospital;
use App\Model\District;
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
                
                // dd($scope);
        $data['saving'] = $saving;
        $data['secure'] = $secure;
        $data['object_bh'] = $object_bh;
        $data['scope'] = $scope;
        $data['benifits'] = $benifits;
        $data['healths']  = $healths;
        return view('frontend.pages.health',compact('data'));

    }
    public function droppImage(Request $request)
    {
        $data = [];
        $product_id  = $request->get('id');
        // dd($product_id);/
        $programs = Program::select('id','name','product_id')
                ->where('product_id','=',$product_id)
                ->get();
        $indexCol = $request->get('indexCol');
        $html  = view('frontend.pages.health_ajax.health_program')
                ->with(['programs'=>$programs,'indexCol'=> $indexCol])
                ->render();
        $data['programs'] = $programs;
        $locations        = Location::all();

        $html_hospital = view('frontend.pages.hospital')
                        ->with(['locations'=>$locations,'indexCol'=> $indexCol])
                        ->render();
        $hospital = Hospital::where('product_id','=', $product_id)->get();
        $hospitalCount = count($hospital);
        $data['hospitalCount'] = $hospitalCount;

        // dd($html_hospital);
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
        $obj_bhs = Health::select('comparison','content','program_id')
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
        return response()->json([
            'obj_bhs' => $obj_bhs,
            'scope'    => $scope,
            'healths' => $healths
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
        $html_district = view('frontend.pages.health_ajax.district')->with(['districts'=> $districts])->render();
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
        // dd($hospitals);
        $html_hospital = view('frontend.pages.health_ajax.filter_province')
                        ->with(['hospitals'=>$hospitals])
                        ->render();
        return response()->json([
            'html_hospital' => $html_hospital,
        ]);
    }
   
}
