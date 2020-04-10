@extends('admin.layouts.master')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-body">
                <h3 class="card-title">Import data</h3>
                <div class="card-body ">
                    <form action="{{route('finance.import')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row ">
                            <label for="title" class="col-md-3 text-right control-label col-form-label">Select file </label>
                            <div class="col-md-9 row" >
                                <input type="file" name="import_file" class="form-control col-sm-3">
                                <button type="submit" class="btn btn-primary">Import data</button>
                                <a class="btn btn-warning" href="{{ route('finance.export') }}">Export data</a>
                            </div>
                        </div>
                    </form>
                    <table class="table table-bordered" id="table">
                        <thead>
                            <tr>
                                <th>D</th>
                                <th>D</th>
                                <th>D</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
