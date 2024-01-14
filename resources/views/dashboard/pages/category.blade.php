<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel 10 Ajax DataTables CRUD (Create Read Update and Delete) - Cairocoders</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
<link  href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<style>
    .dataTables_length{
        float: left;
    }
    .dataTables_length select{
        background-color: rgb(26, 229, 243);
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 6px ;
        padding-right: 0px;

    }
    .dataTables_length select:focus-visible{
        border: none;
    }
    .dataTables_length option{
        background-color: rgb(135, 227, 245);
        color: #fff;
        border-bottom: 2px solid #ca1212;

    }
    .dataTables_filter{
        float: right;
    }
    .dataTables_info{
       display: flex;
       align-items: center;
       padding-top: 20px;
    }
    .dataTables_paginate{
      float: right;
      margin-top: -25px;
    }
    .paginate_button{
        background-color: rgb(10, 193, 244);
        padding: 5px 8px;
        text-decoration: none;
        color: #fff;
        cursor: pointer;
    }
    .dataTables_paginate span a{
        background-color:blue;
        border-radius: 0px;
        border-left: 1px solid #fff;
        border-right: 1px solid  #fff;
    }
</style>

</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 10 Ajax DataTables CRUD (Create Read Update and Delete) </h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" onClick="add()" href="javascript:void(0)"> Create Employee</a>
            </div>
        </div>
    </div>

     @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    <p>{{ $message }}</p>
               <button type="" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                </div>
            @endif
    <div class="card-body">
        <table class="table table-bordered" id="ajax-crud-datatable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>main category</th>
                    <th>sub category</th>
                    <th>product category</th>
                    <th>Action</th>
                </tr>
            </thead>

        </table>
    </div>
</div>
 
<!-- boostrap employee model -->
<div class="modal fade" id="employee-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EmployeeModal">Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" id="EmployeeForm" name="EmployeeForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    
                     <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">main category</label>
                                <div class="col-sm-12">
                                <input type="text" class="form-control" id="main_category" name="main_category" placeholder="Enter sub_category" maxlength="50" required="">
                            </div>
                        </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">sub category</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="sub_category" name="sub_category" placeholder="Enter sub_category" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">product category</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="product_category" name="product_category" placeholder="Enter sub_category" required="">
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10"><br/>
                        <button type="submit" class="btn btn-primary" id="btn-save">Save changes</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
<!-- end bootstrap model -->
<script type="text/javascript">
$(document).ready( function () {
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
 
    $('#ajax-crud-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('ajax-crud-datatable') }}",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'main_category', name: 'main_category' },
            { data: 'sub_category', name: 'sub_category' },
            { data: 'product_category', name: 'product_category' },
            { data: 'action', name: 'action', orderable: false},
        ],
        order: [[0, 'desc']]
//          order: [[0, 'asc']]

    });
});
 
function add(){
    $('#EmployeeForm').trigger("reset");
    $('#EmployeeModal').html("Add Employee");
    $('#employee-modal').modal('show');
    $('#id').val('');
}  
     
function editFunc(id){
    $.ajax({
        type:"POST",
        url: "{{ url('category-edit') }}",
        data: { id: id },
        dataType: 'json',
        success: function(res){
            $('#EmployeeModal').html("Edit Employee");
            $('#employee-modal').modal('show');
            $('#id').val(res.id);
            $('#main_category').val(res.main_category);
            $('#sub_category').val(res.sub_category);
            $('#product_category').val(res.product_category);
        }
    });
} 
 
function deleteFunc(id){
    if (confirm("Delete Record?") == true) {
        var id = id;
        // ajax
        $.ajax({
            type:"POST",
            url: "{{ url('category-delete') }}",
            data: { id: id },
            dataType: 'json',
            success: function(res){
                var oTable = $('#ajax-crud-datatable').dataTable();
                oTable.fnDraw(false);
            }
        });
    }
}
 
$('#EmployeeForm').submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        type:'POST',
        url: "{{ url('category-store')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
            $("#employee-modal").modal('hide');
            var oTable = $('#ajax-crud-datatable').dataTable();
            oTable.fnDraw(false);
            $("#btn-save").html('Submit');
            $("#btn-save"). attr("disabled", false);
        },
        error: function(data){
            console.log(data);
        }
    });


});
</script>

<script>
    // Close button for success message
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('.close-message').addEventListener('click', function () {
            document.getElementById('success-message').style.display = 'none';
        });
    });
</script>
</body>
</html>
