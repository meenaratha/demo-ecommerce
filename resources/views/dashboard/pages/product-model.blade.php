
<!--model start--->
<div class="modal bg-white fade" tabindex="-1" id="product-modal">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content shadow-none">
            <div class="modal-header">
               <h2 id="ProductTittle">Add Product Details</h2>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times" style="font-size: 25px;"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">

<div id="kt_app_content" class="app-content  flex-column-fluid ">
<!---validation error start-->
<div class="errMsgContainer">

</div>


<!---validation error end-->


    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container  container-fluid ">
        <!--begin::Form-->
<form id="ProductForm" name="ProductForm"  action="javascript:void(0)" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" id="id">
    <!--begin::Aside column-->
<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
    <!--begin::Thumbnail settings-->
<div class="card card-flush py-4">
<!--begin::Card header-->
<div class="card-header">
    <!--begin::Card title-->
    <div class="card-title">
        <h2>Product Image</h2>
    </div>
    <!--end::Card title-->
</div>
<!--end::Card header-->

<!--begin::Card body-->
<div class="card-body text-center pt-0">
    <!--begin::Image input-->
                <!--begin::Image input placeholder-->
        <style>
            .image-input-placeholder {
                background-image: url('{{ asset('dashboard/assets/media/svg/files/blank-image.svg') }}');
            }

            [data-bs-theme="dark"] .image-input-placeholder {
                background-image: url('{{ asset('dashboard/assets/media/svg/files/blank-image.svg') }}');
            }
        </style>
        <!--end::Image input placeholder-->

    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
        <!--begin::Preview existing avatar-->
                        <div class="image-input-wrapper w-150px h-150px"></div>
                    <!--end::Preview existing avatar-->

        <!--begin::Label-->
        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">

            <i class="fas fa-pencil-alt"></i>
            <!--begin::Inputs-->
            <input type="file" id="productimage" name="productimage" accept=".png, .jpg, .jpeg">
            <input type="hidden" name="productimage_remove">
            <!--end::Inputs-->
        </label>
        <!--end::Label-->

        <!--begin::Cancel-->
        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
            <i class="fas fa-times"></i>
          </span>
        <!--end::Cancel-->

        <!--begin::Remove-->
        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
            <i class="fas fa-times"></i>          </span>
        <!--end::Remove-->
    </div>
    <!--end::Image input-->

    <!--begin::Description-->
    <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
    <!--end::Description-->
</div>
<!--end::Card body-->
</div>
<!--end::Thumbnail settings-->
    <!--begin::Status-->
<div class="card card-flush py-4">
<!--begin::Card header-->
<div class="card-header">
    <!--begin::Card title-->
    <div class="card-title">
        <h2>Status</h2>
    </div>
    <!--end::Card title-->

    <!--begin::Card toolbar-->
    <div class="card-toolbar">
        <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
    </div>
    <!--begin::Card toolbar-->
</div>
<!--end::Card header-->

<!--begin::Card body-->
<div class="card-body pt-0">
    <!--begin::Select2-->
    <select  id="status" name="status"  class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select" data-select2-id="select2-data-kt_ecommerce_add_product_status_select" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
        <option></option>
        <option value="published" selected="" data-select2-id="select2-data-8-8qhg">Published</option>
        <option value="draft">Draft</option>
        <option value="scheduled">Scheduled</option>
        <option value="inactive">Inactive</option>
    </select>
    <!--end::Select2-->

    <!--begin::Description-->
    <div class="text-muted fs-7">Set the product status.</div>
    <!--end::Description-->

    <!--begin::Datepicker-->
    <div class="d-none mt-10">
        <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select publishing date and time</label>
        <input class="form-control flatpickr-input" id="kt_ecommerce_add_product_status_datepicker" placeholder="Pick date &amp; time" type="text" readonly="readonly">
    </div>
    <!--end::Datepicker-->
</div>
<!--end::Card body-->
</div>
<!--end::Status-->

