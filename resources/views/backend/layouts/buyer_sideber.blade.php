<div class="leftside-menu">

    <!-- ব্র্যান্ড লোগো লাইট ভার্সন -->
    <a href="{{url('')}}/index.html" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{url('')}}/assets/images/logo.png" alt="লোগো">
        </span>
        <span class="logo-sm">
            <img src="{{url('')}}/assets/images/logo-sm.png" alt="ছোট লোগো">
        </span>
    </a>

    <!-- ব্র্যান্ড লোগো ডার্ক ভার্সন -->
    <a href="{{url('')}}/index.html" class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{url('')}}/assets/images/logo-dark.png" alt="ডার্ক লোগো">
        </span>
        <span class="logo-sm">
            <img src="{{url('')}}/assets/images/logo-sm.png" alt="ছোট লোগো">
        </span>
    </a>

    <!-- সাইডবার - বাম পাশের মেনু -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!--- সাইডমেনু -->
        <ul class="side-nav">

            <li class="side-nav-title">ক্রেতা</li>

            <li class="side-nav-item">
                <a href="{{url('buyer/dashboard')}}" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span class="badge bg-success float-end"></span>
                    <span> ড্যাশবোর্ড </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('buyer.orders')}}" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span class="badge bg-success float-end"></span>
                    <span> অর্ডারসমূহ </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('buyer.rfq')}}" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span class="badge bg-success float-end"></span>
                    <span> কোটেশনসমূহ </span>
                </a>
            </li>

        </ul>
        <!--- সাইডমেনু শেষ -->

        <div class="clearfix"></div>
    </div>
</div>