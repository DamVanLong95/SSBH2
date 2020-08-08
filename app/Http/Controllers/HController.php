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

        $xe = Treatment::where('type',1)->get();
        $nhantho = Treatment::where('type',3)->get();
        $suckhoe = Treatment::where('type',2)->get();
        $data = [
           'xe' => $xe,
           'nhantho' => $nhantho,
           'suckhoe' => $suckhoe
        ];

        return view('frontend.pages.treatment', ['data' => $data] );

    }

}
