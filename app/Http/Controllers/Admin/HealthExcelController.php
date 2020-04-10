<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\HealthsImport;
use Maatwebsite\Excel\Facades\Excel;
class HealthExcelController extends Controller
{
    //
    public function index(){
        return view('admin.excel.healths_import');
    }
    public function import(Request $request)
    {
        
        if ($request->hasFile('import_file'))
        {
            Excel::import(new HealthsImport, $request->file('import_file'));
            $notification = array(
                'message' => 'add successfully!',
                'alert-type' => 'success'
            );

        }
        
        return redirect()->back()->with($notification);
    }
}
