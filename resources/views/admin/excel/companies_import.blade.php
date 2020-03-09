    @extends('admin.layouts.master')
    @section('styles')
        <style>
            .avatar {
                vertical-align: middle;
                width: 100px;
                height: 50px;
                border-radius: 50%;
            }
        </style>
    @stop
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
                                <div class="form-group row ">
                                    <div class="col-md-9 row" >
                                        <button type="" name="add_new" id="add_new" class="btn btn-primary">Add new</button>
                                    </div>
                                </div>
                                <table class="table table-bordered" id="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Logo</th>
                                        <th >Created At</th>
                                        <th >Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
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
            <!-- EDIT MODAL -->
            <div id="formdata" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit  Record</h4>
                        </div>
                        <div class="modal-body">
                            <span id="form_result"></span>
                            <form method="POST" action="" id="sample_form"  action="" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label col-md-4" > Name : </label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" id="name" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Select Profile Image : </label>
                                    <div class="col-md-8">
                                        <input type="file" name="file" id="file" />
                                        <span id="store_image"></span>
                                    </div>
                                </div>
                                <div class="form-group" align="center">
                                    <input type="hidden" name="id" id="action" value="" />
                                    <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Update" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @stop
    @push('scripts')
        <script type="text/javascript">
            $( document ).ready(function() {
                $('#table').dataTable({
                    processing: true,
                    serverSide: true,
                    ajax      :{
                        url:"{{route('excel.getData')}}",
                    },
                    columns: [
                        {data: 'id', name: 'id'},
                        {data: 'name', name: 'name'},
                        {data: 'logo', name: 'logo'},
                        {data: 'created_at', name: 'created_at'},
                        {data:'action', name:'action',orderable: false, searchable: false},
                    ],
                    "order": [[1, 'asc']]
                });
            });
            $('#add_new').click(function(){
                $('.modal-title').text("Add New Record");
                $('#action_button').val("Add");
                $('#formdata').modal('show');
            });
            $(document).on('click','.delete',function(){
                var emp_id = $(this).data('id');
                $('#formModal').modal('show');
                $('#ok_button').on('click',function(){
                    $.ajax({
                        headers: {
                            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                        },
                        url:"{{route('company.destroy')}}"+'/'+emp_id,
                        method:'POST',
                        success:function(data)
                        {
                            setTimeout(function(){
                                $('#formModal').modal('hide');
                                $('#table').DataTable().ajax.reload();
                            }, 100);
                        }

                    });
                });
            });
            $(document).on('click','.edit',function(){
                var company_id= $(this).data('id');
                var url = "{{route('company.edit')}}"+ '/' + company_id;
                $.get(url , function (data) {
                    //success data
                    $('#name').val(data.name);
                    $('#action').val(data.id);
                })
                $('#formdata').modal('show');
            });
            $('#sample_form').submit(function(event) {
                event.preventDefault();
                if($('#action_button').val() == 'Add'){
                    var formdata = new FormData($(this)[0]);
                    $.ajax({
                        type: 'POST',
                        url: "{{route('company.store')}}",
                        data: formdata,
                        processData: false,
                        contentType: false,
                        success: function(data) {
                            // console.log(data);
                            setTimeout(function(){
                                $('#table').DataTable().ajax.reload();
                                $('#formdata').modal('hide');
                            }, 100);
                            toastr.success(data.message);

                        }
                    });
                }
                var id = $('#action').val();
                var formdata = new FormData($(this)[0]);
                console.log(formdata);
                $.ajax({
                    type: 'POST',
                    url: "{{route('company.update')}}"+ '/' + id,
                    data: formdata,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        // console.log(data);
                            setTimeout(function(){
                                $('#table').DataTable().ajax.reload();
                                $('#formdata').modal('hide');
                            }, 100);
                        toastr.success(data.message);
                    }
                });
            });
        </script>

    @endpush
