<?php

namespace App\Http\Controllers\Admin;


use App\Exports\CompaniesExport;
use App\Http\Requests\ExcelRequest;
use App\Imports\PermissionsImport;
use App\Imports\FinancesImport;
use App\Imports\BrandsImport;
use App\Imports\SummationsImport;
use App\Imports\ValidateExcel;
use App\Http\Controllers\Controller;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use App\Exports\PermissionsExport;
use App\Exports\FinancesExport;
use App\Exports\BrandsExport;
use App\User;

use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\Request;


class ExcelController extends Controller
{
    public function indexBrandCate()
    {
        return view('admin.excel.brand_cate_summaries');
    }
    public function indexPermission()
    {
        return view('admin.excel.permission_import');
    }
    public function indexFinance()
    {
        return view('admin.excel.finance_import');
    }
    public function indexBrand()
    {
        return view('admin.excel.brand_import');
    }
    public function importBrand(Request $request){
        if ($request->hasFile('import_file'))
        {
            Excel::import(new BrandsImport, $request->file('import_file'));
            $notification = array(
                'message' => 'add successfully!',
                'alert-type' => 'success'
            );

        }
        
        return redirect()->back()->with($notification);
    }
    public function importBrandCate(Request $request){
        if ($request->hasFile('import_file'))
        {
            Excel::import(new SummationsImport, $request->file('import_file'));
            $notification = array(
                'message' => 'add successfully!',
                'alert-type' => 'success'
            );

        }
        
        return redirect()->back()->with($notification);
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
    public function exportPermission(){
        return Excel::download(new PermissionsExport,'permissions.xlsx' );
    }
    public function exportFinance(){
        return Excel::download(new FinancesExport,'finances.xlsx');
    }
    public function exportBrand(){
        return Excel::download(new BrandsExport,'brands.xlsx');
    }

}
