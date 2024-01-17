@extends('admin.layout.app')
@section('body')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Products</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>


                               <!--model button--->
                            <div class="">
                          <a class="btn btn-success" onClick="add()" href="javascript:void(0)"> Create product</a>
                            </div>



                             @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert" id="alert">
                    <p>{{ $message }}</p>
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                </div>
            @endif
                      <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                               <!--database tabel--->

                               <table class="table table-bordered table-hover table-striped dataTable " id="product-datatable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" class="sorting sorting_desc" tabindex="0" aria-controls="product-datatable" rowspan="1" colspan="1" aria-sort="descending" aria-label="Id: activate to sort column ascending" style="width: 14.6667px;">Id</th>
                                        <th scope="col" class="sorting" tabindex="0" aria-controls="product-datatable" rowspan="1" colspan="1" aria-label="Product Name: activate to sort column ascending" style="width: 59.6667px;">Product Name</th>
                                        <th scope="col" class="sorting" tabindex="0" aria-controls="product-datatable" rowspan="1" colspan="1" aria-label="Product Image: activate to sort column ascending" style="width: 59.6667px;">Product Image</th>
                                        <th scope="col" class="sorting" tabindex="0" aria-controls="product-datatable" rowspan="1" colspan="1" aria-label="Quantity: activate to sort column ascending" style="width: 65.6667px;">Quantity</th>
                                        <th scope="col" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Action" style="width: 48.6667px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                               </table>

                            </div>
                        </div>
                    </div>
                    </div>
                </main>
                {{-- <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer> --}}

                @include('admin.pages.product-model')

                @include('dashboard.pages.productajax')
            </div>
       @endsection
