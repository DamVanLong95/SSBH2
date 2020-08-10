<?php

namespace App\Http\Controllers\Admin;


use App\Exports\CompaniesExport;
use App\Http\Requests\ExcelRequest;
use App\Imports\PermissionsImport;
use App\Imports\FinancesImport;
use App\Imports\BrandsImport;
use App\Imports\SummationsImport;
use App\Imports\ValidateExcel;
use App\Imports\PunishmentsImport;
use App\Imports\ActivitiesImport;
use App\Imports\LocationsImport;
use App\Imports\DetailsImport;

use App\Http\Controllers\Controller;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use App\Exports\PermissionsExport;
use App\Exports\FinancesExport;
use App\Exports\BrandsExport;
use App\Exports\PunishmentsExport;
use App\Exports\ActivitiesExport;
use App\Exports\LocationsExport;
use App\User;

use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\Request;


class ExcelController extends Controller
{
    public function indexDetail(){
        return view('admin.excel.details_import');
    }
    public function indexLocation(){
        return view('admin.excel.locations_import');
    }
    public function indexActivity(){

        return view('admin.excel.activities_import');
    }
    public function indexBrandCate()
    {
        return view('admin.excel.brand_cate_summaries');
    }
    public function indexPermission()
    {
        return view('admin.excel.permission_import');
    }
    public function indexFinance()
    {
        return view('admin.excel.finance_import');
    }
    public function indexBrand()
    {
        return view('admin.excel.brand_import');
    }
    public function indexPunishment(){
        return view('admin.excel.punishment_import');
    }
    public function importDetail(Request $request){
        try{
            Excel::import(new DetailsImport, $request->file('import_file'));
        } catch(\Exception $e){
            return back()->withErrors($e->getMessage());
        }
        $notification = array(
            'message' => 'add successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function importLocation(Request $request){
        try{
            Excel::import(new LocationsImport, $request->file('import_file'));
        } catch(\Exception $e){
            return back()->withErrors($e->getMessage());
        }
        $notification = array(
            'message' => 'add successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function importBrand(Request $request){
        try{
            Excel::import(new BrandsImport, $request->file('import_file'));
        } catch(\Exception $e){
            return back()->withErrors($e->getMessage());
        }
           
        $notification = array(
            'message' => 'add successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function importBrandCate(Request $request){
        try{
            Excel::import(new SummationsImport, $request->file('import_file'));
        } catch(\Exception $e){
            return back()->withErrors($e->getMessage());
        }
        $notification = array(
            'message' => 'add successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function importPermission(Request $request){
        try{
            Excel::import(new PermissionsImport, $request->file('import_file'));
        } catch(\Exception $e){
            return back()->withErrors($e->getMessage());
        }
        $notification = array(
            'message' => 'add successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function importFinance(Request $request)
    {
       try{
         Excel::import(new FinancesImport, $request->file('import_file'));
       } catch( \Exception $e){
            return back()->withErrors($e->getMessage());
       }
            
        $notification = array(
            'message' => 'add successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    public function importPunishment(Request $request){

        try{
            Excel::import(new PunishmentsImport, $request->file('import_file'));
            
        } catch(\Exception $e){
            return back()->withErrors($e->getMessage());
        }
        $notification = array(
            'message' => 'add successfully!',
            'alert-type' => 'success'
        );

       
        return redirect()->back()->with($notification);
    }
    public function exportCompany(){
        return Excel::download(new CompaniesExport, 'companies.xlsx' );
    }
    public function importExcel(ExcelRequest $request)
    {
       try{
         Excel::import(new UsersImport, $request->file('import_file'));
       }catch(\Exception $e){
         return back()->withErrors($e->getMessage());
       }
        $notification = array(
            'message' => 'add new post successfully!',
            'alert-type' => 'success'
        );
       return redirect()->back()->with($notification);
    }
    public function importView($table){
        $users = User::orderBy('created_at', 'desc')->get();
        return view('admin.excel.users_import',compact('users','table'));
    }
    public function importActivity(Request $request){

       try{
             Excel::import(new ActivitiesImport, $request->file('import_file'));
       }catch (\Exception $e){
        //    dd($e);
            return back()->withErrors($e->getMessage());
       }
        $notification = array(
            'message' => 'add successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function exportExcel(){
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function exportPermission(){
        return Excel::download(new PermissionsExport,'permissions.xlsx' );
    }
    public function exportFinance(){
        return Excel::download(new FinancesExport,'finances.xlsx');
    }
    public function exportBrand(){
        return Excel::download(new BrandsExport,'brands.xlsx');
    }
    public function exportPunishment()
    {
        return Excel::download(new PunishmentsExport,'punishment.xlsx' );
    }
    public function exportActivity()
    {
        return Excel::download(new ActivitiesExport,'activities.xlsx' );
    }
    public function exportLocation()
    {
        return Excel::download(new LocationsExport,'activities.xlsx' );
    }
    

}
