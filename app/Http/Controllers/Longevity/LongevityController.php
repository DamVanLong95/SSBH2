<?php

namespace App\Http\Controllers\longevity;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Model\Longevity;

class LongevityController extends Controller
{
    //
    public function index()
    {

        $products = Product::orderBy('created_at','desc')->get();
        $saving = Product::where('cate','=',1)->get();
        $secure = Product::where('cate','=',2)->get();
        $scope_secure = Longevity::select('product_id','comparison')
                    ->take(3)
                    ->get();//pham vi bao ve
        $cost  = Longevity::select('product_id' ,'comparison')
                ->where('classify', '=',3)
                ->take(2)
                ->get();//Phi
        $benifits = Longevity::select('product_id','comparison')
                ->where('classify', '=',4)
                ->take(14)
                ->get();//quyen loi san pham
        $data['saving'] = $saving;
        $data['secure'] = $secure;
        $data['cost'] = $cost;
        $data['benifits'] = $benifits;
        return view('frontend.pages.longevity',compact('data','scope_secure'));
    }
    public function droppImage(Request $request){
        $product_id = $request->get('id');
        $longevities = Longevity::select('product_id','classify','comparison','content','classify')
                    ->where('product_id','=',$product_id)
                    ->where('classify','=', 2)
                    ->get();
        $costs = Longevity::select('product_id','classify','comparison','content','classify')
                    ->where('product_id','=',$product_id)
                    ->where('classify','=', 3)
                    ->get();
        $benifits = Longevity::select('product_id','classify','comparison','content','classify')
                    ->where('product_id','=',$product_id)
                    ->where('classify','=', 4)
                    ->get();
        return response()->json([
             'success'      => true,
             'longevities' =>$longevities,
             'costs'       =>$costs,
             'benifits'    => $benifits
        ]);
        
        
   
    }


}