<!--begin::Category & tags-->
<div class="card card-flush py-4">
<!--begin::Card header-->
<div class="card-header">
    <!--begin::Card title-->
    <div class="card-title">
        <h2>Product Category</h2>
    </div>
    <!--end::Card title-->
</div>
<!--end::Card header-->

<!--begin::Card body-->
<div class="card-body pt-0">
    <!--begin::Input group-->
    <!--begin::Label-->
    <label class="form-label">Categories</label>
    <!--end::Label-->

    <!--begin::Select2-->
    <select class="form-select mb-2 select2-hidden-accessible" data-control="select2"
     data-placeholder="Select an option" data-allow-clear="true" multiple=""
     data-select2-id="select2-data-9-gkj7" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
        <option></option>
                        <option value="Computers">Computers</option>
                        <option value="Watches">Watches</option>
                        <option value="Headphones">Headphones</option>
                        <option value="Footwear">Footwear</option>
                        <option value="Cameras">Cameras</option>
                        <option value="Shirts">Shirts</option>
                        <option value="Household">Household</option>
                        <option value="Handbags">Handbags</option>
                        <option value="Wines">Wines</option>
                        <option value="Sandals">Sandals</option>
                </select>
                {{-- <span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-10-cqnu" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select mb-2" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-6c51-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-6c51-container" placeholder="Select an option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> --}}
    <!--end::Select2-->

    <!--begin::Description-->
    <div class="text-muted fs-7 mb-7">Add product to a category.</div>
    <!--end::Description-->
    <!--end::Input group-->

    <!--begin::Button-->
    <a href="/metronic8/demo39/../demo39/apps/ecommerce/catalog/add-category.html" class="btn btn-light-primary btn-sm mb-10">
        <i class="ki-outline ki-plus fs-2"></i>            Create new category
    </a>
    <!--end::Button-->

    <!--begin::Input group-->
    <!--begin::Label-->
    <label class="form-label d-block">Tags</label>
    <!--end::Label-->

    <!--begin::Input-->
            <tags class="tagify form-control mb-2 tagify--noTags tagify--empty" tabindex="-1">
        <span contenteditable="" tabindex="0" data-placeholder="​" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
            ​
    </tags>
    <input id="kt_ecommerce_add_product_tags" name="product_tag" class="form-control mb-2" value="" tabindex="-1">
    <!--end::Input-->

    <!--begin::Description-->
    <div class="text-muted fs-7">Add tags to a product.</div>
    <!--end::Description-->
    <!--end::Input group-->
</div>
<!--end::Card body-->
</div>
<!--end::Category & tags-->
    <!--begin::Weekly sales-->
<div class="card card-flush py-4">
<!--begin::Card header-->
<div class="card-header">
    <!--begin::Card title-->
    <div class="card-title">
        <h2>Weekly Sales</h2>
    </div>
    <!--end::Card title-->
</div>
<!--end::Card header-->

<!--begin::Card body-->
<div class="card-body pt-0">
    <span class="text-muted">No data available. Sales data will begin capturing once product has been published.</span>
</div>
<!--end::Card body-->
</div>
<!--end::Weekly sales-->
    <!--begin::Template settings-->
<div class="card card-flush py-4">
<!--begin::Card header-->
<div class="card-header">
    <!--begin::Card title-->
    <div class="card-title">
        <h2>Product Template</h2>
    </div>
    <!--end::Card title-->
</div>
<!--end::Card header-->

<!--begin::Card body-->
<div class="card-body pt-0">
    <!--begin::Select store template-->
    <label for="kt_ecommerce_add_product_store_template" class="form-label">Select a product template</label>
    <!--end::Select store template-->

    <!--begin::Select2-->
    <select class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select an option"
     id="kt_ecommerce_add_product_store_template" data-select2-id="select2-data-kt_ecommerce_add_product_store_template"
      tabindex="-1" aria-hidden="true" data-kt-initialized="1">
        <option></option>
        <option value="default" selected="" data-select2-id="select2-data-12-vyc4">Default template</option>
        <option value="electronics">Electronics</option>
        <option value="office">Office stationary</option>
        <option value="fashion">Fashion</option>
    </select>
    <!--end::Select2-->

    <!--begin::Description-->
    <div class="text-muted fs-7">Assign a template from your current theme to define how a single product is displayed.</div>
    <!--end::Description-->
