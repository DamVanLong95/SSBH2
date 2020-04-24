<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\ProgramsImport;
use Maatwebsite\Excel\Facades\Excel;
class ProgramExcelController extends Controller
{
    //
    public function index(){
        return view('admin.excel.program_import');
    }
    public function import(Request $request)
    {
        
        if ($request->hasFile('import_file'))
        {
            Excel::import(new ProgramsImport, $request->file('import_file'));
            $notification = array(
                'message' => 'add successfully!',
                'alert-type' => 'success'
            );

        }
        
        return redirect()->back()->with($notification);
    }
}
