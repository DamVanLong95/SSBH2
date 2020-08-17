<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Advisor;
use App\Location;


class ContactController extends Controller
{
    //
    private $locations;
    private $advisors;
    public function  __construct(){
        $this->advisors    = Advisor::all();
        $this->locations   = Location::all();
    }

    public function index(){
        $advisors   = $this->advisors;
        $locations  = $this->locations;
        return view('frontend.pages.contact',compact('advisors','locations'));
    }
    public function searchWorking(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $result =[];
        $advisor_by_work = Advisor::where('work','LIKE','%'.$data['work'].'%')->get();
        $result = $advisor_by_work;
        if($data['major'] != null){
            $advisor_by_work = Advisor::where('work','LIKE','%'.$data['work'].'%')
                        ->where('major' ,$data['major'])
                        ->get();
            $result = $advisor_by_work;
        }
        if($data['area'] != null){
            $advisor_by_work = Advisor::where('work','LIKE','%'.$data['work'].'%')
                        ->where('area' ,'LIKE','%'.$data['area'].'%')
                        ->get();
                        $result = $advisor_by_work;
                        // dd($result);
        } 
        if($data['area'] != null  ){
            if($data['major'] != null){
                $advisor_by_work = Advisor::where('work','LIKE','%'.$data['work'].'%')
                            ->where('area' ,'LIKE','%'.$data['area'].'%')
                            ->where('major' ,$data['major'])
                            ->get();
                $result = $advisor_by_work;
            }
        }
        //    dd($result);
        $html = view('frontend.pages.advisor_name')->with(['result' => $result,'locations' => $this->locations])->render();
        return response()->json($html);
    }
    public function searchMajor(Request $request){
        $data = $request->all();
        $result =[];
        $advisor_by_major = Advisor::where('major','=',$data['major'])->get();
        
        $result = $advisor_by_major;

      
        if($data['work'] != null){
            $advisor_by_work = Advisor::where('work','LIKE','%'.$data['work'].'%')
                        ->where('major' ,$data['major'])
                        ->get();
            $result = $advisor_by_work;
        }
        if($data['area'] != null){
            $advisor_by_major = Advisor::where('major' ,$data['major'])
                        ->where('area' ,'LIKE','%'.$data['area'].'%')
                        ->get();
            $result = $advisor_by_major;
                        // dd($result);
        } 
        if($data['area'] != null  ){
            if($data['work'] != null){
                $advisor_by_work = Advisor::where('work','LIKE','%'.$data['work'].'%')
                            ->where('area' ,'LIKE','%'.$data['area'].'%')
                            ->where('major' ,$data['major'])
                            ->get();
                $result = $advisor_by_work;
            }
        }
        $html = view('frontend.pages.advisor_name')->with(['result' => $result,'locations' => $this->locations])->render();
        return response()->json($html);
    }
    public function searchArea(Request $request ){
        $data = $request->all();
        unset($data['_token']);
        $result =[];
        $advisor_by_area = Advisor::where('area','LIKE','%'.$data['area'].'%')->get();
        $result = $advisor_by_area;
        if($data['major'] != null){
            $advisor_by_area = Advisor::where('area','LIKE','%'.$data['area'].'%')
                        ->where('major' ,$data['major'])
                        ->get();
            $result = $advisor_by_area;
        }
        if($data['work'] != null){
            $advisor_by_area = Advisor::where('work','LIKE','%'.$data['work'].'%')
                        ->where('area' ,'LIKE','%'.$data['area'].'%')
                        ->get();
                        $result = $advisor_by_area;
                        // dd($result);
        } 
        if($data['work'] != null  ){
            if($data['major'] != null){
                $advisor_by_area = Advisor::where('work','LIKE','%'.$data['work'].'%')
                            ->where('area' ,'LIKE','%'.$data['area'].'%')
                            ->where('major' ,$data['major'])
                            ->get();
                $result = $advisor_by_area;
            }
        }
        //    dd($result);
        $html = view('frontend.pages.advisor_name')->with(['result' => $result,'locations' => $this->locations])->render();
        return response()->json($html);
    }
}
