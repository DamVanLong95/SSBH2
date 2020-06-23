    @extends('admin.layouts.master')
    @section('styles')
        <style>
            .avatar {
                vertical-align: middle;
                width: 100px;
                height: 50px;
                border-radius: 50%;
            }
            .col-sm-3 {
                margin-left: 15px;
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
                                        <a class="btn btn-warning" href="{{ route('companies.export') }}">Export data</a>
                                    </div>
                                </div>
                                <table class="table table-bordered" id="table">
                                    <thead>
                                    <tr>
                                        <th><strong>ID</strong> </th>
                                        <th> <strong>Logo</strong> </th>
                                        <th><strong>Tên doanh nghiệp</strong> </th>
                                        <th><strong>Đường dẫn ảnh</strong> </th>
                                        <th><strong>Loại doanh nghiệp</strong></th>
                                        <th >Thời gian tạo</th>
                                        <th >Thao tác</th>
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
                                    <label class="control-label col-md-4" ><strong>Name</strong>  </label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" id="name" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4"><strong> Select Profile Image</strong> </label>
                                    <div class="col-md-8">
                                        <img src="" alt="" id="logo" name="logo">
                                        <input type="file" name="file" id="file" class="form-control" />
                                        <span id="store_image"></span>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label col-md-6" ><strong>Loại doanh nghiệp </strong>  </label>
                                   
                                    <div class="col-sm-3">
                                        <label for="" style="margin-left:15px">Phi nhân thọ</label>  
                                        <input type="checkbox" class="checkmark" value="3" id="checkmark_3" name="classify[]">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="" style="margin-left:15px">Nhân thọ</label>  
                                        <input type="checkbox" class="checkmark" value="4" id="checkmark_4" name="classify[]">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="" style="margin-left:15px" >Phí rẻ</label>
                                        <input type="checkbox" class="checkmark" value="1" id="checkmark_1" name="classify[]" >
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="" style="margin-left:15px"> Bồi thường tốt</label>  
                                        <input type="checkbox" class="checkmark" value="2" id="checkmark_2" name="classify[]">
                                    </div>
                                </div>
                                <div class="form-group" align="center">
                                    <input type="hidden" name="id" id="action" value="" />
                                    <button type="button" class="btn btn-outline-secondary reset">Reset</button>
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
                        {data: 'logo', name: 'logo'},
                        {data: 'name', name: 'name'},
                        {data: 'url', name: 'url'},
                        {data: 'classify', name: 'classify'},
                        {data: 'created_at', name: 'created_at'},
                        {data:'action', name:'action',orderable: false, searchable: false},
                    ],
                    "order": [[1, 'asc']]
                });
            });
            $('#add_new').click(function(){
                $('.modal-title').text("Add New Record");
                $('#action_button').val("Add");
                $('#formdata').trigger("reset");
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
                            toastr.success(data.message);
                        }

                    });
                });
            });
            $(document).on('click','.edit',function(){
                var company_id= $(this).data('id');
                var url = "{{route('company.edit')}}"+ '/' + company_id;
                $.get(url , function (data) {
                    //success data
                    // console.log(data);
                    $('#checkmark_'+data.classify+'').prop('checked',true);
                    $path = "{{asset('storage/')}}"+ '/'+data.logo;
                    $("#logo").attr("src", $path);
                    $('#name').val(data.name);
                    $('#action').val(data.id);
                    $('#action_button').val("update");
                    $('#formdata').modal('show');
                })
               
            });
            $('#sample_form').submit(function(event) {
                event.preventDefault();
                if($('#action_button').val() == 'Add'){
                    var formdata = new FormData($(this)[0]);
                    // console.log(formdata);
                    $.ajax({
                        type: 'POST',
                        url: "{{route('company.store')}}",
                        data: formdata,
                        processData: false,
                        contentType: false,
                        success: function(data) {
                            setTimeout(function(){
                                $('#table').DataTable().ajax.reload();
                                $('#formdata').modal('hide');
                            }, 100);
                            toastr.success(data.message);
                            // location.reload();

                        }
                    });
                }
                
                if($('#action_button').val() == 'update'){
                    var id = $('#action').val();
                    var formdata = new FormData($(this)[0]);

                    $.ajax({
                        type: 'POST',
                        url: "{{route('company.update')}}"+ '/' + id,
                        data: formdata,
                        processData: false,
                        contentType: false,
                        success: function(data) {
                            setTimeout(function(){
                                $('#table').DataTable().ajax.reload();
                                $('#formdata').modal('hide');
                                toastr.success(data.message);
                            }, 100);
                        
                        }
                    });
                }
                
            });
        </script>
        <script >
            $(document).ready(function(){
                // $('.checkmark').click(function(){
                //     const checkboxes = document.getElementsByClassName("checkmark");
                //     var clicked = $(this);
                //     if(clicked.val() == 3 ){
                //         console.log(checkboxes);
                //         checkboxes[1].disabled = true;
                //     }else if(clicked.val() == 4 ){
                //         checkboxes[0].disabled = true;
                //         checkboxes[3].disabled = true;
                //         checkboxes[2].disabled = true;

                //     }
                // });
                var checkmark = document.getElementsByClassName('checkmark');
                for(var i=0; i<checkmark.length; i++){
                    checkmark[i].addEventListener('click', check);
                }
                var resetButtons = document.getElementsByClassName('reset');

                // Loop through each reset buttons to bind the click event
                for(var i=0; i<resetButtons.length; i++){
                    resetButtons[i].addEventListener('click', resetForm);
                }
            });
            function check(e){
                const checkboxes = document.getElementsByClassName("checkmark");
                 var clicked = $(this);
                    if(clicked.val() == 3 ){
                        checkboxes[1].disabled = true;
                    }else if(clicked.val() == 4 ){
                        checkboxes[0].disabled = true;
                        checkboxes[3].disabled = true;
                        checkboxes[2].disabled = true;

                    }
            }
            function resetForm(event){

                event.preventDefault();

                var form = event.currentTarget.form;
                var inputs = form.querySelectorAll('input');

                inputs.forEach(function(input, index){
                    // input.value = null;
                    input.disabled = false;
                    input.checked = false;
                    $('#action_button').val("Add");
                });

            }
        </script>
    @endpush
