<div class="data_action_btn"  style="display: flex; ">
    <a href="javascript:void(0)" data-toggle="tooltip" onClick="editFunc({{ $id }})" data-original-title="Edit" class="edit btn btn-success edit">
        Edit
        </a>
        <a href="javascript:void(0);" id="delete-compnay" onClick="deleteFunc({{ $id }})" data-toggle="tooltip" data-original-title="Delete" class="delete btn btn-danger">
        Delete
        </a>
</div>

<style>
    .data_action_btn .edit{
          margin-right: 20px;
    }
</style>
