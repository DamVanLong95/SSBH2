<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Str;
use App\Model\Treatment;

class TreatmentController extends Controller
{
   
    public function create(){
        return view('admin.treatment');
    }
    public function store(Request $request){
        $data = $request->all();
        unset($data['_token']);
        if($request->hasFile('file')){
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $filename  =  time().'.'.$ext;
            $path = $file->storeAs(
                'treatment', Str::random(10).'_'.$filename,'public'
            );
            $data['slide'] = $path;
            unset($data['file']);
        }
        if($request->hasFile('img_detail')){
            $file = $request->file('img_detail');
            $ext = $file->getClientOriginalExtension();
            $filename  =  time().'.'.$ext;
            $path_more = $file->storeAs(
                'treatment_more', Str::random(10).'_'.$filename,'public'
            );
            $data['img_detail'] = $path_more;
            unset($data['img_detail']);
        }

            $data['slide'] =  isset($path)? $path:null;
            $data['img_detail'] =  isset($path_more)? $path_more:null;
            $product = new Treatment;
            // dd($data);
            $save = $product::create($data);
            if(!$save){
                // $save = $product::create($data);
                Storage::delete($path);
            }
        $notification = array(
            'message' => 'add new post successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    
}
