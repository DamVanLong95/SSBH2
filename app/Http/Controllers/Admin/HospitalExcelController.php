<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\HospitalsImport;
class HospitalExcelController extends Controller
{
    //
    public function index(){
        return view('admin.excel.hospitals_import');
    }
    public function import(Request $request)
    {
        if ($request->hasFile('import_file'))
        {
            Excel::import(new HospitalsImport, $request->file('import_file'));
            $notification = array(
                'message' => 'add successfully!',
                'alert-type' => 'success'
            );

        }
        
        return redirect()->back()->with($notification);
    }
}
