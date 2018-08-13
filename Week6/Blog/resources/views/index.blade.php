@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <!-- Content left -->
            <div class="col-md-9 content-left">
                <!-- Slider -->
                <div class="slider-home-post">
                    <ul class="slides">
                        <li class="items">
                            <a href="#">
                                <img src="{{ asset('image/img-post-test.jpg') }}">
                            </a>
                            <div class="description-post">
                                <h2>
                                    <a href="#">Trong năm của "tai thỏ", chỉ duy nhất Samsung muốn lưu giữ những giá trị trường tồn</a>
                                </h2>
                                <p>Sự ra mắt của Note9 giống như một gáo nước lạnh dội vào những kẻ đang chạy theo sự không-hoàn-hảo của Apple.</p>
                            </div>
                        </li>
                        <li class="items">
                            <a href="#">
                                <img src="{{ asset('image/img-post-test2.jpg') }}">
                            </a>
                            <div class="description-post">
                                <h2>
                                    <a href="#">Xiaomi Redmi 6 - Cùng Shopee nâng tầm trải nghiệm vươn xa</a>
                                </h2>
                                <p>Vừa xong khung giờ Flash Sale 9h – 13h hôm nay trên Shopee, Xiaomi Redmi 6 phiên bản 4GB/64GB đang là xu hướng hot</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- List the post of category -->
                <div class="row">
                    <div class="col-md-6 content-left">
                        <h4 class="title-categorie">Công nghệ</h4>
                        <a href="#">
                            <img class="img-post" src="{{ asset('image/img-post-test.jpg') }}" width="100%">
                        </a>
                        <div class="post-container">
                            <h4>
                                <a href="#">Trong năm của "tai thỏ", chỉ duy nhất Samsung muốn lưu giữ những giá trị trường tồn</a>
                            </h4>
                            <p>Sự ra mắt của Note9 giống như một gáo nước lạnh dội vào những kẻ đang chạy theo sự không-hoàn-hảo của Apple.</p>
                            <div class="post-meta">
                                <span class="view">10 views</span>
                                <span class="date">15:30 13-08-2018</span>
                            </div>
                        </div>
                        <div class="row list-post">
                            <div class="col-md-4 content-left">
                                <a href="#"><img src="{{ asset('image/img-post-test.jpg') }}" width="100%"></a>
                            </div>
                            <div class="col-md-8 content-left">
                                <h4>
                                    <a href="#">Trong năm của "tai thỏ", chỉ duy nhất Samsung muốn lưu giữ những giá trị trường tồn</a>
                                </h4>
                                <div class="post-meta">
                                	<span>Công nghệ </span>
                                <span class="date">15:30 13-08-2018</span>
                                </div>
                            </div>
                        </div>
                        <div class="row list-post">
                            <div class="col-md-4 content-left">
                                <a href="#"><img src="{{ asset('image/img-post-test.jpg') }}" width="100%"></a>
                            </div>
                            <div class="col-md-8 content-left">
                                <h4>
                                    <a href="#">Trong năm của "tai thỏ", chỉ duy nhất Samsung muốn lưu giữ những giá trị trường tồn</a>
                                </h4>
                                <div class="post-meta">
                                	<span>Công nghệ </span>
                                    <span class="date">15:30 13-08-2018</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 content-left">
                        <h4 class="title-categorie">Điện thoại</h4>
                        <a href="#">
                            <img class="img-post" src="{{ asset('image/img-post-test2.jpg') }}" width="100%">
                        </a>
                        <div class="post-container">
                            <h4>
                                <a href="#">Xiaomi Redmi 6 - Cùng Shopee nâng tầm trải nghiệm vươn xa</a>
                            </h4>
                            <p>Vừa xong khung giờ Flash Sale 9h – 13h hôm nay trên Shopee, Xiaomi Redmi 6 phiên bản 4GB/64GB đang là xu hướng hot</p>
                            <div class="post-meta">
                                <span class="view">10 views</span>
                                <span class="date">15:30 13-08-2018</span>
                            </div>
                        </div>
                        <div class="row list-post">
                            <div class="col-md-4 content-left">
                                <a href="#"><img src="{{ asset('image/img-post-test.jpg') }}" width="100%"></a>
                            </div>
                            <div class="col-md-8 content-left">
                                <h4>
                                    <a href="#">Trong năm của "tai thỏ", chỉ duy nhất Samsung muốn lưu giữ những giá trị trường tồn</a>
                                </h4>
                                <div class="post-meta">
                                	<span>Điện thoại </span>
                                    <span class="date">15:30 13-08-2018</span>
                                </div>
                            </div>
                        </div>
                        <div class="row list-post">
                            <div class="col-md-4 content-left">
                                <a href="#"><img src="{{ asset('image/img-post-test.jpg') }}" width="100%"></a>
                            </div>
                            <div class="col-md-8 content-left">
                                <h4>
                                    <a href="#">Trong năm của "tai thỏ", chỉ duy nhất Samsung muốn lưu giữ những giá trị trường tồn</a>
                                </h4>
                                <div class="post-meta">
                                	<span>Điện thoại </span>
                                    <span class="date">15:30 13-08-2018</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 content-left">
                        <h4 class="title-categorie">Công nghệ</h4>
                        <a href="#">
                            <img class="img-post" src="{{ asset('image/img-post-test.jpg') }}" width="100%">
                        </a>
                        <div class="post-container">
                            <h4>
                                <a href="#">Trong năm của "tai thỏ", chỉ duy nhất Samsung muốn lưu giữ những giá trị trường tồn</a>
                            </h4>
                            <p>Sự ra mắt của Note9 giống như một gáo nước lạnh dội vào những kẻ đang chạy theo sự không-hoàn-hảo của Apple.</p>
                            <div class="post-meta">
                                <span class="view">10 views</span>
                                <span class="date">15:30 13-08-2018</span>
                            </div>
                        </div>
                        <div class="row list-post">
                            <div class="col-md-4 content-left">
                                <a href="#"><img src="{{ asset('image/img-post-test.jpg') }}" width="100%"></a>
                            </div>
                            <div class="col-md-8 content-left">
                                <h4>
                                    <a href="#">Trong năm của "tai thỏ", chỉ duy nhất Samsung muốn lưu giữ những giá trị trường tồn</a>
                                </h4>
                                <div class="post-meta">
                                	<span>Công nghệ </span>
                                    <span class="date">15:30 13-08-2018</span>
                                </div>
                            </div>
                        </div>
                        <div class="row list-post">
                            <div class="col-md-4 content-left">
                                <a href="#"><img src="{{ asset('image/img-post-test.jpg') }}" width="100%"></a>
                            </div>
                            <div class="col-md-8 content-left">
                                <h4>
                                    <a href="#">Trong năm của "tai thỏ", chỉ duy nhất Samsung muốn lưu giữ những giá trị trường tồn</a>
                                </h4>
                                <div class="post-meta">
                                	<span>Công nghệ </span>
                                    <span class="date">15:30 13-08-2018</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 content-left">
                        <h4 class="title-categorie">Điện thoại</h4>
                        <a href="#">
                            <img class="img-post" src="{{ asset('image/img-post-test2.jpg') }}" width="100%">
                        </a>
                        <div class="post-container">
                            <h4>
                                <a href="#">Xiaomi Redmi 6 - Cùng Shopee nâng tầm trải nghiệm vươn xa</a>
                            </h4>
                            <p>Vừa xong khung giờ Flash Sale 9h – 13h hôm nay trên Shopee, Xiaomi Redmi 6 phiên bản 4GB/64GB đang là xu hướng hot</p>
                            <div class="post-meta">
                                <span class="view">10 views</span>
                                <span class="date">15:30 13-08-2018</span>
                            </div>
                        </div>
                        <div class="row list-post">
                            <div class="col-md-4 content-left">
                                <a href="#"><img src="{{ asset('image/img-post-test.jpg') }}" width="100%"></a>
                            </div>
                            <div class="col-md-8 content-left">
                                <h4>
                                    <a href="#">Trong năm của "tai thỏ", chỉ duy nhất Samsung muốn lưu giữ những giá trị trường tồn</a>
                                </h4>
                                <div class="post-meta">
                                	<span>Điện thoại </span>
                                    <span class="date">15:30 13-08-2018</span>
                                </div>
                            </div>
                        </div>
                        <div class="row list-post">
                            <div class="col-md-4 content-left">
                                <a href="#"><img src="{{ asset('image/img-post-test.jpg') }}" width="100%"></a>
                            </div>
                            <div class="col-md-8 content-left">
                                <h4>
                                    <a href="#">Trong năm của "tai thỏ", chỉ duy nhất Samsung muốn lưu giữ những giá trị trường tồn</a>
                                </h4>
                                <div class="post-meta">
                                	<span>Điện thoại </span>
                                    <span class="date">15:30 13-08-2018</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- List of hot post -->
                <div class="hot-post">
                    <h4 class="title-categorie">Đáng chú ý</h4>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-4">
                            <a href="#"><img src="{{ asset('image/img-post-test.jpg') }}" width="100%" /></a>
                        </div>
                        <div class="col-md-8 list-post">
                            <h4>
                                <a href="#">Trong năm của "tai thỏ", chỉ duy nhất Samsung muốn lưu giữ những giá trị trường tồn</a>
                            </h4>
                            <div class="post-meta">
                                <span class="view">10 views</span>
                                <span class="date">15:30 13-08-2018</span>
                            </div>
                            <p>Sự ra mắt của Note9 giống như một gáo nước lạnh dội vào những kẻ đang chạy theo sự không-hoàn-hảo của Apple.</p>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-4">
                            <a href="#"><img src="{{ asset('image/img-post-test.jpg') }}" width="100%" /></a>
                        </div>
                        <div class="col-md-8 list-post">
                            <h4>
                                <a href="#">Trong năm của "tai thỏ", chỉ duy nhất Samsung muốn lưu giữ những giá trị trường tồn</a>
                            </h4>
                            <div class="post-meta">
                                <span class="view">10 views</span>
                                <span class="date">15:30 13-08-2018</span>
                            </div>
                            <p>Sự ra mắt của Note9 giống như một gáo nước lạnh dội vào những kẻ đang chạy theo sự không-hoàn-hảo của Apple.</p>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-4">
                            <a href="#"><img src="{{ asset('image/img-post-test.jpg') }}" width="100%" /></a>
                        </div>
                        <div class="col-md-8 list-post">
                            <h4>
                                <a href="#">Trong năm của "tai thỏ", chỉ duy nhất Samsung muốn lưu giữ những giá trị trường tồn</a>
                            </h4>
                            <div class="post-meta">
                                <span class="view">10 views</span>
                                <span class="date">15:30 13-08-2018</span>
                            </div>
                            <p>Sự ra mắt của Note9 giống như một gáo nước lạnh dội vào những kẻ đang chạy theo sự không-hoàn-hảo của Apple.</p>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-4">
                            <a href="#"><img src="{{ asset('image/img-post-test.jpg') }}" width="100%" /></a>
                        </div>
                        <div class="col-md-8 list-post">
                            <h4>
                                <a href="#">Trong năm của "tai thỏ", chỉ duy nhất Samsung muốn lưu giữ những giá trị trường tồn</a>
                            </h4>
                            <div class="post-meta">
                                <span class="view">10 views</span>
                                <span class="date">15:30 13-08-2018</span>
                            </div>
                            <p>Sự ra mắt của Note9 giống như một gáo nước lạnh dội vào những kẻ đang chạy theo sự không-hoàn-hảo của Apple.</p>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-4">
                            <a href="#"><img src="{{ asset('image/img-post-test.jpg') }}" width="100%" /></a>
                        </div>
                        <div class="col-md-8 list-post">
                            <h4>
                                <a href="#">Trong năm của "tai thỏ", chỉ duy nhất Samsung muốn lưu giữ những giá trị trường tồn</a>
                            </h4>
                            <div class="post-meta">
                                <span class="view">10 views</span>
                                <span class="date">15:30 13-08-2018</span>
                            </div>
                            <p>Sự ra mắt của Note9 giống như một gáo nước lạnh dội vào những kẻ đang chạy theo sự không-hoàn-hảo của Apple.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content right -->
            <div class="col-md-3 content-left" style="margin-top: 10px;">
                <h4 class="title-categorie">Quảng cáo</h4>
                
            </div>
        </div>
    </div>
@endsection