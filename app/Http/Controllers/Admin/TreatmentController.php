<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Str;
use App\Model\Treatment;
use App\Model\Advisor;
use Yajra\DataTables\Facades\DataTables;
use \Storage;
class TreatmentController extends Controller
{
   
    public function create(){
        
        $advisors = Advisor::orderBy('fullname')->get();

        return view('admin.treatment',compact('advisors'));
    }
    public function index(){
        return view('admin.treatment_list');
    }
    public function edit($id){
        $treatment = Treatment::find($id);
        $advisors = Advisor::orderBy('fullname')->get();
        // dd($treatment);
        return view('admin.treatment_edit',compact('treatment','advisors'));

    }
    public function listData(){
        $treatments = Treatment::orderBy('updated_at','desc')->get();
        // dd($treatments);
        return Datatables::of($treatments )
            ->editColumn('slide', function ($treatment) {
                $path = asset('storage/'.$treatment->slide);
                return '<img src="' .$path . '" alt="" class="img-circle " style="width:100px">';
            })
            ->editColumn('img_detail', function ($treatment) {
                $path = asset('storage/'.$treatment->img_detail);
                return '<img src="' .$path . '" alt="" class="img-circle " style="width:100px">';
            })
            ->editColumn('type', function($treatment){
                if($treatment->type == 1) return "Bảo hiểm xe";
                if($treatment->type == 2) return "Bảo hiểm sức khỏe";
                if($treatment->type == 3) return "Bảo hiểm nhân thọ";
            })
            ->addColumn('action', function ($treatment) {
                return '<a href="'.route('treatment.edit', $treatment->id).'" class="edit btn btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a href="javascript:void(0)" data-id="' . $treatment->id . '" class="delete btn btn btn-orange btn-delete"><i class="fa fa-times"></i> Delete</a>';

            })
           
            ->rawColumns(['slide','img_detail','type','action'])
            ->make(true);
    }
    public function store(Request $request){
        $data = $request->all();
        unset($data['_token']);
        if($request->hasFile('file')){
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $filename  =  time().'.'.$ext;
            $path = $file->storeAs(
                'treatment', Str::random(10).'_'.$filename,'public'
            );
            $data['slide'] = $path;
            unset($data['file']);
        }
        if($request->hasFile('img_detail')){
            $file = $request->file('img_detail');
            $ext = $file->getClientOriginalExtension();
            $filename  =  time().'.'.$ext;
            $path_more = $file->storeAs(
                'treatment_more', Str::random(10).'_'.$filename,'public'
            );
            $data['img_detail'] = $path_more;
            unset($data['img_detail']);
        }

            $data['slide'] =  isset($path)? $path:null;
            $data['img_detail'] =  isset($path_more)? $path_more:null;
            $product = new Treatment;
            // dd($data);
            $save = $product::create($data);
            if(!$save){
                Storage::delete($path);
            }
        $notification = array(
            'message' => 'add new post successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function update(Request $request,$id){
        // dd($id);
        $data = $request->all();
        $treatment = Treatment::find($id);
        if($request->hasFile('file')){
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $filename  =  time().'.'.$ext;
            $path = $file->storeAs(
                'treatment', Str::random(10).'_'.$filename,'public'
            );
            $data['slide'] = $path;
            $file_old ="public/". $treatment->slide;
            if(Storage::exists($file_old)) {
                Storage::delete($file_old);
            }
            unset($data['file']);
        }
        if($request->hasFile('img_detail')){
            $file = $request->file('img_detail');
            $ext = $file->getClientOriginalExtension();
            $filename  =  time().'.'.$ext;
            $path_more = $file->storeAs(
                'treatment_more', Str::random(10).'_'.$filename,'public'
            );
            $file_more_old ="public/". $treatment->img_detail;
            if(Storage::exists($file_more_old)) {
                Storage::delete($file_more_old);
            }
            $data['img_detail'] = $path_more;
        }
        unset($data['_token']);
        $data['slide'] =  isset($path)? $path:$treatment->slide;
        $data['img_detail'] =  isset($path_more)? $path_more:$treatment->img_detail;
        $treatment->update($data);
        $notification = array(
            'message' => 'update successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('treatment.index')->with($notification);

    }
    public function destroy($id)
    {
        $treatment = Treatment::findorFail($id);
        if($treatment){
            $treatment->delete();
            Storage::delete('public/'.$treatment->slide);
            Storage::delete('public/'.$treatment->img_detail);
        } else{
            return response()->json(error);
        }
        return response()->json(['message'=>'deleted','alert-type'=>'success']);
    }
    
}