</div>
<!--end::Card body-->
</div>
<!--end::Template settings-->    </div>
<!--end::Aside column-->

<!--begin::Main column-->
<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
    <!--begin:::Tabs-->
<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2" role="tablist">
<!--begin:::Tab item-->
<li class="nav-item" role="presentation">
    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general" aria-selected="true" role="tab">General</a>
</li>
<!--end:::Tab item-->

<!--begin:::Tab item-->
<li class="nav-item" role="presentation">
    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced" aria-selected="false" tabindex="-1" role="tab">Advanced</a>
</li>
<!--end:::Tab item-->

</ul>
<!--end:::Tabs-->
    <!--begin::Tab content-->
    <div class="tab-content">
        <!--begin::Tab pane-->
        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
            <div class="d-flex flex-column gap-7 gap-lg-10">

<!--begin::General options-->
<div class="card card-flush py-4">
<!--begin::Card header-->
<div class="card-header">
    <div class="card-title">
        <h2>PRODUCT DETAILS</h2>
    </div>
</div>
<!--end::Card header-->

<!--begin::Card body-->
<div class="card-body pt-0">
    <!--begin::Input group-->
    <div class="mb-10 fv-row fv-plugins-icon-container">
        <!--begin::Label-->
        <label class="required form-label">Product Name</label>
        <!--end::Label-->

        <!--begin::Input-->
                    <input type="text" id="product_name" name="product_name" class="form-control mb-2" placeholder="Product name" value="">
        <!--end::Input-->

        <!--begin::Description-->
        <div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
        <!--end::Description-->
    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div>
        <!--begin::Label-->
        <label class="form-label">Description</label>
        <!--end::Label-->

        <!--begin::Editor-->
        <div class="ql-toolbar ql-snow">
            <span class="ql-formats">
                <span class="ql-header ql-picker">
                    <span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-0">
                        <svg viewBox="0 0 18 18"> <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon>
                            <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon> </svg></span>
                            <span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-0">
                                <span tabindex="0" role="button" class="ql-picker-item" data-value="1"></span>
                                <span tabindex="0" role="button" class="ql-picker-item" data-value="2"></span>
                                <span tabindex="0" role="button" class="ql-picker-item ql-selected"></span>
                            </span></span>
                            <select class="ql-header" style="display: none;">
                                <option value="1"></option><option value="2"></option>
                                <option selected="selected"></option></select></span>
                                <span class="ql-formats"><button type="button" class="ql-bold">
                                    <svg viewBox="0 0 18 18">
                                         <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path>
                                         <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path> </svg></button>
                                         <button type="button" class="ql-italic"><svg viewBox="0 0 18 18">
                                            <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line>
                                            <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line>
                                            <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line> </svg></button>
                                            <button type="button" class="ql-underline"><svg viewBox="0 0 18 18">
                                                <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path>
                                                 <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect> </svg></button>
                                                </span><span class="ql-formats"><button type="button" class="ql-image"><svg viewBox="0 0 18 18">
                                                    <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect>
                                                    <circle class="ql-fill" cx="6" cy="7" r="1"></circle>
                                                    <polyline class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline> </svg></button>
                                                    <button type="button" class="ql-code-block"><svg viewBox="0 0 18 18"> <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11"></polyline>
                                                        <polyline class="ql-even ql-stroke" points="13 7 15 9 13 11"></polyline>
                                                        <line class="ql-stroke" x1="10" x2="8" y1="5" y2="13"></line> </svg></button></span></div>
                                                        {{-- <div id="kt_ecommerce_add_product_description" name="product_description" class="min-h-200px mb-2 ql-container ql-snow">
                                                            <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true" data-placeholder="Type your text here..."><p><br></p></div>
                                                            <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div><div class="ql-tooltip ql-hidden">
                                                                <a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a>

                                                                <a class="ql-action"></a><a class="ql-remove"></a></div>
                                                            </div> --}}
                                                            <textarea name="add_product_description" id="add_product_description" cols="30" rows="10" style="width:100%;"></textarea>


        <!--end::Editor-->

        <!--begin::Description-->
        <div class="text-muted fs-7">Set a description to the product for better visibility.</div>
        <!--end::Description-->
    </div>
    <!--end::Input group-->
