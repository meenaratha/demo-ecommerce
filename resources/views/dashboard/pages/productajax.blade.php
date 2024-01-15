


<script type="text/javascript">
    $(document).ready( function () {
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
     
        $('#product-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('product-show') }}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'product_name', name: 'product_name' },
    //            { data: 'productimage', name: 'productimage' },
            {
                data: 'productimage',
                name: 'productimage',
                render: function(data, type, full, meta) {
                    // return '<img src=" upload/product/'+ data + '" alt="Product Image" class="img-thumbnail" width="50" height="50">';
     return '<img src="'+ data + '" alt="Product Image" class="img-thumbnail" width="50" height="50">';

                }
            },
                { data: 'quantity', name: 'quantity' },
                { data: 'action', name: 'action', orderable: false},
            ],
            order: [[0, 'desc']]
    //           order: [[0, 'asc']]

        });
    });
     
    function add(){
        $('#ProductForm').trigger("reset");
        $('#ProductTittle').html("Add Product Details");
        $('#product-modal').modal('show');
        $('#id').val('');
    }  
         
    function editFunc(id){
        $.ajax({
            type:"POST",
            url: "{{ url('product-edit') }}",
            data: { id: id },
            dataType: 'json',
            success: function(res){
                $('#ProductTittle').html("Edit Employee");
                $('#product-modal').modal('show');
                $('#id').val(res.id);
                $('#product_name').val(res.product_name);
                $('#add_product_description').val(res.product_description);
                $('#original_price').val(res.original_price);
                 $('#discount_price').val(res.discount_price);
                 $('#tax').val(res.tax);
                 $('#brand').val(res.brand);
                 $('#product_code').val(res.product_code);
                 $('#reward_point').val(res.reward_point);
                 $('#stock').val(res.stock);
                 $('#quantity').val(res.quantity);
                 $('#meta_tag').val(res.meta_tag);
                 $('#productimage').val(res.productimage);
                 $('#product_thumbnail').val(res.product_thumbnail);
                 $('#discount_option').val(res.discount_option);

                 $('#status').val(res.status);

            }
        });
    } 
     
    function deleteFunc(id){
        if (confirm("Delete Record?") == true) {
            var id = id;
            // ajax
            $.ajax({
                type:"POST",
                url: "{{ url('product-delete') }}",
                data: { id: id },
                dataType: 'json',
                success: function(res){
                    var oTable = $('#product-datatable').dataTable();
                    oTable.fnDraw(false);
                }
            });
        }
    }
     
    $('#ProductForm').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: "{{ url('product-store')}}",
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            success: (data) => {
                $("#product-modal").modal('hide');
                var oTable = $('#product-datatable').dataTable();
                oTable.fnDraw(false);
                $("#product_save").html('Submit');
                $("#product_save"). attr("disabled", false);
    // Show success toast message
    toastr.success('Product saved successfully!');
            },
            error: function(data){
                console.log(data);
    // Show error toast message
    toastr.error('Error saving product. Please try again.');
            }
        });


    });
    </script>
