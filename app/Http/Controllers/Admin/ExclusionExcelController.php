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
        try{
          
            Excel::import(new ExclusionsImport, $request->file('import_file'));
        }catch(\Exception $e){
            return back()->withErrors($e->getMessage());
        }
        $notification = array(
            'message'       => 'add successfully!',
            'alert-type'    => 'success'
        );
        return redirect()->back()->with($notification);
    }

}
