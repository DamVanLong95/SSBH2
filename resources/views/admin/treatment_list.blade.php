@extends('admin.layouts.master')
@section('styles')
<style>
#loader {
    border: 16px solid #f3f3f3;
    border-radius: 50%;
    border-top: 16px solid #3498db;
    width: 200px;
    height: 200px;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
    margin-left: 250px;
    margin-top: 250px;
}

</style>

@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Basic Datatable</h5>
            <a type="button" href="{{route('treatment.create')}}" class="btn btn-success btn-lg" >Add new</a>
            <div class="table-responsive">
                <table  class="table table-striped table-bordered" id="treatment_table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th><h4>Tiêu đề</h4></th>
                        <th><h4>Avatar</h4></th>
                        <th><h4>Avatar cover</h4></th>
                        <th><h4>Loai bảo hiểm</h4></th>
                        <th><h4>Action</h4></th>
                    </tr>
                    </thead>

                </table>
            </div>
            <!-- BEGIN MODAL -->
            <div id="formModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2 class="modal-title">Confirmation</h2>
                        </div>
                        <div class="modal-body">
                            <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MODAL -->

        </div>
    </div>
@stop
@push('scripts')
    <script type="text/javascript">
        $( document ).ready(function() {
            $('#treatment_table').dataTable({
                processing: true,
                language: {
                    processing: "<div id='loader'>Nghẽn mạng!</div>"
                },
                serverSide: true,
                    ajax      :{
                        url:"{{route('treatment.datatable')}}",
                    },
                    columns: [
                        {data: 'id', name: 'id'},
                        {data: 'title', name: 'title'},
                        {data:'slide',name:'slide'},
                        {data: 'img_detail', name: 'img_detail'},
                        {data: 'type', name: 'type'},
                        {data:'action', name:'action',orderable: false, searchable: false},
                    ],
                    "order": [[1, 'asc']]
                });
            });
    </script>

@endpush
