<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class QuestionController extends Controller
{
    //
    public function index(){
        $blogs = Post::all();
        return view('frontend.pages.question',compact('blogs'));
    }
    public function showBlog($id){
        $blog = Post::find($id);
        return view('frontend.pages.blog',compact('blog'));
    }
}
