<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\BenifitsImport;
use Excel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class BenifitController extends Controller
{
    //
    public function index(){
        return view('admin.excel.benifits_import');
    }
    public function import(Request $request){
        if ($request->hasFile('import_file'))
        {
            Excel::import(new BenifitsImport, $request->file('import_file'));
            $notification = array(
                'message'    => 'add successfully!',
                'alert-type' => 'success'
            );

        }
        return redirect()->back()->with($notification);
    }
}