</div>
<!--end::Card header-->
</div>
<!--end::General options-->
<!--begin::Media-->
<div class="card card-flush py-4">
<!--begin::Card header-->
<div class="card-header">
    <div class="card-title">
        <h2>Product Gallery thumpnail</h2>
    </div>
</div>
<!--end::Card header-->

<!--begin::Card body-->
<div class="card-body pt-0">
    <!--begin::Input group-->
    <div class="fv-row mb-2">
        <!--begin::Dropzone-->
        <div class="dropzone dz-clickable upload__box" id="kt_ecommerce_add_product_media">

             <!--begin::Inputs-->
             <!--end::Inputs-->
            <!--begin::Message-->
            <div class="dz-message needsclick upload__btn-box">
                <label class="upload__btn">
                <!--begin::Icon-->
                <i class="fas fa-file-upload" style="font-size: 3rem; color:#1b84ff;"></i>
                <!--end::Icon-->
                <!--begin::Info-->
                <div class="ms-4">
                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                    <span class="fs-7 fw-semibold text-gray-500">Upload up to 10 files</span>
                </div>
                <!--end::Info-->

                <input type="file" id="product_thumbnail"  name="product_thumbnail"  multiple="" data-max_length="10" class="upload__inputfile">

                </label>
            </div>

        <!-- Add this template somewhere in your HTML, preferably before the script -->
        <div class="upload__img-wrap"></div>

        </div>
        <!--end::Dropzone-->
    </div>
    <!--end::Input group-->

    <!--begin::Description-->
    <div class="text-muted fs-7">Set the product media gallery.</div>
    <!--end::Description-->
</div>
<!--end::Card header-->
</div>
<!--end::Media-->

<!--begin::Pricing-->
<div class="card card-flush py-4">
<!--begin::Card header-->
<div class="card-header">
    <div class="card-title">
        <h2>Pricing</h2>
    </div>
</div>
<!--end::Card header-->

<!--begin::Card body-->
<div class="card-body pt-0">
    <!--begin::Input group-->
    <div class="mb-10 fv-row fv-plugins-icon-container">
        <!--begin::Label-->
        <label class="required form-label">Original Price</label>
        <!--end::Label-->

        <!--begin::Input-->
        <input type="text" id="original_price" name="original_price" class="form-control mb-2" placeholder="Product price" value="">
        <!--end::Input-->

        <!--begin::Description-->
        <div class="text-muted fs-7">Set the product price.</div>
        <!--end::Description-->
    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
</div>


<!--begin::Input group-->
<div class="mb-10 fv-row fv-plugins-icon-container">
    <!--begin::Label-->
    <label class="required form-label">Discount Price</label>
    <!--end::Label-->

    <!--begin::Input-->
    <input type="text" id="discount_price" name="discount_price" class="form-control mb-2" placeholder="Product price" value="">
    <!--end::Input-->

    <!--begin::Description-->
    <div class="text-muted fs-7">Set the product price.</div>
    <!--end::Description-->
<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
</div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="fv-row mb-10">
        <!--begin::Label-->
        <label class="fs-6 fw-semibold mb-2">
            Discount Type


