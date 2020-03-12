@extends('admin.layouts.master')
@section('content')
    <div class="col-lg-9">
        <div class="card">
            <form class="form-horizontal" action="{{route('post.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Edit posts</h4>
                    <input type="hidden" name="id" value="{{$post->id}}">
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Author</label>
                        <div class="col-md-9">
                            <select class="custom-select " name="author_id" >
                                @foreach($users as $key=>$user)
                                    <option value="{{ $user->id }}" {{ $user->id == $post->author_id ? 'selected' : '' }}>{{ $user->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('author_id'))
                                <div class="error" style="color: red">{{ $errors->first('author_id') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Title</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="title" name="title"  value="{{$post->title}}">
                            </input>
                            @if($errors->has('title'))
                                <div class="error" style="color: red">{{ $errors->first('title') }}</div>
                            @endif
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Status </label>
                        <div class="col-sm-9">
                            &nbsp; <input type="checkbox" class="checkmark" id="is_published" name="is_published"
                                          {{($post->is_published==1)?'checked': 'uncheck'}}>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-md-3 text-right control-label col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="description" placeholder="short description">{{$post->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-md-3 text-right control-label col-form-label">Content</label>
                        <div class="col-sm-9">
                            <textarea id="content_post" class="form-control" name="content" rows="20"> {{$post->content}}</textarea>
                            @if($errors->has('content'))
                                <div class="error" style="color: red">{{ $errors->first('content') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 text-right control-label col-form-label">Select Profile avatar : </label>
                        <div class="col-md-8">
                            <img src="{{asset('storage/'.$post->avatar)}}" alt="">
                            <input type="file" name="avatar" id="avatar" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-3">

    </div>
@stop
@push('scripts')
    <script>
        tinymce.init({

            selector: '#content_post',
            mages_upload_credentials: true,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"

            ],
            toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
            toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
            relative_urls: false,
            external_filemanager_path:"{{asset('/')}}filemanager/",

            filemanager_title:"Responsive Filemanager" ,
            external_plugins: {

                "filemanager": "{{asset('filemanager/plugin.min.js')}}",
                "responsivefilemanager": "{{asset('tinymce/plugins/responsivefilemanager/plugin.min.js')}}",
            },



        });
    </script>
@endpush
