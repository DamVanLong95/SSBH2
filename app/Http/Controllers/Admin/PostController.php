<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    //
    public function index(){
        return view('admin.posts.post');
    }
    public function create(){
        return view('admin.posts.create');
    }
    public function store(PostRequest $request){
        $data = $request->all();
        $post = new Post;
        $post->title = $data['title'];
        $post->author_id    = 1;
        $post->slug         = preg_replace('/\s+/', '-', $data['title']);
        $post->description  = $data['description'];
        $post->content      = $data['content'];
        $post->is_published = $data['is_published'] == 'on' ? true: false;
        $post->posted_at    = now();
        $post->save();
        return redirect()->route('post.index');

    }
}
