<div id="main-header">
    <!-- Header top -->
    <div class="header-top">
        <div class="container">
            <ul class="list-menu-top">
                @if (Auth::check())
                <li class="items">
                    <a>Chào, {{ Auth::User()->full_name }}</a>
                </li>
                <li class="items">
                    <a href="{{ route('indexadmin') }}">Quản trị</a>
                </li>
                @else
                <li class="items">
                    <a href="{{ route('login') }}">Đăng nhập</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
    <!-- End Header top -->

    <!-- Header bottom -->
    <div class="header-bottom">
        <div class="container box-menu">
            <h1>
                <a href="{{ route('home') }}" class="bg-logo"></a>
            </h1>
            <ul class="list-menu-bottom">
                @foreach ($arrayCategory as $itemsCategory)
                @if ($itemsCategory->CategoryPost->count() > 0)
                <li class="items">
                    <a href="{{ route('homecategory', $itemsCategory->category_slug) }}">{{ $itemsCategory->category_name }}</a>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
    <!-- End Header bottom -->
</div>
