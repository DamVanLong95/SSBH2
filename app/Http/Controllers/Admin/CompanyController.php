<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\Http\Requests\CompanyRequest;
use App\Imports\CompaniesImport;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\DataTables;
use DB;

class CompanyController extends Controller
{
    //
    public function index (){
        return view('admin.excel.companies_import');
    }
    public function  getData(){
        $companies = Company::all();
        return DataTables::of($companies)
            ->addColumn('url', function ($company) {
                return $company->logo;
            })
            ->editColumn('logo', function ($company) {
                $path = asset('storage/'.$company->logo);
                return '<img src="' .$path . '" alt="" class="avatar ">';
            })
            ->editColumn('classify', function ($company) {
                $describe = $company->classify;
                if($describe == 1) return "Phí rẻ";
                if($describe == 2) return "Bồi thường tốt";
                if($describe == 3) return "Phi nhân thọ";
                if($describe == 4) return "Nhân thọ";
                if($describe == 0) return "Chưa có";
            })
            ->addColumn('action', function ($company) {
                return '<a href="'.route('company.edit', $company->id).'"  data-id="' . $company->id . '"  class="edit btn btn btn-primary"  data-toggle="modal"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a href="javascript:void(0)" data-id="' . $company->id . '" class="delete btn btn btn-danger btn-delete"><i class="fa fa-times"></i> Delete</a>';

            })
            ->rawColumns(['action','logo','url'])
            ->make(true);
    }
    public function store(Request $request)
    {
        if($request->hasFile('file')) {
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $path = $file->storeAs(
                'logo', Str::random(10) . '_' . $filename, 'public'
            );
        }
        $classifies = $request->get('classify');
        if($classifies){
            foreach ($classifies as $value){
                $company = new Company;
                $company->name = $request->get('name');
                $company->logo =  isset($path) ? $path: null;
                $company->classify = $value;
                $company->save();
                if ( !  $company->save())
                {
                    $file_new ="public/". $path;
                    Storage::delete($file_new);
                }
            }
        }else{
            $company = new Company;
            $company->name = $request->get('name');
            $company->logo =  isset($path) ? $path: null;
            $company->classify = 0;
            $company->save();
        }
        
        
        $notification = array(
            'message' => 'add new successfully!',
            'alert-type' => 'success'
        );
        return response()->json($notification);
    }
    public  function edit($id)
    {
        $company = Company::find ($id);
        return response()->json($company);
    }

    public function destroy($id){
        $company = Company::findorFail($id);
        if($company){
            if($company->delete()){
                $max = DB::table('companies')->max('id') + 1;
                DB::statement('ALTER TABLE companies AUTO_INCREMENT =  '.$max);
            }
            
            Storage::delete('public/'.$company->logo);

        } else{
            return response()->json(error);
        }
        return response()->json(['message'=>'deleted','alert-type'=>'success']);
    }
    public function update(Request $request)

    {
        $company = Company::findOrFail($request->get('id'));
        if($request->hasFile('file')) {
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $path = $file->storeAs(
                'logo', Str::random(10) . '_' . $filename, 'public'
            );
            
            if(isset($company->logo)){
                $file_old ="public/". $company->logo;
                if(Storage::exists($file_old)) {
                    Storage::delete($file_old);
                }
            }
        }
        // $company = Company::findOrFail($request->get('id'));
        // dd($company->logo);
        $classifies = $request->get('classify');
        if($classifies){
            if(sizeof($classifies) ==  1){
                    $company->name = $request->get('name');
                    $company->logo =  isset($path) ? $path: $company->logo;
                    $company->classify = $classifies[0];
                    $company->save();
            }
            foreach($classifies as $value){
                if($company->classify == $value){
                    $company->name = $request->get('name');
                    $company->logo =  isset($path) ? $path: $company->logo;
                    $company->classify = $value;
                    $company->save();
                    break;
                }
                else{
                    $new = new Company;
                    $new->name = $request->get('name');
                    $new->logo =  isset($path) ? $path: $company->logo;
                    $new->classify = $value;
                    $new->save();
                }
            }
        }
        $notification = array(
            'message' => 'update successfully!',
            'alert-type' => 'success'
        );
        return response()->json($notification);
    }
}
