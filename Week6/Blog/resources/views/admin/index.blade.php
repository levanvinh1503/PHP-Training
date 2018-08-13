<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel - Admin</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Boostrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Header -->
    <div class="container-fluid">
        <div class="row">
            <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
                <div class="profile-sidebar">
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">lê văn vịnh</div>
                        <div class="profile-usertitle-status">
                            <span class="indicator label-success"></span>Online
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="divider"></div>
                <ul class="nav menu">
                    <li class="">
                        <a href="#">
                            <em class="fa fa-bars"></em> Chuyên mục 
                        </a>
                        <ul class="nav menu">
                            <li>
                                <a class="" href="">
                                    <span class="fa fa-arrow-right"></span> Danh sách bài viết
                                </a>
                            </li>
                            <li>
                                <a class="" href="">
                                    <span class="fa fa-arrow-right"></span> Thêm bài viết
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="parent ">
                        <a href="#">
                            <em class="fa fa-bars"></em> Bài viết 
                        </a>
                        <ul class="nav menu">
                            <li>
                                <a class="" href="">
                                    <span class="fa fa-arrow-right"></span> Danh sách bài viết
                                </a>
                            </li>
                            <li>
                                <a class="" href="">
                                    <span class="fa fa-arrow-right"></span> Thêm bài viết
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href=""><em class="fa fa-power-off"></em> Đăng xuất</a></li>
                </ul>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main content-left">
                <div class="row admin-header">
                    <h2>Dashboard</h2>
                </div>
                <!-- Content -->
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Script -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/jquery.flexslider.js') }}"></script>
</body>
</html>