<span class="ms-1" data-bs-toggle="tooltip" aria-label="Select a discount type that will be applied to this product" data-bs-original-title="Select a discount type that will be applied to this product" data-kt-initialized="1">
<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>            </label>
        <!--End::Label-->

        <!--begin::Row-->
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']" data-kt-initialized="1">
            <!--begin::Col-->
            <div class="col">
                <!--begin::Option-->
                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                    <!--begin::Radio-->
                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio" id="discount_option"  name="discount_option" value="No_discount" checked="checked">
                                                </span>
                    <!--end::Radio-->

                    <!--begin::Info-->
                    <span class="ms-5">
                        <span class="fs-4 fw-bold text-gray-800 d-block">No Discount</span>
                    </span>
                    <!--end::Info-->
                </label>
                <!--end::Option-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col">
                <!--begin::Option-->
                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary  d-flex text-start p-6" data-kt-button="true">
                    <!--begin::Radio-->
                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio"  id="discount_option" name="discount_option" value="30%">
                                                </span>
                    <!--end::Radio-->

                    <!--begin::Info-->
                    <span class="ms-5">
                        <span class="fs-4 fw-bold text-gray-800 d-block">Percentage %</span>
                    </span>
                    <!--end::Info-->
                </label>
                <!--end::Option-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col">
                <!--begin::Option-->
                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                    <!--begin::Radio-->
                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                        <input class="form-check-input" type="radio" id="discount_option" name="discount_option" value="fixed_price">
                    </span>
                    <!--end::Radio-->

                    <!--begin::Info-->
                    <span class="ms-5">
                        <span class="fs-4 fw-bold text-gray-800 d-block">Fixed Price</span>
                    </span>
                    <!--end::Info-->
                </label>
                <!--end::Option-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">
        <!--begin::Label-->
        <label class="form-label">Set Discount Percentage</label>
        <!--end::Label-->

        <!--begin::Slider-->
        <div class="d-flex flex-column text-center mb-5">
            <div class="d-flex align-items-start justify-content-center mb-7">
                <span class="fw-bold fs-3x" id="kt_ecommerce_add_product_discount_label">10</span>
                <span class="fw-bold fs-4 mt-1 ms-2">%</span>
            </div>
            <div id="kt_ecommerce_add_product_discount_slider" class="noUi-sm noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-90.9091%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="1.0" aria-valuemax="100.0" aria-valuenow="10.0" aria-valuetext="10.00"><div class="noUi-touch-area"></div></div></div></div></div>
        </div>
        <!--end::Slider-->

        <!--begin::Description-->
        <div class="text-muted fs-7">Set a percentage discount to be applied on this product.</div>
        <!--end::Description-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_fixed">
        <!--begin::Label-->
        <label class="form-label">Fixed Discounted Price</label>
        <!--end::Label-->

        <!--begin::Input-->
        <input type="text" id="dicsounted_price" name="dicsounted_price" class="form-control mb-2" placeholder="Discounted price">
        <!--end::Input-->

        <!--begin::Description-->
        <div class="text-muted fs-7">Set the discounted product price. The product will be reduced at the determined fixed price</div>
        <!--end::Description-->
    </div>
    <!--end::Input group-->

    <!--begin::Tax-->
    <div class="d-flex flex-wrap gap-5">
        <!--begin::Input group-->
        <div class="fv-row w-100 flex-md-root fv-plugins-icon-container">
            <!--begin::Label-->
            <label class="required form-label">Tax Class</label>
            <!--end::Label-->

            <!--begin::Select2-->
            <select class="form-select mb-2 select2-hidden-accessible" id="tax" name="tax" data-control="select2" data-hide-search="true" data-placeholder="Select an option" data-select2-id="select2-data-13-zuzu" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                <option data-select2-id="select2-data-15-zomg"></option>
                <option value="0">Tax Free</option>
                                        <option value="Taxable Goods">Taxable Goods</option>
                                    <option value="Downloadable Product">Downloadable Product</option>
            </select>

            <!--end::Select2-->

            <!--begin::Description-->
            <div class="text-muted fs-7">Set the product tax class.</div>
            <!--end::Description-->
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row w-100 flex-md-root">
            <!--begin::Label-->
            <label class="form-label">Brand</label>
            <!--end::Label-->

            <!--begin::Input-->
            <input type="text" id="brand"  name="brand" class="form-control mb-2" value="">
            <!--end::Input-->

            <!--begin::Description-->
            <div class="text-muted fs-7">Set the product Brand.</div>
            <!--end::Description-->
        </div>
        <!--end::Input group-->
    </div>
    <!--end:Tax-->
