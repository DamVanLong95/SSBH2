<?php

namespace App\Http\Controllers;

use App\Model\Advisor;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use \Storage;
use DB;

class AdvisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.advisor.list');
    }

    public function getData(){
        $advisors = Advisor::orderBy('created_at','desc')->get();
        // dd($treatments);
        return Datatables::of($advisors )
            ->editColumn('avatar', function ($advisor) {
                $path = asset('storage/'.$advisor->avatar);
                return '<img src="' .$path . '" alt="" class="img-circle " style="width:100px">';
            })
            ->addColumn('action', function ($advisor) {
                return '<a href="'.route('advisor.edit', $advisor->id).'" class="edit btn btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Sửa</a>
                        <a href="javascript:void(0)" data-id="' . $advisor->id . '" class="delete btn btn btn-danger btn-delete"><i class="fa fa-times"></i> Xóa</a>';


            })
           
            ->rawColumns(['avatar','action'])
            ->make(true);
    }
    public function create()
    {

        return view('admin.advisor.create') ;
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' =>'required',
            'email'    => 'required|unique:advisors',
            'file'     => 'required|mimes:jpeg,bmp,png'
        ]);
        $data = $request->all();
        unset($data['_token']);
        if($request->hasFile('file')){
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $filename  =  time().'.'.$ext;
            $path = $file->storeAs(
                'TVV', \Str::random(10).'_'.$filename,'public'
            );
            $data['avatar'] = $path;
            unset($data['file']);
        }
            $data['avatar'] =  isset($path)? $path:null;
            $data['status'] =  isset($data['status']) ? 1: 0;
            DB::beginTransaction();
            // dd($data);
            try{
                $tvv = new Advisor;
                $save = $tvv::create($data);
                DB::commit();
            }catch (\Exception $e){
                DB::rollback();
                throw $e;
            }
        $notification = array(
            'message' => 'add new successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $advisor = Advisor::find($id);
        return view('admin.advisor.edit',compact('advisor'));
            
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mode\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
       
        unset($data['_token']);
        $tvv = Advisor::find($id);

        if($request->hasFile('file')){
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $filename  =  time().'.'.$ext;
            $path = $file->storeAs(
                'TVV', \Str::random(10).'_'.$filename,'public'
            );
            $data['avatar'] = $path;
            $file_old ="public/". $tvv->avatar;
            if(Storage::exists($file_old)) {
                Storage::delete($file_old);
            }
            unset($data['file']);
        }
            $data['avatar'] =  isset($path)? $path:$tvv->avatar;
            if(isset($data['status'])){
                $data['status'] = ($data['status']== "on" ) ? 1 : 0;
            }else{
                $data['status'] = 0;
            }
            DB::beginTransaction();
            try{
                unset($data['_method']);
                $save = $tvv->update($data);
                DB::commit();
            }catch (\Exception $e){
                DB::rollback();
                throw $e;
            }
        $notification = array(
            'message' => 'Cập nhật thành công!',
            'alert-type' => 'success'
        );
        return redirect()->route('advisor.index')->with($notification);
    }

   
    public function destroy($id)
    {
        $advisor = Advisor::findorFail($id);
        if($advisor){
            if($advisor->delete()){
                $max = DB::table('advisors')->max('id') + 1;
                DB::statement('ALTER TABLE advisors AUTO_INCREMENT =  '.$max);
            }
            Storage::delete('public/'.$advisor->avatar);
        } else{
            return response()->json(error);
        }
        return response()->json(['message'=>'deleted','alert-type'=>'success']);
    }
}
