@extends('pages.layout')
@section('content-left')
<!-- Detail post -->
<h2 class="post-title">{{ $arrayPost->post_title }}</h2>
<div class="post-meta">
    <span class="view">{{ $arrayPost->post_view }} views</span>
    <span class="author">{{ $arrayPost->CategoryPost->category_name }}</span>
    <span class="date">{{ $arrayPost->created_at }}</span>
</div>
<div class="like-share">
    <iframe src="https://www.facebook.com/plugins/like.php?href={{ route('homepost', $arrayPost->post_slug) }}&width=112&layout=button&action=like&size=small&show_faces=true&share=true&height=65&appId=389915931494296" width="112" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
</div>
<p class="post-description">{{ $arrayPost->post_description }}</p>
<div class="post-content">
    {!! $arrayPost->post_content !!}
</div>
<div class="comment-post">
    <div class="fb-comments" data-width="100%" data-href="{{ route('homepost', $arrayPost->post_slug) }}" data-numposts="5"></div>
</div>
<!-- End detail post -->
<!-- Other post -->
<div class="other-post" style="margin-top: 10px;">
    <h4 class="title-categorie">Tin liên quan</h4>
    <div class="row" style="margin-top: 10px">
        @foreach ($arrayPostOther as $itemPost)
        <div class="col-md-4">
            <a href="{{ route('homepost', $itemPost->post_slug) }}">
                <img src="{{ asset('images/'.$itemPost->post_image) }}" width="100%" />
            </a>
            <h2>{{ $itemPost->post_title }}</h2>
            <div class="post-meta">
                <span class="view">{{ $itemPost->post_view }} views</span>
                <span class="author">{{ $itemPost->CategoryPost->category_name }}</span>
                <span class="date">{{ $itemPost->created_at }}</span>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- End other post -->
@endsection
