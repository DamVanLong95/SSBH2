<?php

namespace App\Http\Controllers\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Model\Health;
use App\Model\Program;
class HealthController extends Controller
{
    public function index()
    {

        $products = Product::orderBy('created_at','desc')->get();
        $saving = Product::where('cate','=',1)->get();
        $secure = Product::where('cate','=',2)->get();
        $data['saving'] = $saving;
        $data['secure'] = $secure;
        return view('frontend.pages.health',compact('data'));

    }
    public function droppImage(Request $request)
    {
        // dd($request->get('id'));
        $data = [];
        $product_id  = $request->get('id');
        $healths = Health::select('comparison','content','program_id')
                ->where('product_id','=',$product_id)
                ->get();
                // dd($healths);
        $programs = Program::select('id','name','product_id')
                ->where('product_id','=',$product_id)
                ->get();
        $html  = view('frontend.pages.health_ajax.health_program')->with('programs',$programs)->render();
        $data['programs'] = $programs;
        $data['healths']  = $healths;
        return response()->json([
            'success' =>true,
            'data' => $data,
            'html' =>$html
        ]);
        

    }
   
}