</div>
<!--end::Card header-->
</div>
<!--end::Pricing-->
            </div>
        </div>
        <!--end::Tab pane-->

        <!--begin::Tab pane-->
        <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
            <div class="d-flex flex-column gap-7 gap-lg-10">

<!--begin::Inventory-->
<div class="card card-flush py-4">
<!--begin::Card header-->
<div class="card-header">
    <div class="card-title">
        <h2>More Details</h2>
    </div>
</div>
<!--end::Card header-->

<!--begin::Card body-->
<div class="card-body pt-0">
    <!--begin::Input group-->
    <div class="mb-10 fv-row fv-plugins-icon-container">
        <!--begin::Label-->
        <label class="required form-label">Rewards Points</label>
        <!--end::Label-->

        <!--begin::Input-->
        <input type="text" id="reward_point"  name="reward_point" class="form-control mb-2" placeholder="Enter the Reward Point." value="">
        <!--end::Input-->

        <!--begin::Description-->
        <div class="text-muted fs-7">Enter the Reward Point.</div>
        <!--end::Description-->
    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-10 fv-row fv-plugins-icon-container">
        <!--begin::Label-->
        <label class="required form-label">Product Code</label>
        <!--end::Label-->

        <!--begin::Input-->
        <input type="text" id="productcode" name="productcode" class="form-control mb-2" placeholder="Enter the product code" value="">
        <!--end::Input-->

        <!--begin::Description-->
        <div class="text-muted fs-7">Enter the product code.</div>
        <!--end::Description-->
    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-10 fv-row fv-plugins-icon-container">
        <!--begin::Label-->
        <label class="required form-label">Quantity</label>
        <!--end::Label-->

        <!--begin::Input-->
        <div class="d-flex gap-3">
            <input type="number" id="quantity"  name="quantity" class="form-control mb-2" placeholder="Quantity " value="">

        </div>
        <!--end::Input-->

        <!--begin::Description-->
        <div class="text-muted fs-7">Enter the product quantity.</div>
        <!--end::Description-->
    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
    <!--end::Input group-->

    <!--begin::Input group-->
    {{-- <div class="fv-row">
        <!--begin::Label-->
        <label class="form-label">Stock Availability</label>
        <!--end::Label-->

        <!--begin::Input-->
        <div class="form-check form-check-custom form-check-solid mb-2">
            <input class="form-check-input" type="checkbox" value="In-stock">
            <label class="form-check-label">
                Yes
            </label>
        </div>
        <!--end::Input-->

        <!--begin::Description-->
        <div class="text-muted fs-7">Allow customers to purchase products that are out of stock.</div>
        <!--end::Description-->
    </div> --}}
    <!--end::Input group-->
</div>
<!--end::Card header-->
</div>
<!--end::Inventory-->

<!--begin::Variations-->
<div class="card card-flush py-4">
<!--begin::Card header-->
<div class="card-header">
    <div class="card-title">
        <h2>Stock Availabilty</h2>
    </div>
</div>
<!--end::Card header-->

