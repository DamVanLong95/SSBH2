<?php

namespace App\Http\Controllers\Admin;


use App\Exports\CompaniesExport;
use App\Exports\UsersExport;
use App\Http\Requests\ExcelRequest;
use App\Imports\UsersImport;
use App\Imports\ValidateExcel;
use App\Http\Controllers\Controller;
use App\User;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\Request;

class ExcelController extends Controller
{
    public function importView($table){
        $users = User::orderBy('created_at', 'desc')->get();
        return view('admin.excel.users_import',compact('users','table'));
    }
    public function importExcel(ExcelRequest $request)
    {
        if ($request->hasFile('import_file'))
        {
            Excel::import(new UsersImport, $request->file('import_file'));
        }
        $notification = array(
            'message' => 'add new post successfully!',
            'alert-type' => 'success'
        );
       return redirect()->back()->with($notification);
    }
    public function exportExcel(){
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function exportCompany(){
        return Excel::download(new CompaniesExport, 'companies.xlsx' );
    }
}
