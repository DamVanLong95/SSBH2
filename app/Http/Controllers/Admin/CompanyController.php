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

class CompanyController extends Controller
{
    //
    public function index (){
        return view('admin.excel.companies_import');
    }
    public function  getData(){
        $companies = Company::all();
        return DataTables::of($companies)

            ->editColumn('logo', function ($company) {
                $path = asset('storage/'.$company->logo);
                return '<img src="' .$path . '" alt="" class="avatar ">';
            })
            ->addColumn('action', function ($company) {
                return '<a href="'.route('company.edit', $company->id).'"  data-id="' . $company->id . '"  class="edit btn btn btn-primary"  data-toggle="modal"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a href="javascript:void(0)" data-id="' . $company->id . '" class="delete btn btn btn-danger btn-delete"><i class="fa fa-times"></i> Delete</a>';

            })
            ->rawColumns(['action','logo'])
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
        $company = new Company;
        $company->name = $request->get('name');
        $company->logo =  isset($path) ? $path: null;
        $company->save();
        if ( !  $company->save())
        {
            $file_new ="public/". $path;
            Storage::delete($file_new);
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
            $company->delete();
            Storage::delete('public/'.$company->logo);

        } else{
            return response()->json(error);
        }
        return response()->json(['message'=>'deleted','alert-type'=>'success']);
    }
    public function update(Request $request)

    {
        if($request->hasFile('file')) {
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $path = $file->storeAs(
                'logo', Str::random(10) . '_' . $filename, 'public'
            );
        }
        $company = Company::find($request->get('id'));
        if(isset($company->logo)){
            $file_old ="public/". $company->logo;
            if(Storage::exists($file_old)) {
                Storage::delete($file_old);
            }
        }
        $company->name = $request->get('name');
        $company->logo =  $path;
        $company->save();
        $notification = array(
            'message' => 'update successfully!',
            'alert-type' => 'success'
        );
        return response()->json($notification);
    }
}
