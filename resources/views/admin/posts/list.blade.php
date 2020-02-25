@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Basic Datatable</h5>
            <a type="button" href="{{route('post.create')}}" class="btn btn-success btn-lg" >Add new</a>
            <div class="table-responsive">
                <table  class="table table-striped table-bordered" id="posts_table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th><h4>Author</h4></th>
                        <th><h4>title</h4></th>
                        <th><h4>Content</h4></th>
                        <th><h4>Published</h4></th>
                        <th><h4>Create At</h4></th>
                        <th><h4>Avatar</h4></th>
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
            $('#posts_table').dataTable({
                processing: true,
                serverSide: true,
                    ajax      :{
                        url:"{{route('posts.getData')}}",
                    },
                    columns: [
                        {data: 'id', name: 'id'},
                        {data: 'author_id', name: 'author_id'},
                        {data: 'title', name: 'title'},
                        {data: 'content', name: 'content'},
                        {data:'is_published', name : 'is_published'},
                        {data: 'created_at', name: 'created_at'},
                        {data: 'avatar', name: 'avatar'},
                        {data:'action', name:'action',orderable: false, searchable: false},
                    ],
                    "order": [[1, 'asc']]
                });
            });
        ///XOA RECORD
        $(document).on('click','.delete',function(){
            var emp_id = $(this).data('id');
            $('#formModal').modal('show');
            $('#ok_button').on('click',function(){
                console.log(emp_id);
                $.ajax({
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    url:"{{route('posts.destroy')}}"+'/'+emp_id,
                    method:'post',
                    success:function(data)
                    {
                        setTimeout(function(){
                            $('#formModal').modal('hide');
                            $('#posts_table').DataTable().ajax.reload();
                        }, 100);
                    }

                });
            });
        });

    </script>

@endpush
