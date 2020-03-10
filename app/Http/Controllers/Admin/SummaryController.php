<?php

namespace App\Http\Controllers\Admin;

use App\Imports\Summaries;
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
            Excel::import(new Summaries, $request->file('import_file'));
        }
        $notification = array(
            'message' => 'add new post successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
