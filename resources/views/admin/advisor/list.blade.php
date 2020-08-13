@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Quản lý tư vấn viên</h5>
            <a type="button" href="{{route('advisor.create')}}" class="btn btn-success btn-lg" >Thêm mới</a>
            <div class="table-responsive">
                <table  class="display table  " cellspacing="0" width="100%" id="advisor">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th><h4>Họ và tên</h4></th>
                        <th><h4>Avatar</h4></th>
                        <th><h4>Email</h4></th>
                        <th><h4>Công việc</h4></th>
                        <th><h4>Quá trình công tác</h4></th>
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
            $('#advisor').dataTable({
                "processing": true,
                "serverSide": true,
                "searching": true, 
                    ajax      :{
                        url:"{{route('advisors.datatable')}}",
                    },
                    columns: [
                        {data: 'id', name: 'id'},
                        {data: 'fullname', name: 'fullname'},
                        {data: 'avatar', name: 'avatar'},
                        {data:'email',name:'email'},
                        {data: 'work', name: 'work'},
                        {data: 'working_process', name: 'working_process'},
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
                var url = "{{route('advisor.destroy', ['id' => ''])}}/"+emp_id;
                $.ajax({
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    url:url ,
                    method: 'DELETE', 
                    success:function(data)
                    {
                        setTimeout(function(){
                            $('#formModal').modal('hide');
                            $('#advisor').DataTable().ajax.reload();
                        }, 100);
                    }

                });
            });
        });

    </script>

@endpush
