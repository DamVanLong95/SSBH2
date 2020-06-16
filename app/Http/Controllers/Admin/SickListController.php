<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\SickLongevityImport;
use Maatwebsite\Excel\Facades\Excel;
use DB;
class SickListController extends Controller
{
    //
    public function index(){
        return view('admin.excel.sicklist_import');
    }
    public function import(Request $request){
        if ($request->hasFile('import_file'))
        {
            Excel::import(new SickLongevityImport, $request->file('import_file'));
            $notification = array(
                'message'    => 'add successfully!',
                'alert-type' => 'success'
            );

        }
        return redirect()->back()->with($notification);
    }

}
