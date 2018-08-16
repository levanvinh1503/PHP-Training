@extends('admin.layout')
@section('breadcrumb')
Sửa bài viết / {{ $arrayPost->id }}
@endsection
@section('content')
<!-- Block edit post -->
<div class="list-addpost-admin">
    <h2 class="title-dashborad">Sửa bài viết</h2>
    <!-- Form Edit Post -->
    <form id="form-add-post" action="{{ route('editpost', $arrayPost->id) }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        @if(Session::has('thanhcong'))
        <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
        @endif
        <!-- Block left -->
        <div class="col-md-8">
            <div class="form-group">
                <label>Tên bài viết</label>
                <input class="form-control" type="text" id="post-title" name="post-title" value="{{ $arrayPost->post_title }}" placeholder="Nhập tên chuyên mục">
                @if($errors->has('post-title'))
                <p style="color: red">{{ $errors->first('post-title') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label>Đường dẫn</label>
                <input class="form-control" value="{{ $arrayPost->post_slug }}" type="text" id="post-slug" name="post-slug" placeholder="Đường dẫn chuyên mục (tạo tự động)">
            </div>
            <div class="form-group">
                <label>Mô tả ngắn</label>
                <textarea class="form-control" type="text" id="post-description" rows="4" name="post-description" placeholder="Mô tả ngắn">{{ $arrayPost->post_description }}</textarea>
                @if($errors->has('post-description'))
                <p style="color: red">{{ $errors->first('post-description') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label>Nội Dung</label>
                <textarea name="post-content" id="post-content" class="form-control">{{ $arrayPost->post_content }}</textarea>
                @if($errors->has('post-content'))
                <p style="color: red">{{ $errors->first('post-content') }}</p>
                @endif
            </div>
        </div>
        <!-- End block left -->
        <!-- Block right -->
        <div class="col-md-4">
            <div class="form-group">
                <label>Ảnh đại diện</label>
                <input type="hidden" name="old-post-image" value="{{ $arrayPost->post_image }}">
                <img src="{{ asset('images/' . $arrayPost->post_image) }}" style="width: 100%;border: 1px solid #c0c0c0; padding: 5px">
            </div>
            <div class="form-group">
                <label>Đổi hình ảnh</label>
                <input class="form-control" type="file" id="post-image" name="post-image" accept="image/png, image/jpeg">
            </div>
            <div class="form-group">
                <label>Chuyên mục</label>
                <select class="form-control" type="text" id="post-category-update" name="post-category-update">
                    @foreach ($arrayCategory as $valueCate)
                    <option @if ($arrayPost->category_id_fkey == $valueCate->id) selected="selected" @endif value="{{ $valueCate->id }}">{{ $valueCate->category_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!-- End block right -->
        <div class="form-group col-md-12">
            <input class="btn btn-primary" type="submit" name="edit-post" value="Chỉnh sửa">
        </div>
    </form>
    <!-- End Form -->
</div>
<!-- End block edit post -->
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        $('#category-name').keyup(function () {
            var titleInput = $(this).val();
            var slugResult = ChangeToSlug(titleInput);
            $('#category-slug').val(slugResult);
        });
        $('#post-title').keyup(function () {
            var titleInput = $(this).val();
            var slugResult = ChangeToSlug(titleInput);
            $('#post-slug').val(slugResult);
        });
        CKEDITOR.replace('post-content', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        });
    });
</script>
@endsection
