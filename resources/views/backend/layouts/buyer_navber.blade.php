<div class="navbar-custom">
    <div class="topbar container-fluid">
        <div class="d-flex align-items-center gap-1">

            <!-- টপবার ব্র্যান্ড লোগো -->
            <div class="logo-topbar">
                <!-- লোগো লাইট ভার্সন -->
                <a href="{{url('')}}/index.html" class="logo-light">
                    <span class="logo-lg">
                        <img src="{{url('')}}/assets/images/logo.png" alt="লোগো">
                    </span>
                    <span class="logo-sm">
                        <img src="{{url('')}}/assets/images/logo-sm.png" alt="ছোট লোগো">
                    </span>
                </a>

                <!-- লোগো ডার্ক ভার্সন -->
                <a href="{{url('')}}/index.html" class="logo-dark">
                    <span class="logo-lg">
                        <img src="{{url('')}}/assets/images/logo-dark.png" alt="ডার্ক লোগো">
                    </span>
                    <span class="logo-sm">
                        <img src="{{url('')}}/assets/images/logo-sm.png" alt="ছোট লোগো">
                    </span>
                </a>
            </div>

            <!-- সাইডবার মেনু টগল বাটন -->
            <button class="button-toggle-menu">
                <i class="ri-menu-line"></i>
            </button>

            <!-- হরাইজন্টাল মেনু টগল বাটন -->
            <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>

            <!-- টপবার সার্চ ফর্ম -->
            <div class="app-search d-none d-lg-block">
                <form>
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="অনুসন্ধান...">
                        <span class="ri-search-line search-icon text-muted"></span>
                    </div>
                </form>
            </div>
        </div>

        <ul class="topbar-menu d-flex align-items-center gap-3">
            <li class="dropdown d-lg-none">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="{{url('')}}/#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <i class="ri-search-line fs-22"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                    <form class="p-3">
                        <input type="search" class="form-control" placeholder="অনুসন্ধান করুন..."
                            aria-label="অনুসন্ধান">
                    </form>
                </div>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="{{url('')}}/#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <img src="{{url('')}}/assets/images/flags/us.jpg" alt="ইউজার-ইমেজ" class="me-0 me-sm-1" height="12">
                    <span class="align-middle d-none d-lg-inline-block">ইংরেজি</span> <i
                        class="ri-arrow-down-s-line d-none d-sm-inline-block align-middle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">

                    <!-- আইটেম-->
                    <a href="{{url('')}}/javascript:void(0);" class="dropdown-item">
                        <img src="{{url('')}}/assets/images/flags/germany.jpg" alt="ইউজার-ইমেজ" class="me-1" height="12"> <span
                            class="align-middle">জার্মান</span>
                    </a>

                    <!-- আইটেম-->
                    <a href="{{url('')}}/javascript:void(0);" class="dropdown-item">
                        <img src="{{url('')}}/assets/images/flags/italy.jpg" alt="ইউজার-ইমেজ" class="me-1" height="12"> <span
                            class="align-middle">ইতালিয়ান</span>
                    </a>

                    <!-- আইটেম-->
                    <a href="{{url('')}}/javascript:void(0);" class="dropdown-item">
                        <img src="{{url('')}}/assets/images/flags/spain.jpg" alt="ইউজার-ইমেজ" class="me-1" height="12"> <span
                            class="align-middle">স্প্যানিশ</span>
                    </a>

                    <!-- আইটেম-->
                    <a href="{{url('')}}/javascript:void(0);" class="dropdown-item">
                        <img src="{{url('')}}/assets/images/flags/russia.jpg" alt="ইউজার-ইমেজ" class="me-1" height="12"> <span
                            class="align-middle">রুশ</span>
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="{{url('')}}/#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <i class="ri-mail-line fs-22"></i>
                    <span class="noti-icon-badge badge text-bg-purple">৪</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                    <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0 fs-16 fw-semibold"> বার্তাসমূহ</h6>
                            </div>
                            <div class="col-auto">
                                <a href="{{url('')}}/javascript: void(0);" class="text-dark text-decoration-underline">
                                    <small>সব মুছুন</small>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div style="max-height: 300px;" data-simplebar>

                        <!-- আইটেম-->
                        <a href="{{url('')}}/javascript:void(0);"
                            class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon">
                                            <img src="{{url('')}}/assets/images/users/avatar-1.jpg" class="img-fluid rounded-circle"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold fs-14">ক্রিস্টিনা প্রাইড <small
                                                class="fw-normal text-muted float-end ms-1">১ দিন আগে</small></h5>
                                        <small class="noti-item-subtitle text-muted">হাই, কেমন আছেন? আমাদের পরবর্তী মিটিং নিয়ে কী ভাবছেন</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- আইটেম-->
                        <a href="{{url('')}}/javascript:void(0);"
                            class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon">
                                            <img src="{{url('')}}/assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold fs-14">স্যাম গ্যারেট <small
                                                class="fw-normal text-muted float-end ms-1">২ দিন আগে</small></h5>
                                        <small class="noti-item-subtitle text-muted">হ্যাঁ, সবকিছু ঠিক আছে</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- আইটেম-->
                        <a href="{{url('')}}/javascript:void(0);"
                            class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon">
                                            <img src="{{url('')}}/assets/images/users/avatar-3.jpg" class="img-fluid rounded-circle"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold fs-14">কারেন রবিনসন <small
                                                class="fw-normal text-muted float-end ms-1">২ দিন আগে</small></h5>
                                        <small class="noti-item-subtitle text-muted">বাহ! দারুণ তো</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- আইটেম-->
                        <a href="{{url('')}}/javascript:void(0);"
                            class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon">
                                            <img src="{{url('')}}/assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold fs-14">শেরি মার্শাল <small
                                                class="fw-normal text-muted float-end ms-1">৩ দিন আগে</small></h5>
                                        <small class="noti-item-subtitle text-muted">হাই, কেমন আছেন? আমাদের পরবর্তী মিটিং নিয়ে কী ভাবছেন</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- আইটেম-->
                        <a href="{{url('')}}/javascript:void(0);"
                            class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon">
                                            <img src="{{url('')}}/assets/images/users/avatar-5.jpg" class="img-fluid rounded-circle"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold fs-14">শন মিলার্ড <small
                                                class="fw-normal text-muted float-end ms-1">৪ দিন আগে</small></h5>
                                        <small class="noti-item-subtitle text-muted">হ্যাঁ, সবকিছু ঠিক আছে</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- সবগুলো দেখুন-->
                    <a href="{{url('')}}/javascript:void(0);"
                        class="dropdown-item text-center text-primary text-decoration-underline fw-bold notify-item border-top border-light py-2">
                        সবগুলো দেখুন
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="{{url('')}}/#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <i class="ri-notification-3-line fs-22"></i>
                    <span class="noti-icon-badge badge text-bg-pink">৩</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                    <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0 fs-16 fw-semibold"> নোটিফিকেশন</h6>
                            </div>
                            <div class="col-auto">
                                <a href="{{url('')}}/javascript: void(0);" class="text-dark text-decoration-underline">
                                    <small>সব মুছুন</small>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div style="max-height: 300px;" data-simplebar>
                        <!-- আইটেম-->
                        <a href="{{url('')}}/javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-primary-subtle">
                                <i class="mdi mdi-comment-account-outline text-primary"></i>
                            </div>
                            <p class="notify-details">ক্যালেব ফ্ল্যাকেলার অ্যাডমিনে মন্তব্য করেছেন
                                <small class="noti-time">১ মিনিট আগে</small>
                            </p>
                        </a>

                        <!-- আইটেম-->
                        <a href="{{url('')}}/javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-warning-subtle">
                                <i class="mdi mdi-account-plus text-warning"></i>
                            </div>
                            <p class="notify-details">নতুন ইউজার রেজিস্টার করেছেন
                                <small class="noti-time">৫ ঘন্টা আগে</small>
                            </p>
                        </a>

                        <!-- আইটেম-->
                        <a href="{{url('')}}/javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-danger-subtle">
                                <i class="mdi mdi-heart text-danger"></i>
                            </div>
                            <p class="notify-details">কার্লোস ক্রাউচ লাইক করেছেন
                                <small class="noti-time">৩ দিন আগে</small>
                            </p>
                        </a>

                        <!-- আইটেম-->
                        <a href="{{url('')}}/javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-pink-subtle">
                                <i class="mdi mdi-comment-account-outline text-pink"></i>
                            </div>
                            <p class="notify-details">ক্যালেব ফ্ল্যাকেলার অ্যাডমিনে মন্তব্য করেছেন
                                <small class="noti-time">৪ দিন আগে</small>
                            </p>
                        </a>

                        <!-- আইটেম-->
                        <a href="{{url('')}}/javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-purple-subtle">
                                <i class="mdi mdi-account-plus text-purple"></i>
                            </div>
                            <p class="notify-details">নতুন ইউজার রেজিস্টার করেছেন
                                <small class="noti-time">৭ দিন আগে</small>
                            </p>
                        </a>

                        <!-- আইটেম-->
                        <a href="{{url('')}}/javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-success-subtle">
                                <i class="mdi mdi-heart text-success"></i>
                            </div>
                            <p class="notify-details">কার্লোস ক্রাউচ <b>অ্যাডমিনকে</b> লাইক করেছেন
                                <small class="noti-time">কার্লোস ক্রাউচ লাইক করেছেন</small>
                            </p>
                        </a>
                    </div>

                    <!-- সবগুলো দেখুন-->
                    <a href="{{url('')}}/javascript:void(0);"
                        class="dropdown-item text-center text-primary text-decoration-underline fw-bold notify-item border-top border-light py-2">
                        সবগুলো দেখুন
                    </a>

                </div>
            </li>

            <li class="d-none d-sm-inline-block">
                <a class="nav-link" data-bs-toggle="offcanvas" href="{{url('')}}/#theme-settings-offcanvas">
                    <i class="ri-settings-3-line fs-22"></i>
                </a>
            </li>

            <li class="d-none d-sm-inline-block">
                <div class="nav-link" id="light-dark-mode">
                    <i class="ri-moon-line fs-22"></i>
                </div>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle arrow-none nav-user" data-bs-toggle="dropdown" href="{{url('')}}/#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <span class="account-user-avatar">
                        <img src="{{url('')}}/assets/images/users/avatar-1.jpg" alt="ইউজার-ইমেজ" width="32" class="rounded-circle">
                    </span>
                    <span class="d-lg-block d-none">
                        <h5 class="my-0 fw-normal">থমসন <i
                                class="ri-arrow-down-s-line d-none d-sm-inline-block align-middle"></i></h5>
                    </span>
                </a>
                <form action="{{route('buyer.logout')}}" method="POST">
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                    <!-- আইটেম-->
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">স্বাগতম !</h6>
                    </div>

                    <!-- আইটেম-->
                    <a href="{{url('')}}/pages-profile.html" class="dropdown-item">
                        <i class="ri-account-circle-line fs-18 align-middle me-1"></i>
                        <span>আমার অ্যাকাউন্ট</span>
                    </a>

                    <!-- আইটেম-->
                    <a href="{{url('')}}/pages-profile.html" class="dropdown-item">
                        <i class="ri-settings-4-line fs-18 align-middle me-1"></i>
                        <span>সেটিংস</span>
                    </a>

                    <!-- আইটেম-->
                    <a href="{{url('')}}/pages-faq.html" class="dropdown-item">
                        <i class="ri-customer-service-2-line fs-18 align-middle me-1"></i>
                        <span>সাপোর্ট</span>
                    </a>

                    <!-- আইটেম-->
                    <a href="{{url('')}}/auth-lock-screen.html" class="dropdown-item">
                        <i class="ri-lock-password-line fs-18 align-middle me-1"></i>
                        <span>লক স্ক্রিন</span>
                    </a>

                    <!-- আইটেম-->
                    <button class="dropdown-item">
                        <i class="ri-logout-box-line fs-18 align-middle me-1"></i>
                        <span>
                        @csrf
                        লগআউট
                    </span>
                    </button>
                </div>
                </form>
            </li>
        </ul>
    </div>
</div>