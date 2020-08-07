<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


        $car = array([
            ['title' => 'fffffffffff',
            'description' => 'fffffffffff',
            'img1' => './public/assets/images/treatment/antam.jpg',
            'img2' => ''],

            ['title' => 'fffffffffff',
            'description' => 'fffffffffff',
            'img1' => '',
            'img2' => '']
        ]);
        $nhantho =  array([
            ['title' => 'fffffffffff',
            'description' => 'fffffffffff',
            'img1' => '',
            'img2' => 'fffffffffff'],
            
            ['title' => 'fffffffffff',
            'description' => 'fffffffffff',
            'img1' => '',
            'img2' => '']
        ]);

        $suckhoe = array([
            ['title' => 'fffffffffff',
            'description' => 'fffffffffff',
            'img1' => '',
            'img2' => ''],
            
            ['title' => 'fffffffffff',
            'description' => '',
            'img1' => '',
            'img2' => '']
        ]);
        $data = array(
           'xe' => $car,
           'nhantho' => $nhantho,
           'suckhoe' => $suckhoe
        );

        return view('frontend.pages.treatment', ['treatments' => $data] );
    
    }

}
