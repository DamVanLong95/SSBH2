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
use App\Model\CompanyType;

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
                $record_type = $company->types->first();
                if($describe == 4) return "Nhân thọ";
                if($describe == 0) return "Chưa có";
                if($describe == 3 && !$record_type) return "Phi Nhân thọ";
                if($record_type['type'] == 1) return  "Phi nhân thọ , Phí rẻ";
                if($record_type['type'] == 2) return "Phi nhân thọ , Bồi thường tốt";
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
        $type    = $company->types->first();
        return response()->json(['company'=>$company,'type' => $type]);
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
        $classifies = $request->get('classify');
        // dd($classifies);
        if($classifies){
               // dd($classifies);
            if(sizeof($classifies) ==  1){
                    $company->name = $request->get('name');
                    $company->logo =  isset($path) ? $path: $company->logo;
                    $company->classify = $classifies[0];
                    $company->save();
            }
            foreach($classifies as $value){
                if($value == 3 || $value==4){
                    $data = [
                        'name' => $request->get('name'),
                        'logo' => isset($path) ? $path: $company->logo,
                        'classify' => $value
                    ];
                   Company::where('id',$request->get('id'))->update($data);
                }
                else if($value ==2 || $value ==1){
                    $types = [
                        'company_id' => $request->get('id'),
                        'type' =>  $value
                    ];
                    $record = CompanyType::where('company_id',$request->get('id'))->get();
                    if(!$record->isEmpty()){
                        CompanyType::where('company_id',$request->get('id'))->update($types);
                    }else{
                        $new = new CompanyType;
                        $new->company_id = $request->get('id');
                        $new->type = $value;
                        $new->save();
                    }
                }
            }
            $notification = array(
                'message' => 'update successfully!',
                'alert-type' => 'success'
            );
        }else{
            $company->name = $request->get('name');
            $company->logo =  isset($path) ? $path: $company->logo;
            $company->classify = 0;
            $company->save();
        }
           
       
        return response()->json($notification);
    }
}
