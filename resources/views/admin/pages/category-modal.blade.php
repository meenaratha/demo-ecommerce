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
