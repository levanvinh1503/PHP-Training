@extends('pages.layout')
@section('content-left')
<!-- List post of category -->
<h4 class="title-categorie">{{ $arrayCategory->category_name }}</h4>
<div class="row" style="margin-top: 20px">
    @foreach ($arrayPost as $itemPost)
        @if ($loop->index == 0)
        <div class="col-md-6">
            <a href="{{ route('homepost', $itemPost->post_slug) }}">
                <img class="img-post" src="{{ asset('images/'.$itemPost->post_image) }}" width="100%">
            </a>
            <div class="post-container">
                <h4>
                    <a href="{{ route('homepost', $itemPost->post_slug) }}">{{ $itemPost->post_title }}</a>
                </h4>
                <p>{{ $itemPost->post_description }}</p>
                <div class="post-meta">
                    <span class="view">{{ $itemPost->post_view }} views</span>
                    <span class="date">{{ $itemPost->created_at }}</span>
                </div>
            </div>
        </div>
        @elseif ($loop->index == 1)
        <div class="col-md-6">
            <a href="{{ route('homepost', $itemPost->post_slug) }}">
                <img class="img-post" src="{{ asset('images/'.$itemPost->post_image) }}" width="100%">
            </a>
            <div class="post-container">
                <h4>
                    <a href="{{ route('homepost', $itemPost->post_slug) }}">{{ $itemPost->post_title }}</a>
                </h4>
                <p>{{ $itemPost->post_description }}</p>
                <div class="post-meta">
                    <span class="view">{{ $itemPost->post_view }} views</span>
                    <span class="date">{{ $itemPost->created_at }}</span>
                </div>
            </div>
        </div>
        @endif
    @endforeach
    <div class="col-md-12">
        @foreach ($arrayPost as $itemPost)
            @if ($loop->index > 1)
            <div class="row">
                <div class="col-md-4">
                    <a href="{{ route('homepost', $itemPost->post_slug) }}"><img src="{{ asset('images/'.$itemPost->post_image) }}" width="100%" /></a>
                </div>
                <div class="col-md-8 list-post">
                    <h4>
                        <a href="{{ route('homepost', $itemPost->post_slug) }}">{{ $itemPost->post_title }}</a>
                    </h4>
                    <div class="post-meta">
                        <span class="view">{{ $itemPost->post_view }} views</span>
                        <span class="date">{{ $itemPost->created_at }}</span>
                    </div>
                    <p>{{ $itemPost->post_description }}</p>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>
<!-- End list post of category -->
@endsection
