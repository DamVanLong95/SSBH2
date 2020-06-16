<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\ProgramsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Product;
use App\Model\Program;
use Str;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
class ProgramExcelController extends Controller
{
    //
    public function index(){
        $products = Product::orderBy('created_at','asc')->get();
        return view('admin.excel.program_import',compact('products'));
    }
    // public function create(){
    //     return view('admin.programs_healths.create');
    // }
    public function anyData(){
        $programs = Program::select(['id','name','product_id','created_at','img_cost']);
        return Datatables::of($programs)
            ->editColumn('product_id',function($program){
                return $program->product->name;
            })
            ->addColumn('action', function ($program) {
                return '<a href="'.route('program.edit', $program->id).'" class="edit btn btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
                        // <a href="javascript:void(0)" data-id="' . $program->id . '" class="delete btn btn btn-danger btn-delete"><i class="fa fa-times"></i> Delete</a>';

            })
            ->addColumn('image', function ($program) {
                $path = asset('storage/'.$program->img_cost);
                return '<img src="' .$path . '" alt="" class="img-circle " style="width:100px">';
            })
            ->rawColumns(['action','image'])
            ->make(true);
    }
    public function edit($id){
        $program = Program::find($id);
        // dd($program);
        return view('admin.program_health.edit',compact('program'));
    }
    public function update(Request $request, $id){
        $data = $request->all();
        unset($data['_token']);
       
        if($request->hasFile('file')){
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $filename  =  time().'.'.$ext;
            $path = $file->storeAs(
                'health/program', Str::random(10).'_'.$filename,'public'
            );
            $program = Program::find($id);
            $file_old ="public/". $program->img_cost;
            if(Storage::exists($file_old)) {
                Storage::delete($file_old);
            }
        }
        $program = Program::find($id);

        $program->img_cost = isset($path)?$path: null;
        $program->product_id = $request->get('product_id');
        $program->name       = $request->get('name');
        $save = $program->save();
        if(!$save){
           abort(404);
        }
        $notification = array(
            'message' => 'update successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('indexProgram.import')->with($notification);
       
        // dd($data);
    }

    public function import(Request $request)
    {
        
        if ($request->hasFile('import_file')){
            Excel::import(new ProgramsImport, $request->file('import_file'));
        }
            
        $notification = array(
            'message' => 'add successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    
}
