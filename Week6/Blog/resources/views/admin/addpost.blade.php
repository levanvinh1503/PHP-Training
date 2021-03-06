@extends('admin.layout')
@section('breadcrumb')
Thêm bài viết
@endsection
@section('content')
<!-- Block add post -->
<div class="list-addpost-admin">
    <h2 class="title-dashborad">Thêm bài viết</h2>
    <!-- Form add post -->
    <form id="form-add-post" action="{{ route('addpost') }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
            {{ $err }}<br>
            @endforeach
        </div>
        @endif
        @if(Session::has('thanhcong'))
        <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
        @endif
        <div class="form-group">
            <label>Tên bài viết</label>
            <input class="form-control" type="text" id="post-title" name="post-title" placeholder="Nhập tên chuyên mục">
        </div>
        <div class="form-group">
            <label>Đường dẫn</label>
            <input class="form-control" type="text" id="post-slug" name="post-slug" placeholder="Đường dẫn chuyên mục (tạo tự động)">
        </div>
        <div class="form-group">
            <label>Chuyên mục</label>
            <select class="form-control" type="text" id="post-category" name="post-category">
                @foreach ($categoryModel as $valueCate)
                <option value="{{ $valueCate->id }}">{{ $valueCate->category_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Mô tả ngắn</label>
            <textarea class="form-control" type="text" rows="4" id="post-description" name="post-description" placeholder="Mô tả ngắn"></textarea>
        </div>
        <div class="form-group">
            <label>Nội Dung</label>
            <textarea name="post-content" id="post-content" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Hình ảnh</label>
            <input class="form-control" type="file" id="post-image" name="post-image">
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="add-post" value="Thêm">
        </div>
    </form>
    <!-- End form add post -->
</div>
<!-- End block add post -->
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        /*Convert string to url*/
        $('#category-name').keyup(function () {
            var titleInput = $(this).val();
            var slugResult = ChangeToSlug(titleInput);
            $('#category-slug').val(slugResult);
        });
        /*Convert string to url*/
        $('#post-title').keyup(function () {
            var titleInput = $(this).val();
            var slugResult = ChangeToSlug(titleInput);
            $('#post-slug').val(slugResult);
        });
        /*Import ckeditor*/
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
