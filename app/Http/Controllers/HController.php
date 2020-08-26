<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Treatment;
class HController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function treatments(){

        $xe      = Treatment::where('type',1)->get();
        $nhantho = Treatment::where('type',3)->get();
        $suckhoe = Treatment::where('type',2)->get();
        foreach($xe as $key =>$x){
            $x['tvv']   = $x->advisor['fullname'];
            $x['slug']  = $x->advisor['slug'];
            $x['phone'] = $x->advisor['phone'];
        }
        foreach($nhantho as $key =>$nt){
            $nt['tvv']   = $nt->advisor['fullname'];
            $nt['slug']  = $nt->advisor['slug'];
            $nt['phone'] = $nt->advisor['phone'];
        }
        foreach($suckhoe as $key =>$sk){
            $sk['tvv']   = $sk->advisor['fullname'];
            $sk['slug']  = $sk->advisor['slug'];
            $sk['phone'] = $sk->advisor['phone'];
        }
        $data = [
           'xe' => $xe,
           'nhantho' => $nhantho,
           'suckhoe' => $suckhoe
        ];

        return view('frontend.pages.treatment', ['data' => $data] );

    }

}
