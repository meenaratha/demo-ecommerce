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
