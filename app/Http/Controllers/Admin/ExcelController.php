<?php

namespace App\Http\Controllers\Admin;


use App\Exports\CompaniesExport;
use App\Http\Requests\ExcelRequest;
use App\Imports\PermissionsImport;
use App\Imports\FinancesImport;
use App\Imports\ValidateExcel;
use App\Http\Controllers\Controller;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use App\User;

use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\Request;


class ExcelController extends Controller
{
    public function indexPermission()
    {
        return view('admin.excel.permission_import');
    }
    public function indexFinance()
    {
        return view('admin.excel.finance_import');
    }
    public function importPermission(Request $request){
        if ($request->hasFile('import_file'))
        {
            Excel::import(new PermissionsImport, $request->file('import_file'));
            $notification = array(
                'message' => 'add successfully!',
                'alert-type' => 'success'
            );

        }
        
        return redirect()->back()->with($notification);
    }
    public function importFinance(Request $request)
    {
        if ($request->hasFile('import_file'))
        {
            Excel::import(new FinancesImport, $request->file('import_file'));
            $notification = array(
                'message' => 'add successfully!',
                'alert-type' => 'success'
            );

        }
        
        return redirect()->back()->with($notification);
    }
    public function exportCompany(){
        return Excel::download(new CompaniesExport, 'companies.xlsx' );
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
    public function importView($table){
        $users = User::orderBy('created_at', 'desc')->get();
        return view('admin.excel.users_import',compact('users','table'));
    }
    public function exportExcel(){
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
