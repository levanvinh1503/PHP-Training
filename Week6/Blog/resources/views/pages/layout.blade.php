@extends('welcome')
@section('content')
<div class="container">
    <div class="row">
        <!-- Content left -->
        <div class="col-md-8 content-left">
            @yield('content-left')
        </div>
        <!-- End content left -->
        <!-- Content right -->
        <div class="col-md-4 content-right">
            <h4 class="title-categorie">Xem nhiều</h4>
            <div class="box-post-view">
                @foreach ($arrayViewPost as $itemPost)
                <div class="row item-post-view">
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
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End content right -->
    </div>
</div>
@endsection
