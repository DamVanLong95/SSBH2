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

        // $car = array([
        //     [
        //     'title' => 'An Tâm',
        //     'description' => 'BSH Bảo hiểm an tâm gia đình',
        //     'img1' => '/assets/images/treatment/antam.jpg',
        //     'img2' => '/assets/images/treatment/antam1.JPG'],

        //     ['title' => 'Tương lai',
        //     'description' => 'FWD Tương lai trong tầm tay bạn',
        //     'img1' => '/assets/images/treatment/tuonglai.jpg',
        //     'img2' => '/assets/images/treatment/tuonglai1.JPG']
        // ]);
        // $nhantho =  array([
        //     ['title' => 'Kiến tạo',
        //     'description' => 'Kiến tạo ước mơ',
        //     'img1' => '/assets/images/treatment/kientao.jpg',
        //     'img2' => '/assets/images/treatment/kientao1.JPG'],

        //     ['title' => 'M_',
        //     'description' => 'fffffffffff',
        //     'img1' => '/assets/images/treatment/',
        //     'img2' => '/assets/images/treatment/']
        // ]);

        // $suckhoe = array([
        //     ['title' => 'fffffffffff',
        //     'description' => 'fffffffffff',
        //     'img1' => '/assets/images/treatment/',
        //     'img2' => '/assets/images/treatment/'],

        //     ['title' => 'fffffffffff',
        //     'description' => '',
        //     'img1' => '/assets/images/treatment/',
        //     'img2' => '/assets/images/treatment/']
        // ]);
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
