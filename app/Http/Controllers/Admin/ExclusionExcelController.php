<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\ExclusionsImport;
use Excel;
class ExclusionExcelController extends Controller
{
    //
    public function index()
    {
        return view('admin.excel.exclusion_import');
    }
    public function import(Request $request)
    {
        if ($request->hasFile('import_file'))
        {
            Excel::import(new ExclusionsImport, $request->file('import_file'));
            $notification = array(
                'message' => 'add successfully!',
                'alert-type' => 'success'
            );

        }
    }

}
