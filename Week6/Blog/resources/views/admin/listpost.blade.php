    @extends('admin.layout')
    @section('breadcrumb')
    Danh sách bài viết
    @endsection
    @section('content')
    <!-- Block list post -->
    <div class="list-category-admin">
        <h2 class="title-dashborad">Danh sách bài viết</h2>
        @if(Session::has('thanhcong'))
        <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
        @endif
        <!-- DataTable -->
        <table class="table table-striped table-bordered table-hover " id="table-list-post">
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Tiêu để</th>
                    <th>Chuyên mục</th>
                    <th>Ngày tạo</th>
                    <th>Views</th>
                    <th>Ảnh đại diện</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($arrayPost as $itemPost)
                <tr>
                    <td>{{ $itemPost->id }}</td>
                    <td>{{ $itemPost->post_title }}</td>
                    <td>{{ $itemPost->CategoryPost->category_name }}</td>
                    <td>{{ $itemPost->created_at }}</td>
                    <td>{{ $itemPost->post_view }}</td>
                    <td><img src="{{ asset('images/'.$itemPost->post_image) }}" width="100px" /></td>
                    <td>
                        <a href="{{ route('editpost', $itemPost->id) }}" class="btn btn-primary edit-post">
                            <i class="fa fa-edit"></i> Sửa
                        </a>
                        <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-post">
                            <i class="fa fa-trash"></i> Xóa
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- End DataTable -->
    </div>
    <!-- End Block list post -->
    <!-- Modal Delete-->
    <div class="modal fade" id="modal-delete-post" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Xóa Bài Viết</h4>
            </div>
            <div class="modal-body">
                <form id="form-delete">
                    {{ csrf_field() }}
                    <input type="hidden" name="delete-post-id" id="delete-post-id">
                    <p>Bạn có chắc muốn xóa bài viết với id <strong id="delete-id"></strong> này?</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <a href="" class="btn btn-danger" id="delete-post">Xóa</a>
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
        var dataTable = $('#table-list-post').DataTable({'iDisplayLength': '25',"order": [[ 0, "desc" ]]});
        /* Bind post name to modal*/
        $('#modal-delete-post').on('show.bs.modal', function (eventClick) {
            var buttonDelte = $(eventClick.relatedTarget) // Button that triggered the modal
            var currentRow = buttonDelte.closest("tr");
            var postId=currentRow.find("td:eq(0)").text(); // get current row 1st TD value
            var modal = $(this);
            modal.find('.modal-body #delete-post-id').val(postId);
            modal.find('.modal-body #delete-id').html(postId);
            modal.find('.modal-body #delete-post').attr('href', 'post/delete/'+postId);
        });
    });
</script>
@endsection
