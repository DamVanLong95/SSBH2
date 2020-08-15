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

class PostController extends Controller
{
    public function index(){
        return view('admin.posts.list');
    }
    public function show($id){
       $post =Post::find($id);
    //    dd($post);
        return view('admin.posts.show',compact('post'));
    }
    public function getData( Request $request){
       
        $posts = DB::table('posts')->select([ 'id','title', 'slug','content', 'created_at','is_published','author_id','avatar']);
        
        return Datatables::of($posts)
            ->editColumn('avatar', function ($post) {
                $path = asset('storage/'.$post->avatar);
                return '<img src="' .$path . '" alt="" class="img-circle " style="width:150px">';
            })
            ->editColumn('author_id', function($post){
                $post = Post::find($post->id);
                return ($post->author_id === null)?'...': $post->user->name;
            })
            ->editColumn('title', function($post){
                return '<a href="">'.$post->title.'</a>';
            })
            ->addColumn('action', function ($post) {
                return '<a href="'.route('posts.edit', $post->id).'" class="edit btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a href="'.route('posts.show', ['id'=>$post->id,'slug'=>$post->slug]).'" class="edit btn btn-sm btn-orange"><i class="glyphicon glyphicon-show"></i> Show</a>
                        <a href="javascript:void(0)" data-id="' . $post->id . '" class="delete btn btn-sm btn-danger btn-delete"><i class="fa fa-times"></i> Delete</a>';

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
                return \Str::limit(strip_tags($post->content), 50, '...') ;
            })
            ->rawColumns(['action', 'is_published','title','avatar','checkbox'])
            ->make(true);
    }
    public function create(){
        $users = User::orderBy('created_at')->get();
        return view('admin.posts.create',compact('users'));
    }
    public function store(PostRequest $request){
        $data = $request->all();
        unset($data['_token']);
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $ext = $file->getClientOriginalExtension();
            $filename  =  time().'.'.$ext;
            $path = $file->storeAs(
                'post', Str::random(10).'_'.$filename,'public'
            );
        }
            $data['slug']   = preg_replace('/\s+/', '-', $data['title']);
            $data['avatar'] = isset($path)? $path:null;
            $data['is_published'] = 1;
            $data['posted_at'] = now();
            $data['author_id'] = \Auth::user()['id'];
            // dd($data);
            DB::beginTransaction();
            try{
                $post= Post::create($data);
                DB::commit();
            }catch(\Exception $ex){
                DB::rollback();
                throw new Exception($ex->getMessage());
            }
           

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
    public function update(Request $request,$id){
        $data = $request->all();
        unset($data['_token']);
        $post = Post::find($request->input('id'));
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $ext = $file->getClientOriginalExtension();
            $filename  =  time().'.'.$ext;
            $path = $file->storeAs(
                'post', Str::random(10).'_'.$filename,'public'
            );
            $file_old ="public/". $post->avatar;
            if(Storage::exists($file_old)) {
                Storage::delete($file_old);
            }
        }
        unset($data['_method']);
        $data['slug']   = preg_replace('/\s+/', '-', $data['title']);
        $data['is_published'] = 1;
        $data['posted_at'] = now();
        $data['author_id'] = \Auth::user()['id'];
        $data['avatar']       = isset($path) ? $path: $post->avatar;;
        DB::beginTransaction();
        try{
            $post->update($data);
            DB::commit();
        }catch(\Exception $ex){
            DB::rollback();
            throw new Exception($ex->getMessage());
        }
       
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
