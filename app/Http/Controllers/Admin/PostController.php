<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostRequest;
use App\Post;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
use DB,File;
use function foo\func;

class PostController extends Controller
{
    public function index(Request $request){
        return view('admin.posts.list');
    }
    public function getData( Request $request){
        $posts = DB::table('posts')->select([ 'id','title', 'content', 'created_at','is_published','author_id','avatar']);
        return Datatables::of($posts)
            ->editColumn('avatar', function ($post) {
                $path = asset('storage/'.$post->avatar);
                return '<img src="' .$path . '" alt="" class="img-circle ">';
            })
            ->editColumn('author_id', function($post){
                $post = Post::find($post->id);
                return ($post->author_id === null)?'...': $post->user->name;
            })
            ->editColumn('title', function($post){
                return '<a href="">'.$post->title.'</a>';
            })
            ->addColumn('action', function ($post) {
                return '<a href="'.route('post.edit', $post->id).'" class="edit btn btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a href="javascript:void(0)" data-id="' . $post->id . '" class="delete btn btn btn-danger btn-delete"><i class="fa fa-times"></i> Delete</a>';

            })
            ->editColumn('id', 'ID: {{$id}}')


            ->addColumn('is_published', function($post){
                $status  = $post->is_published;
                return ($status == 1) ? '<span class="btn-success status-label">Published</span>' :  '<span class="btn-warning status-label">Pending</span>';
            })
            ->editColumn('created_at',function($post){
                return Carbon::parse($post->created_at)->diffForHumans();
            })
            ->editColumn('content',function($post){
                return Str::words($post->content, 10, '...');
            })
            ->rawColumns(['action', 'is_published','title','avatar','checkbox'])
            ->make(true);
    }
    public function create(){
        $users = User::orderBy('created_at')->get();
        return view('admin.posts.create',compact('users'));
    }
    public function store(PostRequest $request){
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $ext = $file->getClientOriginalExtension();
            $filename  =  time().'.'.$ext;
            $path = $file->storeAs(
                'avatar', Str::random(10).'_'.$filename,'public'
            );
        }
            $data = $request->all();
            $post = new Post;
            $post->title        = $data['title'];
            $post->author_id    = $data['author_id'];
            $post->slug         = preg_replace('/\s+/', '-', $data['title']);
            $post->description  = $data['description'];
            $post->content      = $data['content'];
            $post->is_published = $data['is_published'] == 'on' ? true: false;
            $post->avatar       = isset($path)? $path:null;
            $post->posted_at    = now();
            $post->save();

        $notification = array(
            'message' => 'add new post successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('posts.index')->with('$notification');

    }
    public function edit($id){
        $users = User::orderBy('created_at')->get();
        $post  = Post::find($id);
        return view('admin.posts.edit',compact(['users','post']));
    }
    public function update(Request $request){
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $ext = $file->getClientOriginalExtension();
            $filename  =  time().'.'.$ext;
            $path = $file->storeAs(
                'avatar', Str::random(10).'_'.$filename,'public'
            );
        }
        $post = Post::find($request->get('id'));
        $file_old ="public/". $post->avatar;
        if(Storage::exists($file_old)) {
            Storage::delete($file_old);
        }
        $post->author_id    = $request->get('author_id');
        $post->title        = $request->get('title');
        $post->description  = $request->get('description');
        $post->content      = $request->get('content');
        $post->slug         = preg_replace('/\s+/', '-', $request->get('title'));
        $post->is_published = $request->get('is_published') == 'on' ? true: false;
        $post->posted_at    = now();
        $post->avatar       = isset($path) ? $path: $post->avatar;;
        $post->save();
        $notification = array(
            'message' => 'update successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('posts.index')->with($notification);
    }
    public function destroy($id)
    {
        $post = Post::findorFail($id);
        if($post){
            $post->delete();
            Storage::delete('public/'.$post->avatar);
        } else{
            return response()->json(error);
        }
        return response()->json(['message'=>'deleted','alert-type'=>'success']);

    }
}
