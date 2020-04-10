<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
use App\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use DB;
use Yajra\DataTables\Facades\DataTables;
use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;
class ProductController extends Controller
{
    //
    public function index(){
        return view('admin.products.list');
    }
    public function getIndex(){
       
        $products = DB::table('products')->select([ 'id','name', 'company_id','url','cate']);
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
            ->editColumn('cate',function($product){
                return ($product->cate==1)?"Tich luy":"Bao ve" ;
            })
            ->addColumn('action', function ($product) {
                return '<a href="'.route('product.edit', $product->id).'" class="edit btn btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a href="javascript:void(0)" data-id="' . $product->id . '" class="delete btn btn btn-danger btn-delete"><i class="fa fa-times"></i> Delete</a>';

            })
           
            ->rawColumns(['action','name','path','url','company_id','cate'])
            ->make(true);
    }
    public function create(){
        $companies = Company::orderBy('created_at','desc')->get(); 
        return view('admin.products.create',compact('companies'));
    }
    public function store(ProductRequest $request){

        if($request->hasFile('file')){
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $filename  =  time().'.'.$ext;
            $path = $file->storeAs(
                'longevity', Str::random(10).'_'.$filename,'public'
            );
        }
            $data = $request->all();
            $product = new Product;
            $product->name          = $data['name'];
            $product->company_id    = $data['company_id'];
            $product->cate          = $data['cate'];
            $product->url           = isset($path)? $path:null;
            $product->save();

        $notification = array(
            'message' => 'add new post successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('product.index')->with($notification);
    }
    public function edit($id){
        $companies = Company::orderBy('created_at')->get();
        $product  = Product::find($id);
        return view('admin.products.edit',compact(['companies','product']));

    }
    public function update(Request $request,$id){
        if($request->hasFile('file')){
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $filename  =  time().'.'.$ext;
            $path = $file->storeAs(
                'longevity', Str::random(10).'_'.$filename,'public'
            );
            $product = Product::find($id);
            $file_old ="public/". $product->url;
            if(Storage::exists($file_old)) {
                Storage::delete($file_old);
            }
        }
      
        $product = Product::find($id);
        $product->name    = $request->get('name');
        $product->company_id        = $request->get('company_id');
        $product->cate      = $request->get('cate');
        $product->url       = isset($path) ? $path: $product->url;;
        $product->save();
        $notification = array(
            'message' => 'update successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('product.index')->with($notification);
    }
    public function exportProduct(){
        return Excel::download(new ProductsExport,'products.xlsx');
    }

}