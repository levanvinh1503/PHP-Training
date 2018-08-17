@extends('admin.layout')
@section('breadcrumb')
Danh sách chuyên mục
@endsection
@section('content')
<!-- BLock list category -->
<div class="list-category-admin">
    <h2 class="title-dashborad">Danh sách chuyên mục</h2>
    <!-- DataTable -->
    <table class="table table-striped table-bordered table-hover" id="table-list-category">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên chuyên mục</th>
                <th>Đường dẫn</th>
                <th>Số bài viết</th>
                <th>Hành động</th>
            </tr>
        </thead>
    </table>
    <!-- End DataTable -->
</div>
<!-- End block list category -->
<!-- Modal Update-->
<div class="modal fade" id="show-update-category" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                	<span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Chỉnh Sửa Chuyên Mục</h4>
            </div>
            <div class="modal-body">
                <form id="form-update-category" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Tên chuyên mục</label>
                        <input type="hidden" name="category-id" id="category-id">
                        <input type="text" class="form-control" id="category-name" name="category-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Đường dẫn</label>
                        <input type="text" class="form-control" id="category-slug" name="category-slug">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-success" id="save-category">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End modal update -->
<!-- Modal Delete-->
<div class="modal fade" id="show-delete-category" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Xóa Chuyên Mục</h4>
            </div>
            <div class="modal-body">
                <form id="form-delete-category" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="category-id" id="category-id">
                    <p>Bạn có chắc muốn xóa chuyên mục <strong id="category-name"></strong> cũng như các bài viết trong đó?</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-danger" id="category-delete">Xóa</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>
<!-- End modal delete -->
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        /* Get datatable from route('datacategory') */
        var dataTable = $('#table-list-category').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('datacategory') }}',
            columns: [
            { data: 'id', name: 'id' },
            { data: 'category_name', name: 'category_name' },
            { data: 'category_slug', name: 'category_slug' },
            { data: 'post_count', name: 'post_count' },
            { data: 'action', name: 'action' },
            ]
        });

        /* Bind data record to form update modal*/
        $('#show-update-category').on('show.bs.modal', function (eventClick) {
            var buttonClick = $(eventClick.relatedTarget) // Button that triggered the modal
            var currentRow = buttonClick.closest("tr");
            var categoryId = currentRow.find("td:eq(0)").text(); // get current row 1st TD value
            var categoryName = currentRow.find("td:eq(1)").text(); // get current row 2nd TD
            var categorySlug = currentRow.find("td:eq(2)").text(); // get current row 2nd TD
            var modalUpdate = $(this);
            modalUpdate.find('.modal-body #category-id').val(categoryId);
            modalUpdate.find('.modal-body #category-name').val(categoryName);
            modalUpdate.find('.modal-body #category-slug').val(categorySlug);
        });
        
        /* Send request update Ajax*/
        $("#save-category").on("click", function (eventSubmit) {
            eventSubmit.preventDefault();
            $.ajax({
                url: '{{ route('editcategory') }}',
                type: 'POST',
                data: $('#form-update-category').serialize(),
                success: function (dataResult) {
                    console.log(dataResult);
                    if(dataResult == 'success'){
                        dataTable.ajax.reload();
                        $('#show-update-category').modal('hide');
                        alert("Cập Nhật Thành Công");
                    } else {
                        dataTable.ajax.reload();
                        $('#show-update-category').modal('hide');
                        alert(dataResult.error);
                    }
                }
            })
        });

        /* Bind category name to modal*/
        $('#show-delete-category').on('show.bs.modal', function (eventClick) {
            var buttonDelte = $(eventClick.relatedTarget) // Button that triggered the modal
            var currentRow = buttonDelte.closest("tr");
            var categoryId=currentRow.find("td:eq(0)").text(); // get current row 1st TD value
            var categoryName=currentRow.find("td:eq(1)").text(); // get current row 2nd TD
            var modal = $(this);
            modal.find('.modal-body #category-name').html(categoryName);
            modal.find('.modal-body #category-id').val(categoryId);
        });

        /* Send request delete Ajax*/
        $("#form-delete-category").on("submit", function(eventSubmit) {
            eventSubmit.preventDefault();
            $.ajax({
                url: '{{ route('deletecategory') }}',
                type: 'POST',
                data: $(this).serialize(),
                success: function (dataResult) {
                    if(dataResult == 'success') {
                        dataTable.ajax.reload();
                        $('#show-delete-category').modal('hide');
                        alert("Xóa Thành Công");
                    } else {
                        dataTable.ajax.reload();
                        $('#show-delete-category').modal('hide');
                        alert(dataResult.error);
                    }
                }
            })
        });
    });
</script>
@endsection
