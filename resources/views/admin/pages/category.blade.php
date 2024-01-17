@extends('admin.layout.app')
@section('body')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

                        <div class="col-lg-12 margin-tb">
                <h1 class="mt-4">Products</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Products</li>
                </ol>

                 <!--model button--->
                 <div class="">
              <a class="btn btn-success" onClick="add()" href="javascript:void(0)">Add Category</a>
                </div>
                        </div>


                     @if ($message = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    <p>{{ $message }}</p>
                               <button type="" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                </div>
                            @endif
                            <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    DataTable Category
                                </div>
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
                            </div>

                @include('admin.pages.category-modal')
                @include('admin.pages.category-crud-ajax')


        </div>
    </main>
</div>
@endsection

