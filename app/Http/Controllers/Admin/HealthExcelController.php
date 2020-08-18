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
        try{
            Excel::import(new HealthsImport, $request->file('import_file'));
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
