<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Add this to your HTML file's head section -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-rn9ekH9OI0TcL7kRSZXxgTZXhJW6Yb3pWu9nEL3uM/6enDqJ2QeMYjg7A2FPga3I" crossorigin="anonymous">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link  href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <title>Admin Dashboard Panel</title>
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
        .dataTable{
        width: 100%;
    }
    </style>
</head>
<body>
    <nav class="side-bar">
        <div class="logo-name">
            <div class="logo-image">
                <img src="{{ asset('admin/Images/logo.png') }}" alt="">
            </div>

            <span class="logo_name">CodingLab</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Content</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Analytics</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Like</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Comment</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Share</span>
                </a></li>
            </ul>

            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>

            <img src="{{ asset('admin/Images/profile.jpg') }}" alt="">
        </div>

        <div class="dash-content">
<!----main content--->
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
           <button type="" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            </div>
        @endif
        <div class="card-body">
            <table class="table table-bordered" id="product-datatable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Tax</th>
                        <th>Action</th>
                    </tr>
                </thead>

            </table>
        </div>
    </div>


@include('dashboard.pages.product-model')
@include('dashboard.pages.productajax')



<!---main content end---->


        </div>
    </section>

    <script src="{{ asset('admin/script.js') }}"></script>
    <!-- Add these scripts just before the closing </body> tag -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-GLhlTQ8iK2lb7yoUZx3Xp8Ft5auel4FpT1Jo16uFZs/rfE5EJ9e+8X2RvfaUbLEj" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-d7sAtIFZpz1tuMYX5x73ngYRD8f+Ol89b73c4I1M4TEAxR1Me1GG2I6XRV2QaF2u" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-i1il0NUn2/JlOWYg7CYP0e9+6kBoB9vIv8POGO6azc8w6oIvRHePHVakWyDA7f9e" crossorigin="anonymous"></script>

</body>
</html>
