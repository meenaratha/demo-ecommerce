<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
<link  href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<style>
    .dataTables_length{
        float: left;
        margin-bottom: 30px;
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
        margin-bottom: 30px;
        height: 30px;


    }
    .dataTables_filter label{
        background-color: blue;
        padding: 0px 6px;
        padding-right: 0px;
        color: #fff;
        height: 40px;
        line-height: 30px;
    }
    .dataTables_filter input[type=search]{
        background-color: gainsboro;
        border: 1px solid rgb(173, 173, 173);
        outline-offset: 2px solid rgb(173, 173, 173);
        -webkit-appearance: none;
        height: 40px;
    }
    .dataTables_filter input[type=search]:focus-visible{
        border: rgb(173, 173, 173);
        outline-offset: 0px !important;
        -webkit-appearance: none !important;
    }
    .dataTables_filter input[type=search]:hover{
        outline-offset: 0px;
       -webkit-appearance:none;
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
    @media only screen and (max-width:568px){
        .dataTables_paginate{
      float:none;
      margin-top: 10px;
    }
    .dataTables_filter{
        float: left;
        margin-bottom: 30px;
    }
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
    .dataTable{
        width: 100% !important;
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
                        <a class="btn btn-success" onClick="add()" href="javascript:void(0)"> Create product</a>
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    <p>{{ $message }}</p>
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                </div>
            @endif
            <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered table-hover table-striped"   id="product-datatable">
                    <thead  class="thead-dark" >
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Image</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                </table>
            </div>
            </div>
        </div>


    @include('dashboard.pages.product-model')
    @include('dashboard.pages.productajax')
</body>
</html>
