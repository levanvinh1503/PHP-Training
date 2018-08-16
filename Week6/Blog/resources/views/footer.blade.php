<div id="footer">
    <!-- Footer bottom -->
    <div class="footer-bottom">
        <!-- Container -->
        <div class="infomation-contact container">
            <!-- Block footer 1 -->
            <div class="col-md-4 content-left">
                <h2>THÔNG TIN</h2>
                <p>Trang tin tức công nghệ</p>
            </div>
            <!-- End block footer 1 -->

            <!-- Block footer 3 -->
            <div class="col-md-4 content-left">
                <h2>DANH MỤC TIN TỨC</h2>
                <ul class="list-items-footer">
                    @foreach ($arrayCategory as $itemCategory)
                    @if ($itemCategory->CategoryPost->count() > 0)
                    <li class="items">
                        <a href="{{ route('homecategory', $itemCategory->category_slug) }}">{{ $itemCategory->category_name }}</a>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
            <!-- End block footer 2 -->

            <!-- Block footer 3 -->
            <div class="col-md-4 content-left">
                <img src="{{ asset('images/logo2.gif') }}" width="100%">
            </div>
            <!-- End block footer 3 -->

            <div class="clearfix"></div>
            <div class="copyright">
                <p>© Copyright 2018</p>
            </div>
        </div>
        <!-- End Container -->
    </div>
    <!-- End footer bottom -->
</div>
