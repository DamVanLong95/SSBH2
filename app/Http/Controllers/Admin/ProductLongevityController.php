<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
use App\Model\ClassifyLongevity;
use App\Model\ProductLongevity;
use App\Model\TypeLongevity;
use App\Http\Requests\ProductLongevityRequest;
use Illuminate\Support\Facades\Storage;
use DB;
use Str;
use Yajra\DataTables\Facades\DataTables;
use App\Exports\ProductsExport;
use Illuminate\Support\Facades\Log;
class ProductLongevityController extends Controller
{
    //
    public function index(){
        return view('admin.product_longevity.list');
    }
    public function getData()
    {
        $products = DB::table('product_longevities')->select([ 'id','name', 'company_id','url','classify_id'])->orderBy('created_at', 'asc');
      
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
                return $company[0]->name.'    '.'ID:'.$product->company_id;
            })
            
            ->addColumn('path',function($product){
                return $product->url ;
            })
            ->editColumn('classify_id',function($product){
                $product = ProductLongevity::find($product->id);
                $str = '';
                // dd($product->type);
                foreach($product->type as $value){
                    if($value->type ==1)  $str.=  "Tích lũy - Tiết kiệm, &nbsp;";
                    if($value->type == 2) $str.=  "Đầu tư, &nbsp;";
                    if($value->type == 3) $str.=  "Bảo vệ, &nbsp;";
                    if($value->type == 4) $str.=  "Giáo dục, &nbsp;";
                    if($value->type == 5) $str.=  "Hưu trí, &nbsp;";
                    if($value->type == 6) $str.=  "Doanh nghiệp, &nbsp;";
                   
                }
                return  $str ;
               
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
        // dd($product);
        // dd($product->type);
        $longevity_type = $product->type;
        $arr = [];
        foreach($longevity_type as $value){
            array_push($arr, $value->type);
        }
        // dd($arr);
        $arr = json_encode($arr);
        return view('admin.product_longevity.edit',compact('companies','product','classifies','arr'));
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
            $product = new ProductLongevity;
            $product->name          = $data['name'];
            $product->company_id    = $data['company_id'];
            $product->classify_id   = 0;
            $product->url           = isset($path)? $path:null;
            $product->save();
            if ( !  $product->save())
            {
                App::abort(500, 'Error');
            }
            foreach($data['classify'] as $value){
                $type = new TypeLongevity ;
                $type->product_longevity_id = $product->id;
                $type->type   = $value;
                $type->save();
            }
           

        $notification = array(
            'message' => 'add new post successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('product_longevity.index')->with($notification);
    }
    public function update(Request $request,$id){
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
        $classifies = $request->get('classify');
        // dd($classifies);
        $product = ProductLongevity::find($id);
        $product->name          = $request->get('name');
        $product->company_id    = $request->get('company_id');
        $product->classify_id   = 0;
        $product->url           = isset($path) ? $path: $product->url;;
        $product->save();
        if($classifies){
           if($product->type->isEmpty()){
                foreach($classifies as $classify){
                    $type = new TypeLongevity;
                    $type->product_longevity_id = $id;
                    $type->type = $classify;
                    $type->save();
                }
                
           }else{
               if(sizeof($product->type) > sizeof($classifies)){
                //    dd($product->type);
                    foreach ($product->type as $key=>$value) { 
                        Log::debug("th1");
                        if(in_array($value->type, $classifies)){
                            $record = TypeLongevity::where('type',$value->type)->update([
                                'product_longevity_id' => $id,
                                'type'                 => $value->type
                            ]);   
                        }else{
                            $new = TypeLongevity::where('type',$value->type)->delete();
                        }
                    }   
                }elseif(sizeof($product->type) < sizeof($classifies)){
                    $arr_temp = [];
                    foreach($product->type as $val){
                        array_push($arr_temp, $val->type);
                    }
                    foreach ($classifies as $key=>$classify) { 
                        if(in_array($classify, $arr_temp)){
                            $record = TypeLongevity::where('type',$classify)->update([
                                'product_longevity_id' => $id,
                                'type'                 => $classify
                            ]);
                            
                        }else{
                            $new = new TypeLongevity;
                            $new->product_longevity_id = $id;
                            $new->type = $classify;
                            $new->save();  
                        }

                    }
                }else{
                    $arr_temp = [];
                    foreach($product->type as $val){
                        array_push($arr_temp, $val->type);
                    }
                    foreach ($classifies as $key=>$classify) { 
                        if(in_array($classify, $arr_temp)){
                            $record = TypeLongevity::where('type',$classify)->update([
                                'product_longevity_id' => $id,
                                'type'                 => $classify
                            ]);
                            
                        }else{
                            $new = new TypeLongevity;
                            $new->product_longevity_id = $id;
                            $new->type = $classify;
                            $new->save();  
                        }

                    }
                    foreach($arr_temp as $temp){
                        if(!in_array($temp, $classifies)){
                            TypeLongevity::where('type',$temp)->delete();
                        }
                    }
                }
           }
            
        }
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
