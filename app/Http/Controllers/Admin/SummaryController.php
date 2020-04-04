<?php

namespace App\Http\Controllers\Admin;

use App\Imports\Summaries;
use App\Imports\SummariesImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class SummaryController extends Controller
{
    //
    public function index(){
        return view('admin.excel.summaries_info');
    }
    public function import(Request $request){
        if ($request->hasFile('import_file'))
        {
            Excel::import(new SummariesImport(), $request->file('import_file'));
        }
        $notification = array(
            'message' => 'add new post successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

}
