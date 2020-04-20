<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
use App\Model\ClassifyLongevity;
use App\Model\ProductLongevity;
use App\Http\Requests\ProductLongevityRequest;
use Illuminate\Support\Facades\Storage;
use DB;
use Str;
use Yajra\DataTables\Facades\DataTables;
use App\Exports\ProductsExport;
class ProductLongevityController extends Controller
{
    //
    public function index(){
        return view('admin.product_longevity.list');
    }
    public function getData()
    {
        $products = DB::table('product_longevities')->select([ 'id','name', 'company_id','url','classify_id'])->orderBy('created_at', 'desc');
      
        return Datatables::of($products)

            ->editColumn('id', 'ID: {{$id}}')
            ->editColumn('url', function ($product) {
                $path = asset('storage/'.$product->url);
                return '<img src="' .$path . '" alt="" class="img-circle " style="width:100px">';
            })
            ->editColumn('name', function($product){
                return '<a href="">'.$product->name.'</a>';
            })
            ->editColumn('company_id', function($product){

                $company = Company::where('id','=',$product->company_id)->get();
                return $company[0]->name;
            })
            
            ->addColumn('path',function($product){
                return $product->url ;
            })
            ->editColumn('classify_id',function($product){
                if($product->classify_id ==1)  return  "Tích lũy - Tiết kiệm";
                if($product->classify_id == 2) return  "Đầu tư";
                if($product->classify_id == 3) return  "Bảo vệ";
                if($product->classify_id == 4) return  "Giáo dục";
                if($product->classify_id == 5) return  "Hưu trí";
                if($product->classify_id == 6) return  "Doanh nghiệp";
            })
            ->addColumn('action', function ($product) {
                return '<a href="'.route('product_longevity.edit', $product->id).'" class="edit btn btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a href="javascript:void(0)" data-id="' . $product->id . '" class="delete btn btn btn-danger btn-delete"><i class="fa fa-times"></i> Delete</a>';

            })
           
            ->rawColumns(['action','name','path','url','company_id','classify_id'])
            ->make(true);
    }
    public function create()
    {
        $companies  = Company::orderBy('created_at','desc')->get();
        $classifies = ClassifyLongevity::all();
        
        return view('admin.product_longevity.create',compact('companies','classifies'));
    }
    public function edit($id){
        $companies = Company::orderBy('created_at')->get();
        $classifies = ClassifyLongevity::all();
        $product  = ProductLongevity::find($id);
        return view('admin.product_longevity.edit',compact('companies','product','classifies'));
    }
    public function store(ProductLongevityRequest $request){
        if($request->hasFile('file')){
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $filename  =  time().'.'.$ext;
            $path = $file->storeAs(
                'product', Str::random(10).'_'.$filename,'public'
            );
        }
            $data = $request->all();
            // dd($data['classify']);
           
            foreach($data['classify'] as $value){
                $product = new ProductLongevity ;
                $product->name          = $data['name'];
                $product->company_id    = $data['company_id'];
                $product->classify_id   = $value;
                $product->url           = isset($path)? $path:null;
                $product->save();
            }
           

        $notification = array(
            'message' => 'add new post successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('product_longevity.index')->with($notification);
    }
    public function update(Request $request,$id){
        // dd($request->all());
        if($request->hasFile('file')){
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $filename  =  time().'.'.$ext;
            $path = $file->storeAs(
                'product', Str::random(10).'_'.$filename,'public'
            );
            $product = ProductLongevity::find($id);
            $file_old ="public/". $product->url;
            if(Storage::exists($file_old)) {
                Storage::delete($file_old);
            }
        }
      
        $product = ProductLongevity::find($id);
        $product->name    = $request->get('name');
        $product->company_id        = $request->get('company_id');
        $product->classify_id      = $request->get('classify');
        $product->url       = isset($path) ? $path: $product->url;;
        $product->save();
        $notification = array(
            'message' => 'update successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('product_longevity.index')->with($notification);
    }
    public function destroy($id)
    {
        $product = ProductLongevity::findorFail($id);
        if($product){
            if($product->delete()){
                $max = DB::table('product_longevities')->max('id') + 1;
                DB::statement('ALTER TABLE product_longevities AUTO_INCREMENT  '.$max);
            }
            
            Storage::delete('public/'.$product->url);
        } else{
            return response()->json(error);
        }
        return response()->json(['message'=>'deleted','alert-type'=>'success']);

    }

}
