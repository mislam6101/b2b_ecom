<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="{{url('')}}/index.html" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{url('')}}/assets/images/logo.png" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="{{url('')}}/assets/images/logo-sm.png" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="{{url('')}}/index.html" class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{url('')}}/assets/images/logo-dark.png" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="{{url('')}}/assets/images/logo-sm.png" alt="small logo">
        </span>
    </a>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">Admin</li>

            <li class="side-nav-item">
                <a href="{{route('dashboard')}}" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span class="badge bg-success float-end"></span>
                    <span> Dashboard </span>
                </a>
            </li>
            @if(Auth::guard('web')->check())
            <li class="side-nav-item">
                <a href="{{route('admin.products')}}" class="side-nav-link">
                    <i class="ri-pages-line"></i>
                    <span class="badge bg-success float-end"></span>
                    <span> Products </span>
                </a>
            </li>
            @endif
            <li class="side-nav-item">
                <a href="{{route('seller.index')}}" class="side-nav-link">
                    <i class="ri-donut-chart-fill"></i>
                    <span class="badge bg-success float-end"></span>
                    <span> Sellers </span>
                </a>
            </li>
        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>