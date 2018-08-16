@extends('pages.layout')
@section('content-left')
<!-- Slider -->
<div class="slider-home-post">
    <ul class="slides">
        @foreach ($arrayPost as $itemPost)
        <li class="items">
            <a href="{{ route('homepost', $itemPost->post_slug) }}">
                <img src="{{ asset('images/'.$itemPost->post_image) }}">
            </a>
            <div class="description-post">
                <h2>
                    <a href="{{ route('homepost', $itemPost->post_slug) }}">{{ $itemPost->post_title }}</a>
                </h2>
                <p>{{ $itemPost->post_description }}</p>
            </div>
        </li>
        @endforeach
    </ul>
</div>
<!-- End slider -->
<!-- List the post of category -->
<div class="row">
    @foreach ($arrayCategory as $itemCategory)
        @if ($itemCategory->CategoryPost->count() > 0)
        <div class="col-md-6">
            <h4 class="title-categorie">
                <a href="{{ route('homecategory', $itemCategory->category_slug) }}">{{ $itemCategory->category_name }}</a>
            </h4>
            @foreach ($itemCategory->CategoryPost as $itemPost)
                @if ($loop->first)
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
                @else
                <div class="row list-post">
                    <div class="col-md-4 content-left">
                        <a href="{{ route('homepost', $itemPost->post_slug) }}"><img src="{{ asset('images/'.$itemPost->post_image) }}" width="100%"></a>
                    </div>
                    <div class="col-md-8 content-left">
                        <h4>
                            <a href="{{ route('homepost', $itemPost->post_slug) }}">{{ $itemPost->post_title }}</a>
                        </h4>
                        <div class="post-meta">
                            <span>{{ $itemCategory->category_name }} </span>
                            <span class="date">{{ $itemPost->created_at }}</span>
                        </div>
                    </div>
                </div>
                    @if ($loop->iteration > 4)
                    <div class="see-more">
                        <a href="{{ route('homepost', $itemPost->post_slug) }}">
                            <i class="fa fa-hand-point-right"></i> Xem thêm
                        </a>
                    </div>
                        @break
                    @endif
                @endif
            @endforeach
        </div>
        @endif
    @endforeach
</div>
<!-- End list post of category -->
<!-- List of hot post -->
<div class="hot-post">
    <h4 class="title-categorie">Nổi bật</h4>
    @foreach ($arrayPost as $itemPost)
    <div class="row" style="margin-top: 10px;">
        <div class="col-md-4">
            <a href="{{ route('homepost', $itemPost->post_slug) }}">
                <img src="{{ asset('images/'.$itemPost->post_image) }}" width="100%" />
            </a>
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
    @endforeach
</div>
<!-- End list of hot post -->
@endsection
