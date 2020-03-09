@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><h3>Import data into table <a href="">{{$table}}</a></h3></h5>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"><h3>Table(bang)</h3></th>
                        <th scope="col"><h3>Action</h3></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href=""><h3>{{$table}}</h3></a></td>
                        <td>
                            <form action="{{route('users.import')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <input type="file" name="import_file" class="form-control col-sm-3">
                                    <button type="submit" class="btn btn-primary">Import data</button>&nbsp;
                                    <a type="button" href="{{route('users.export')}}" class="btn btn-success">Export data</a>
                                </div>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">List</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th >Created_at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user['name']}}</td>
                                <td>{{$user['email']}}</td>
                                <td>{{$user['created_at']}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
