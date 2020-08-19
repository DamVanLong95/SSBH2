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
        $blogs     = Post::all();
        $questions = Question::all();
        $libraries = Library::select('*')->get()->groupBy('character');
        return view('frontend.pages.question',compact('blogs','questions','libraries'));
    }
    public function showBlog($id){
        $blog = Post::find($id);
        return view('frontend.pages.blog',compact('blog'));
    }
    public function searchByName(Request $request){
        $keyword = $request->input('keyword');
        $result = Library::where('terms','like','%'.$keyword.'%')->limit(10)->get();
        // $search_explode = explode(" ",$keyword);//mang chu

        // $condition_arr = array();

        // foreach($search_explode as $value){
        //     $condition_arr[] = "WHERE"." terms LIKE '%".$value."%'";
        // }

        // $condition = " ";
        // if(count($condition_arr) > 0){
        //     $condition = implode(" or ",$condition_arr);
        // }
        // $query = "SELECT * FROM libraries ".$condition;
        // $result= \DB::select( \DB::raw($query));
        return $result->map(function ($item) {
                return [
                    'value' => $item->id,
                    'label' => $item->terms
                ];
         });
        
       
    }
    public function searchByButton(Request $request){
        $param = $request->input('param');
        $result = Library::where('terms','LIKE','%'.$param.'%')->get();
        $html   = view('frontend.pages.filter_phrase')->with(['result' => $result])->render();
        return response()->json($html);
    }
    
}
