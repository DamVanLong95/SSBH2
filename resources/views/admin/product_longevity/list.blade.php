@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"> Danh sach</h5>
            <a type="button" href="{{route('product_longevity.create')}}" class="btn btn-success btn-lg" >Add new</a>
           {{--<a class="btn btn-warning" href="{{ route('product.export') }}">Export data</a> --}}  
            <div class="table-responsive">
                <table  class="table table-striped table-bordered" id="product_table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th><h4>Ảnh</h4></th>
                        <th><h4>Doanh nghiệp</h4></th>
                        <th><h4>Tên sản phẩm</h4></th>
                        <th><h4>Đường dẫn ảnh</h4></th>
                        <th><h4>Loại sản phẩm</h4></th>
                        <th><h4>Hành động</h4></th>
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
            $('#product_table').dataTable({
                processing: true,
                serverSide: true,
                ajax      :{
                        url:"{{route('product_longevity.datatable')}}",
                    },
                    columns: [
                        {data: 'id', name: 'id'},
                        {data: 'url', name: 'url'},
                        {data:'company_id',name:'company_id'},
                        {data: 'name', name: 'name'},
                        {data: 'path', name: 'path'},
                        {   data: 'classify_id',
                            name: 'classify_id',
                        },
                        {data:'action', name:'action',orderable: false, searchable: false},
                    ],
                    "order": [[1, 'asc']]
                });
            });
        ///XOA RECORD
        $(document).on('click','.delete',function(){
                var product_id = $(this).data('id');
                $('#formModal').modal('show');
                $('#ok_button').on('click',function(){
                    $.ajax({
                        headers: {
                            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                        },
                        url:"product_longevity/ "+product_id ,
                        type: 'delete', 
                        success:function(data)
                        {
                            setTimeout(function(){
                                $('#formModal').modal('hide');
                                $('#product_table').DataTable().ajax.reload();
                            }, 100);
                        }

                    });
                });
            });

    </script>

@endpush
