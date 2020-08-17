<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Model\Question;
use App\Model\Library;

class QuestionController extends Controller
{
    //
    public function index(){
        $blogs = Post::all();
        $questions = Question::all();
        $libraries = Library::all();

        return view('frontend.pages.question',compact('blogs','questions','libraries'));
    }
    public function showBlog($id){
        $blog = Post::find($id);
        return view('frontend.pages.blog',compact('blog'));
    }
    
}
