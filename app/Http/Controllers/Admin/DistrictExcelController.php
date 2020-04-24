<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\DistrictsImport;
use Maatwebsite\Excel\Facades\Excel;
class DistrictExcelController extends Controller
{
    //
    public function index(){
        return view('admin.excel.districts_import');
    }
    public function import(Request $request)
    {
        if ($request->hasFile('import_file'))
        {
            Excel::import(new DistrictsImport, $request->file('import_file'));
            $notification = array(
                'message' => 'add successfully!',
                'alert-type' => 'success'
            );

        }
        
        return redirect()->back()->with($notification);
    }

}