<!--begin::Card body-->
<div class="card-body pt-0">
    <!--begin::Input group-->
    <div class="" data-kt-ecommerce-catalog-add-product="auto-options">
        <!--begin::Label-->
        <label class="form-label">Add Product Stock</label>
        <!--end::Label-->

        <!--begin::Repeater-->
        <div id="kt_ecommerce_add_product_options">
            <!--begin::Form group-->
            <div class="form-group">
                <div data-repeater-list="kt_ecommerce_add_product_options" class="d-flex flex-column gap-3">
                    <div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
                        <!--begin::Select2-->
                        <div class="w-100 w-md-200px">
                            <select class="form-select " id="stock" name="stock" data-placeholder="Select a variation" >

                                <option value="color">In-Stock</option>
                                <option value="size">OutofStock</option>

                            </select>
                        </div>
                        <!--end::Select2-->
                    </div>
                </div>
            </div>
            <!--end::Form group-->
        </div>
        <!--end::Repeater-->
    </div>
    <!--end::Input group-->
</div>
<!--end::Card header-->
</div>
<!--end::Variations-->

<!--begin::Shipping-->
<div class="card card-flush py-4">
<!--begin::Card header-->
<div class="card-header">
    <div class="card-title">
        <h2>Shipping</h2>
    </div>
</div>
<!--end::Card header-->

<!--begin::Card body-->
<div class="card-body pt-0">
    <!--begin::Input group-->
    <div class="fv-row">
        <!--begin::Input-->
        <div class="form-check form-check-custom form-check-solid mb-2">
                                <input class="form-check-input" type="checkbox" id="kt_ecommerce_add_product_shipping_checkbox" value="1">
                            <label class="form-check-label">
                This is a physical product
            </label>
        </div>
        <!--end::Input-->

        <!--begin::Description-->
        <div class="text-muted fs-7">Set if the product is a physical or digital item. Physical products may require shipping.</div>
        <!--end::Description-->
    </div>
    <!--end::Input group-->

    <!--begin::Shipping form-->
    <div id="kt_ecommerce_add_product_shipping" class=" mt-10">
        <!--begin::Input group-->
        <div class="mb-10 fv-row">
            <!--begin::Label-->
            <label class="form-label">Weight</label>
            <!--end::Label-->

            <!--begin::Editor-->
            <input type="text" name="weight" class="form-control mb-2" placeholder="Product weight" value="">
            <!--end::Editor-->

            <!--begin::Description-->
            <div class="text-muted fs-7">Set a product weight in kilograms (kg).</div>
            <!--end::Description-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row">
            <!--begin::Label-->
            <label class="form-label">Dimension</label>
            <!--end::Label-->

            <!--begin::Input-->
            <div class="d-flex flex-wrap flex-sm-nowrap gap-3">
                <input type="number" name="width" class="form-control mb-2" placeholder="Width (w)" value="">
                <input type="number" name="height" class="form-control mb-2" placeholder="Height (h)" value="">
                <input type="number" name="length" class="form-control mb-2" placeholder="Lengtn (l)" value="">
            </div>
            <!--end::Input-->

            <!--begin::Description-->
            <div class="text-muted fs-7">Enter the product dimensions in centimeters (cm).</div>
            <!--end::Description-->
        </div>
        <!--end::Input group-->
    </div>
    <!--end::Shipping form-->
</div>
<!--end::Card header-->
</div>
<!--end::Shipping-->
<!--begin::Meta options-->
<div class="card card-flush py-4">
<!--begin::Card header-->
<div class="card-header">
    <div class="card-title">
        <h2>Meta Options</h2>
    </div>
</div>
<!--end::Card header-->

