<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\LongevitiesImport;
use App\Exports\LongevitiesExport;
class LongevityExcelController extends Controller
{
    //
    public function indexScope(){
        return view('admin.excel.longevity_import');
    }
    public function importScope(Request $request)
    {
        if ($request->hasFile('import_file'))
        {
            Excel::import(new LongevitiesImport, $request->file('import_file'));
            $notification = array(
                'message' => 'add successfully!',
                'alert-type' => 'success'
            );

        }
        
        return redirect()->back()->with($notification);
    }
    public function exportLongevity(){
        return Excel::download(new LongevitiesExport, 'longevities.xlsx');
    }

}
