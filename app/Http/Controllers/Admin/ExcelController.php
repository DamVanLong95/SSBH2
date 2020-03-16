<?php

namespace App\Http\Controllers\Admin;


use App\Exports\CompaniesExport;
use App\Http\Requests\ExcelRequest;
use App\Imports\PermissionsImport;
use App\Imports\FinancesImport;
use App\Imports\ValidateExcel;
use App\Http\Controllers\Controller;

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
}
