<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MyController extends Controller
{
    //
    public function importExportView()
    {
        return view('admin.layouts.export');
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function import()
    {
        Excel::import(new UsersImport,request()->file('file'));

        return back();
    }
}