<!--begin::Card body-->
<div class="card-body pt-0">
    <!--begin::Input group-->
    <div class="mb-10">
        <!--begin::Label-->
        <label class="form-label">Meta Tag Title</label>
        <!--end::Label-->

        <!--begin::Input-->
        <input type="text" class="form-control mb-2" name="meta_title" placeholder="Meta tag name">
        <!--end::Input-->

        <!--begin::Description-->
        <div class="text-muted fs-7">Set a meta tag title. Recommended to be simple and precise keywords.</div>
        <!--end::Description-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-10">
        <!--begin::Label-->
        <label class="form-label">Additional Description</label>
        <!--end::Label-->

        <!--begin::Editor-->
        <div class="ql-toolbar ql-snow"><span class="ql-formats"><span class="ql-header ql-picker">
            <span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-1">
                <svg viewBox="0 0 18 18"> <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon>
                    <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon> </svg></span>
                    <span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-1">
                        <span tabindex="0" role="button" class="ql-picker-item" data-value="1"></span>
                        <span tabindex="0" role="button" class="ql-picker-item" data-value="2"></span>
                        <span tabindex="0" role="button" class="ql-picker-item ql-selected"></span></span></span>
                        <select class="ql-header" style="display: none;"><option value="1"></option><option value="2"></option><option selected="selected"></option></select></span><span class="ql-formats"><button type="button" class="ql-bold"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path> <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path> </svg></button><button type="button" class="ql-italic"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line> <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line> <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line> </svg></button><button type="button" class="ql-underline"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path> <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect> </svg></button></span><span class="ql-formats"><button type="button" class="ql-image"><svg viewBox="0 0 18 18"> <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect> <circle class="ql-fill" cx="6" cy="7" r="1"></circle> <polyline class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline> </svg></button><button type="button" class="ql-code-block"><svg viewBox="0 0 18 18"> <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11"></polyline> <polyline class="ql-even ql-stroke" points="13 7 15 9 13 11"></polyline> <line class="ql-stroke" x1="10" x2="8" y1="5" y2="13"></line> </svg></button></span></div><div id="kt_ecommerce_add_product_meta_description" name="kt_ecommerce_add_product_meta_description" class="min-h-100px mb-2 ql-container ql-snow"><div class="ql-editor ql-blank" data-gramm="false" contenteditable="true" data-placeholder="Type your text here..."><p><br></p></div><div class="ql-clipboard" contenteditable="true" tabindex="-1"></div><div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div></div>
        <!--end::Editor-->

        <!--begin::Description-->
        <div class="text-muted fs-7">Set a meta tag description to the product for increased SEO ranking.</div>
        <!--end::Description-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div>
        <!--begin::Label-->
        <label class="form-label">Meta Tag Keywords</label>
        <!--end::Label-->

        <!--begin::Editor-->
        <input id="kt_ecommerce_add_product_meta_keywords" id="meta_tag" name="meta_tag" class="form-control mb-2">
        <!--end::Editor-->

        <!--begin::Description-->
        <div class="text-muted fs-7">Set a list of keywords that the product is related to. Separate the keywords by adding a comma <code>,</code> between each keyword.</div>
        <!--end::Description-->
    </div>
    <!--end::Input group-->
</div>
<!--end::Card header-->
</div>
<!--end::Meta options-->
 </div>
        </div>
        <!--end::Tab pane-->

                </div>
    <!--end::Tab content-->

    {{-- <div class="d-flex justify-content-end">
        <!--begin::Button-->
        <a href="" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">
            Cancel
        </a>
        <!--end::Button-->

        <!--begin::Button-->
        <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
            <span class="indicator-label">
                Save Changes
            </span>
            <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
        <!--end::Button-->
    </div> --}}
</div>
<!--end::Main column-->
{{-- </form> --}}
<!--end::Form-->
  </div>
    <!--end::Content container-->
</div>


       </div>

            <div class="modal-footer">
                <button type="button"  id="kt_ecommerce_add_product_cancel" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                 <!--begin::Button-->
        <button type="submit" id="product_save" class="btn btn-primary  add_product_submit">
            <span class="indicator-label">
                Save Changes
            </span>
            <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
        <!--end::Button-->
            </div>
        </form>
        <!--end::Form-->
        </div>
    </div>
</div>

<!--model end--->
<script src="{{ asset('dashboard/product/product.js') }}"></script>

<script>
    var imageInputElement = document.querySelector("#kt_image_input_example_1");
var imageInput = KTImageInput.getInstance(imageInputElement);
imageInput.on("kt.imageinput.changed", function() {
    // console.log("kt.imageinput.changed event is fired");
});
</script>
