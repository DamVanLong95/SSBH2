<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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


        $car = array();
        $nhantho = array();
        $suckhoe = array();
        $data = array(
           'xe' => $car,
           'nhantho' => $nhantho,
           'suckhoe' => $suckhoe
        );

        return view('frontend.pages.treatment');
    
    }

}
