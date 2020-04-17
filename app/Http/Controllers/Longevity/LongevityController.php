<?php

namespace App\Http\Controllers\longevity;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Model\Longevity;
use App\Model\ProductLongevity;
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
        $longevities = Longevity::select('product_id','comparison','content')
                    ->where('product_id','=',$product_id)
                    ->get();
     
        $benifits = Longevity::select('product_id','comparison','content')
                    ->where('product_id','=',$product_id)
                    ->get();
        return response()->json([
             'success'      => true,
             'longevities' =>$longevities,
            //  'costs'       =>$costs,
            //  'benifits'    => $benifits
        ]);
        
        
   
    }


}
