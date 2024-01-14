@extends('dashboard.layouts.app')
@section('body')
<style>
    th{
        text-align: center !important;
    }
    td{
        text-align: center;
    }
    .table>:not(:last-child)>:last-child>* {
    border-bottom-color: inherit;
    text-align: center !important;
}
</style>
<!--toolbar start--->
<div id="kt_app_toolbar" class="app-toolbar  pt-0 pb-10 " style="height: 60px;margin:0px; align-item:center;">

    <!--begin::Toolbar container-->
<div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex align-items-stretch ">
    <!--begin::Toolbar wrapper-->
<div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">


<!--begin::Page title-->
<div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
<!--begin::Title-->
<h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
Products
    </h1>
<!--end::Title-->

    <!--begin::Breadcrumb-->
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                    <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                            <a href="/metronic8/demo39/../demo39/index.html" class="text-muted text-hover-primary">
                        Home                            </a>
                                    </li>
                        <!--end::Item-->
                            <!--begin::Item-->
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-500 w-5px h-2px"></span>
            </li>
            <!--end::Item-->

                    <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                            Apps                                            </li>
                        <!--end::Item-->
                            <!--begin::Item-->
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-500 w-5px h-2px"></span>
            </li>
            <!--end::Item-->

                    <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                            eCommerce                                            </li>
                        <!--end::Item-->
                            <!--begin::Item-->
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-500 w-5px h-2px"></span>
            </li>
            <!--end::Item-->

                    <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                            Catalog                                            </li>
                        <!--end::Item-->

            </ul>
<!--end::Breadcrumb-->
</div>
<!--end::Page title-->
<!--begin::Actions-->
<div class="d-flex align-items-center gap-2 gap-lg-3">
<a href="#" class="btn btn-flex btn-outline btn-color-gray-700 btn-active-color-primary bg-body h-40px fs-7 fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
    Add Member
</a>

<a href="#" class="btn btn-flex btn-primary h-40px fs-7 fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">
    New Campaign
</a>
</div>
<!--end::Actions-->
</div>
<!--end::Toolbar wrapper-->        </div>
<!--end::Toolbar container-->
</div>

<!--toolbar end-->

<!--content start-->
<div id="kt_app_content" class="app-content  flex-column-fluid ">


    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container  container-fluid ">
        <!--begin::Products-->
<div class="card card-flush">
<!--begin::Card header-->
<div class="card-header align-items-center py-5 gap-2 gap-md-5">
    {{-- <!--begin::Card title-->
    <div class="card-title">
        <!--begin::Search-->
        <div class="d-flex align-items-center position-relative my-1">
            <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>                <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product">
        </div>
        <!--end::Search-->
    </div>
    <!--end::Card title--> --}}

    <!--begin::Card toolbar-->
    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
        {{-- <div class="w-100 mw-150px">
            <!--begin::Select2-->
            <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status" data-select2-id="select2-data-7-b7es" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                <option data-select2-id="select2-data-9-ot4v"></option>
                <option value="all">All</option>
                <option value="published">Published</option>
                <option value="scheduled">Scheduled</option>
                <option value="inactive">Inactive</option>
            </select>
            <!--end::Select2-->
        </div> --}}

        {{-- <!--begin::Add product-->
        <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-products">
            Add Product
        </button> --}}

<!---model start---->
@include('dashboard.pages.product-model')
<!----model end------>
        <!--end::Add product-->
    </div>
    <!--end::Card toolbar-->
</div>
<!--end::Card header-->

<!--begin::Card body-->
<div class="card-body pt-0">

<!--begin::Table-->
<div id="kt_ecommerce_products_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
 <div class="table-responsive">
<!--error message display start--->
@if (session()->has('message'))
<div class="alert alert-success"  role="alert">
 {{ session()->get('message') }}
 <button type="" class="close" data-dismiss="alert" aria-hidden="true">x</button>
</div>

@endif

<!--error message display end--->
<!--begin::Wrapper-->
<div class="d-flex flex-stack mb-5"  style="margin-bottom: 300px;">
    <!--begin::Search-->
    <div class="d-flex align-items-center position-relative my-1">
        <span style="margin-left:1.5rem; position: absolute;"><i class="fas fa-search"></i></span>
        <input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers"/>
    </div>
    <!--end::Search-->

    <!--begin::Toolbar-->
    <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
        <!--begin::Filter-->
        <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="tooltip" title="Coming Soon">
            <i class="fas fa-filter"></i>
            Filter
        </button>
        <!--end::Filter-->

        <!--begin::Add customer-->
        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-products">
            <i class="fas fa-plus"></i>
            Add Products
        </button> --}}

        <button type="button" class="btn btn-primary" onClick="add()" href="javascript:void(0)">
            <i class="fas fa-plus"></i>
            Add Products
        </button>
        <!--end::Add customer-->

         <!--begin::Add product-->

    </div>
    <!--end::Toolbar-->

    <!--begin::Group actions-->
    <div class="d-flex justify-content-end align-items-center d-none" data-kt-docs-table-toolbar="selected">
        <div class="fw-bolder me-5">
            <span class="me-2" data-kt-docs-table-select="selected_count"></span> Selected
        </div>

        <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" title="Coming Soon">
            Selection Action
        </button>
    </div>
    <!--end::Group actions-->
</div>
<!--end::Wrapper-->

<!--begin::Datatable-->
<table id="product-datatable" class="data-table   table align-middle table-row-dashed fs-6 gy-5">
    <thead>
    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
        <th class="w-10px pe-2">
            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_datatable_example_1 .form-check-input" value="1"/>
            </div>
        </th>
        <th>No</th>
        <th>Product Name</th>
        <th>Image</th>
        <th>Prize</th>
        <th>Quantity</th>
        <th class="text-end min-w-100px">Actions</th>
    </tr>
    </thead>
    {{-- <tbody class="text-gray-600 fw-bold">
        <tr class="even">
            <td class="dtr-control">
            <div class="form-check form-check-sm form-check-custom form-check-solid">
                <input class="form-check-input" type="checkbox" value="147">
            </div>
            </td>
            <td class="sorting_1" style="">1</td>
            <td>watch</td>
            <td>image</td>
            <td style="">$50</td>
            <td data-filter="mastercard" style="">10</td>

            <td class="" style="">
            <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                Actions
                <span class="svg-icon svg-icon-5 m-0">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                            <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
                        </g>
                    </svg>
                </span>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3" data-kt-docs-table-filter="edit_row">
                        Edit
                    </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3" data-kt-docs-table-filter="delete_row">
                        Delete
                    </a>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::Menu-->
        </td>
    </tr>

    </tbody> --}}
</table>
<!--end::Datatable-->



</div>
<!--end::Content container-->
</div>
<script src="{{ asset('dashboard/product/product.js') }}"></script>
@include('dashboard.pages.productajax')
@endsection
