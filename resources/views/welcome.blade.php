<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>BizConnect Pro - সম্পূর্ণ রেসপনসিভ B2B মার্কেটপ্লেস</title>
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f4f7fc;
            color: #1e293b;
            line-height: 1.5;
        }

        .container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* রেসপনসিভ ব্রেকপয়েন্ট */
        :root {
            --primary: #0b2b4f;
            --primary-dark: #061a30;
            --primary-light: #1e4a7a;
            --accent: #f6b83e;
            --accent-dark: #e5a42e;
            --success: #2e7d32;
            --danger: #d32f2f;
            --gray-50: #f8fafc;
            --gray-100: #f1f5f9;
            --gray-200: #e2e8f0;
            --gray-300: #cbd5e1;
            --gray-600: #475569;
            --gray-800: #1e293b;
        }

        /* === টপ বার - মোবাইল ফ্রেন্ডলি === */
        .top-bar {
            background: var(--primary-dark);
            color: white;
            padding: 8px 0;
            font-size: 0.8rem;
        }

        .top-bar .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .top-links {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .top-links a {
            color: #cbd5e1;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .top-contact {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .top-contact span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* === মেইন নেভিগেশন - মোবাইল মেনু === */
        .main-nav {
            background: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 12px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .logo-icon {
            font-size: 1.5rem;
            background: var(--accent);
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
        }

        .logo-text h2 {
            font-size: 1.2rem;
            font-weight: 800;
            color: var(--primary);
        }

        .logo-text span {
            display: none;
        }

        /* মোবাইল মেনু বাটন */
        .mobile-menu-btn {
            display: none;
            font-size: 1.8rem;
            color: var(--primary);
            cursor: pointer;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .nav-links {
            display: flex;
            gap: 20px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--gray-800);
            font-weight: 600;
            font-size: 0.95rem;
            position: relative;
        }

        .badge {
            position: absolute;
            top: -8px;
            right: -12px;
            background: var(--accent);
            color: var(--primary-dark);
            font-size: 0.6rem;
            padding: 2px 6px;
            border-radius: 20px;
        }

        .nav-buttons {
            display: flex;
            gap: 8px;
        }

        .btn-outline {
            border: 2px solid var(--primary);
            background: transparent;
            color: var(--primary);
            padding: 8px 16px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            white-space: nowrap;
        }

        .btn-primary {
            background: var(--primary);
            border: none;
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            white-space: nowrap;
        }

        /* === হিরো সেকশন - পৃষ্ঠার মাঝখানে === */
        .hero {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white;
            padding: 60px 0;
            margin: 40px 0;
            border-radius: 30px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .hero-content {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }

        .hero-content h1 {
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero-content h1 span {
            color: var(--accent);
            border-bottom: 3px solid var(--accent);
            display: inline-block;
            padding-bottom: 5px;
        }

        .hero-content p {
            font-size: clamp(1rem, 3vw, 1.2rem);
            margin-bottom: 30px;
            opacity: 0.9;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }

        .hero-stats {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            justify-content: center;
            margin-top: 30px;
        }

        .stat-item h3 {
            font-size: clamp(1.5rem, 4vw, 2rem);
            color: var(--accent);
        }

        /* === ক্যাটাগরি সেকশন - রেসপনসিভ গ্রিড === */
        .categories {
            padding: 50px 0;
        }

        .section-header {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            gap: 15px;
        }

        .section-header h2 {
            font-size: clamp(1.5rem, 4vw, 2.5rem);
            color: var(--primary);
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            gap: 15px;
        }

        .category-card {
            background: white;
            padding: 20px 10px;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: 0.3s;
            cursor: pointer;
        }

        .category-card i {
            font-size: clamp(1.5rem, 4vw, 2.5rem);
            color: var(--accent);
            margin-bottom: 10px;
        }

        .category-card h4 {
            font-size: 0.8rem;
        }

        /* === ফিল্টার - আগের মতো ঠিক করা হয়েছে === */
        .filter-advanced {
            background: white;
            border-radius: 24px;
            padding: 20px;
            margin: 30px 0;
        }

        .filter-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }

        .filter-field label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            font-size: 0.85rem;
            color: var(--gray-600);
        }

        .filter-field input,
        .filter-field select {
            width: 100%;
            padding: 10px 12px;
            border: 2px solid var(--gray-200);
            border-radius: 12px;
            font-size: 0.9rem;
        }

        .filter-field input:focus,
        .filter-field select:focus {
            border-color: var(--accent);
            outline: none;
        }

        .filter-buttons {
            display: flex;
            gap: 10px;
            grid-column: span 2;
        }

        .btn-filter,
        .btn-reset {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            cursor: pointer;
        }

        .btn-filter {
            background: var(--accent);
            color: var(--primary-dark);
        }

        .btn-reset {
            background: var(--gray-200);
        }

        /* === প্রোডাক্ট গ্রিড - ফুল রেসপনসিভ === */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
            margin: 40px 0;
        }

        .product-card {
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
            position: relative;
        }

        .product-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            background: var(--accent);
            color: var(--primary-dark);
            padding: 4px 12px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 0.7rem;
            z-index: 2;
        }

        .product-badge.verified {
            background: var(--success);
            color: white;
            left: auto;
            right: 12px;
        }

        .product-image {
            height: 160px;
            background: linear-gradient(135deg, #e2e8f0, #cbd5e1);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-image i {
            font-size: 3.5rem;
            color: #64748b;
        }

        .product-content {
            padding: 18px;
        }

        .product-title {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .product-supplier {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 0.85rem;
            color: var(--gray-600);
            margin-bottom: 12px;
            flex-wrap: wrap;
        }

        .product-price-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-top: 1px dashed var(--gray-200);
            border-bottom: 1px dashed var(--gray-200);
            margin: 12px 0;
        }

        .unit-price small,
        .wholesale-price small {
            display: block;
            font-size: 0.7rem;
            color: var(--gray-600);
        }

        .wholesale-price span {
            font-weight: 800;
            color: var(--primary);
            font-size: 1.1rem;
        }

        .product-moq {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 0.85rem;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }

        .product-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
        }

        .btn-detail,
        .btn-rfq {
            padding: 10px;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.85rem;
            cursor: pointer;
        }

        .btn-detail {
            background: var(--gray-200);
        }

        .btn-rfq {
            background: var(--accent);
            color: var(--primary-dark);
        }

        /* === অর্ডার টেবিল - হরাইজন্টাল স্ক্রল === */
        .order-section {
            background: white;
            border-radius: 24px;
            padding: 20px;
            margin: 40px 0;
        }

        .order-tabs {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
            border-bottom: 2px solid var(--gray-200);
            padding-bottom: 15px;
        }

        .tab {
            padding: 8px 16px;
            background: var(--gray-100);
            border-radius: 30px;
            font-size: 0.85rem;
            font-weight: 600;
            cursor: pointer;
            white-space: nowrap;
        }

        .tab.active {
            background: var(--primary);
            color: white;
        }

        .order-table-container {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        table {
            min-width: 800px;
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: var(--gray-100);
            padding: 15px;
            text-align: left;
            font-weight: 700;
            color: var(--primary);
        }

        td {
            padding: 12px 15px;
            border-bottom: 1px solid var(--gray-200);
        }

        .order-status {
            padding: 4px 12px;
            border-radius: 30px;
            font-size: 0.75rem;
            font-weight: 600;
            display: inline-block;
        }

        .status-pending {
            background: #fff3e0;
            color: #ed6c02;
        }

        .status-confirmed {
            background: #e8f5e9;
            color: #2e7d32;
        }

        /* === ড্যাশবোর্ড - রেসপনসিভ গ্রিড === */
        .dashboard-panel {
            background: white;
            border-radius: 30px;
            padding: 25px;
            margin: 40px 0;
        }

        .welcome-message {
            background: linear-gradient(135deg, var(--primary-light), var(--primary));
            color: white;
            padding: 25px;
            border-radius: 20px;
            margin-bottom: 30px;
        }

        .welcome-message h3 {
            font-size: clamp(1.2rem, 4vw, 1.8rem);
            margin-bottom: 5px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
        }

        .stat-card {
            background: var(--gray-50);
            padding: 20px;
            border-radius: 20px;
            text-align: center;
        }

        .stat-card i {
            font-size: 2rem;
            color: var(--accent);
            margin-bottom: 10px;
        }

        .stat-card h4 {
            font-size: 1.8rem;
            color: var(--primary);
        }

        /* === অথ সেকশন - স্ট্যাকড অন মোবাইল === */
        .auth-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin: 50px 0;
        }

        .auth-card {
            background: white;
            border-radius: 30px;
            padding: 30px 20px;
        }

        .auth-card h2 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .role-selector {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 20px 0;
        }

        .role-btn {
            flex: 1;
            min-width: 80px;
            padding: 12px;
            background: var(--gray-100);
            border-radius: 20px;
            text-align: center;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
        }

        .role-btn.active {
            background: var(--accent);
            color: var(--primary-dark);
        }

        /* === ফুটার - রেসপনসিভ === */
        footer {
            background: var(--primary-dark);
            color: white;
            padding: 50px 0 20px;
            margin-top: 50px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .social-links {
            display: flex;
            gap: 12px;
            margin-top: 15px;
        }

        .social-links a {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: var(--gray-300);
            text-decoration: none;
            font-size: 0.9rem;
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.85rem;
        }

        /* === টোস্ট মেসেজ - মোবাইল ফ্রেন্ডলি === */
        .message-center {
            position: fixed;
            bottom: 20px;
            right: 20px;
            left: 20px;
            max-width: 350px;
            z-index: 9999;
            pointer-events: none;
        }

        .toast {
            background: white;
            padding: 15px 20px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-left: 4px solid var(--success);
            pointer-events: auto;
        }

        .toast.error {
            border-left-color: var(--danger);
        }

        /* === মিডিয়া ক্যোয়ারী - মোবাইল স্পেসিফিক === */
        @media (max-width: 992px) {
            .nav-links {
                display: none;
            }

            .mobile-menu-btn {
                display: block;
            }

            .nav-buttons .btn-outline,
            .nav-buttons .btn-primary {
                padding: 6px 12px;
                font-size: 0.8rem;
            }
        }

        @media (max-width: 768px) {
            .top-bar .container {
                flex-direction: column;
                align-items: flex-start;
            }

            .hero-content {
                padding: 0 20px;
            }

            .filter-buttons {
                grid-column: auto;
            }

            .product-actions {
                grid-template-columns: 1fr;
            }

            .welcome-message {
                text-align: center;
            }

            .hero-stats {
                gap: 20px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 15px;
            }

            .category-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .category-card h4 {
                font-size: 0.7rem;
            }

            .nav-buttons {
                gap: 4px;
            }

            .btn-outline,
            .btn-primary {
                padding: 6px 10px;
                font-size: 0.7rem;
            }

            .logo-text h2 {
                font-size: 1rem;
            }

            .stats-grid {
                grid-template-columns: 1fr 1fr;
            }

            .message-center {
                left: 15px;
                right: 15px;
                max-width: none;
            }
        }

        .nav-buttons a.btn-outline,
        .nav-buttons a.btn-primary {
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.9rem;
            padding: 6px 16px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            transition: 0.3s;
        }

        .nav-buttons a.btn-outline {
            background: transparent;
            border: 2px solid #0b2b4f;
            color: #0b2b4f;
        }

        .nav-buttons a.btn-outline:hover {
            background: #0b2b4f;
            color: white;
        }

        .nav-buttons a.btn-primary {
            background: #0b2b4f;
            color: white;
        }

        .nav-buttons a.btn-primary:hover {
            background: #061a30;
        }

        /* টেস্টিমনিয়াল সেকশন */
        .testimonials {
            padding: 50px 0;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .testimonial-card {
            background: white;
            padding: 25px;
            border-radius: 24px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }

        .testimonial-card i {
            color: var(--accent);
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 20px;
        }

        .author-avatar {
            width: 45px;
            height: 45px;
            background: var(--gray-200);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <!-- টপ বার -->
    <div class="top-bar">
        <div class="container">
            <div class="top-links">
                <a href="#"><i class="fas fa-globe"></i> <span>আন্তর্জাতিক</span></a>
                <a href="#"><i class="fas fa-truck"></i> <span>ট্র্যাক</span></a>
                <a href="#"><i class="fas fa-headset"></i> <span>সাপোর্ট</span></a>
            </div>
            <div class="top-contact">
                <span><i class="fas fa-phone-alt"></i> +৮৮০ ১৯৬৬-৭৭৮৮১১</span>
                <span><i class="fas fa-envelope"></i> b2b@bizconnect.com</span>
            </div>
        </div>
    </div>

    <!-- মেইন নেভি - মোবাইল মেনু সহ -->
    <nav class="main-nav">
        <div class="container nav-container">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <div class="logo-text">
                    <h2>BizConnect</h2>
                    <span>এন্টারপ্রাইজ B2B</span>
                </div>
            </div>

            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>

            <div class="nav-menu">
                <div class="nav-links">
                    <a href="#">হোম</a>
                    <a href="{{route('prod.index')}}">পণ্যসমূহ</a>
                </div>
                <div class="nav-buttons">
                    @auth('buyer')
                    <a href="{{ url('buyer/dashboard') }}" class="btn btn-primary">
                        ড্যাশবোর্ড
                    </a>
                    @else
                    <a href="{{ route('init.login') }}" class="btn btn-outline">
                        লগইন
                    </a>
                    <a href="{{ route('init.reg') }}" class="btn btn-primary">
                        রেজিস্ট্রেশন
                    </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- হিরো সেকশন - পৃষ্ঠার মাঝখানে -->
    <div class="container">
        <section class="hero">
            <div class="hero-content">
                <h1>বিশ্বস্ত সরবরাহকারীদের কাছ থেকে পাইকারি পণ্য সংগ্রহ করুন</h1>
                <p>সরাসরি প্রস্তুতকারক ও সরবরাহকারীদের সাথে যুক্ত হয়ে সহজে এবং নিরাপদে পাইকারি পণ্য ক্রয় করুন।</p>
                <div class="hero-buttons">
                    <button class="btn-primary" style="background: var(--accent); color: var(--primary-dark);">পণ্য দেখুন</button>
                    <button class="btn-outline" style="border-color: white; color: white;">কোটেশন অনুরোধ</button>
                </div>
                <div class="hero-stats">
                    <div class="stat-item">
                        <h3>৫০০০+</h3>
                        <p>সরবরাহকারী</p>
                    </div>
                    <div class="stat-item">
                        <h3>২৫০০০+</h3>
                        <p>পণ্য</p>
                    </div>
                    <div class="stat-item">
                        <h3>১৫০০+</h3>
                        <p>দৈনিক লেনদেন</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container">
        <!-- ফিল্টার - আগের মতো ঠিক করা হয়েছে -->
        <form action="{{route('index')}}" method="GET" id="filterForm">
            <div class="filter-advanced">
                <div class="filter-row">
                    <div class="filter-field">
                        <label>পণ্যের নাম</label>
                        <input type="text" name="name" value="{{ request('name') }}" placeholder="পণ্যের নাম লিখুন">
                    </div>
                    <div class="filter-field">
                        <label>মূল্য সীমা</label>
                        <input type="number" name="min_price" value="{{ request('min_price') }}" placeholder="সর্বনিম্ন">
                    </div>
                    <div class="filter-field">
                        <label>MOQ</label>
                        <input type="number" name="moq" value="{{ request('moq') }}" placeholder="ন্যূনতম অর্ডার">
                    </div>
                    <div class="filter-field">
                        <label>সরবরাহকারীর ধরণ</label>
                        <select name="supplier_type">
                            <option value="">যেকোনো</option>
                            <option value="manufacturer" {{ request('supplier_type') == 'manufacturer' ? 'selected' : '' }}>প্রস্তুতকারক</option>
                            <option value="wholesaler" {{ request('supplier_type') == 'wholesaler' ? 'selected' : '' }}>পাইকারি বিক্রেতা</option>
                        </select>
                    </div>
                    <div class="filter-buttons">
                        <button type="submit" class="btn-filter">ফিল্টার</button>
                        <button type="button" class="btn-reset" onclick="resetFilter()">রিসেট</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- প্রোডাক্ট গ্রিড -->
        <div class="section-header">
            <h2>ভেরিফাইড পণ্যসমূহ</h2>
            <a href="#" style="color: var(--primary);">সব পণ্য →</a>
        </div>
        <div class="product-grid">
            @foreach($products as $p)
            @if($p->status == 1)
            <div class="product-card">
                <div class="product-badge">ভেরিফাইড</div>
                <div class="product-image">
                    <img src="{{ asset('storage/products/'.$p->image) }}" alt="{{ $p->name }}">
                </div>
                <div class="product-content">
                    <h3 class="product-title">{{$p->name}}</h3>
                    <div class="product-supplier">
                        <i class="fas fa-store"></i>
                        <span>{{$p->seller->company}}</span>
                    </div>
                    <div class="product-price-row">
                        <div class="unit-price">
                            <small>একক মূল্য</small>
                            <span>৳{{$p->price}}</span>
                        </div>
                        <div class="wholesale-price">
                            <small>পাইকারি</small>
                            <span>৳{{ number_format($p->price * 0.97, 2) }}</span>
                        </div>
                    </div>
                    <div class="product-moq">
                        <i class="fas fa-boxes"></i>
                        <span>MOQ: {{$p->moq}} ইউনিট</span>
                    </div>
                    <div class="product-actions">
                        <button class="btn-detail">বিস্তারিত</button>
                        <button class="btn-rfq">কোটেশন</button>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>

        <!-- টেস্টিমনিয়াল সেকশন -->
        <div class="testimonials">
            <div class="section-header">
                <h2>আমাদের ক্রেতারা কী বলছেন</h2>
                <a href="#" style="color: var(--primary);">সব রিভিউ →</a>
            </div>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <i class="fas fa-quote-left"></i>
                    <p>"BizConnect এর মাধ্যমে আমরা আমাদের সরবরাহ চেইন অনেক সহজ করে ফেলেছি। মানসম্মত সরবরাহকারী পেতে খুব বেশি সময় লাগে না।"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <h4>মোঃ করিম</h4>
                            <p style="color: var(--gray-600); font-size: 0.8rem;">গার্মেন্টস এক্সপোর্টার</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <i class="fas fa-quote-left"></i>
                    <p>"পাইকারি মার্কেটপ্লেসের মধ্যে সবচেয়ে পেশাদার প্ল্যাটফর্ম। কোটেশন সিস্টেম এবং অর্ডার ম্যানেজমেন্ট অসাধারণ।"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <h4>সারা হোসেন</h4>
                            <p style="color: var(--gray-600); font-size: 0.8rem;">টেক ইম্পোর্টার</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ফুটার -->
    <footer>
        <div class="container footer-grid">
            <div class="footer-about">
                <div class="logo" style="margin-bottom: 15px;">
                    <div class="logo-icon" style="background: var(--accent);">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div class="logo-text">
                        <h2 style="color: white;">BizConnect</h2>
                    </div>
                </div>
                <p style="color: var(--gray-300); font-size: 0.9rem;">বাংলাদেশের প্রথম এন্টারপ্রাইজ-গ্রেড B2B মার্কেটপ্লেস।</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <h4>কুইক লিংক</h4>
                <ul>
                    <li><a href="#">আমাদের সম্পর্কে</a></li>
                    <li><a href="#">সরবরাহকারী তালিকা</a></li>
                    <li><a href="#">কোটেশন অনুরোধ</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>সাপোর্ট</h4>
                <ul>
                    <li><a href="#">হেল্প সেন্টার</a></li>
                    <li><a href="#">প্রাইভেসি পলিসি</a></li>
                    <li><a href="#">এফএকিউ</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>যোগাযোগ</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> ঢাকা, বাংলাদেশ</li>
                    <li><i class="fas fa-phone"></i> +৮৮০ ১৯৬৬-৭৭৮৮১১</li>
                </ul>
            </div>
        </div>
        <div class="container copyright">
            <p>© ২০২৬ BizConnect Pro - সর্বস্বত্ব সংরক্ষিত।</p>
        </div>
    </footer>

    <!-- মেসেজ সেন্টার -->
    <div class="message-center" id="messageCenter"></div>

    <script>
        // টোস্ট মেসেজ ফাংশন
        function showToast(message, type = 'success') {
            const center = document.getElementById('messageCenter');
            const toast = document.createElement('div');
            toast.className = `toast ${type}`;
            toast.innerHTML = `
                <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'}" style="color: ${type === 'success' ? '#2e7d32' : '#d32f2f'};"></i>
                <div>
                    <strong>${type === 'success' ? 'সফল!' : 'ত্রুটি!'}</strong>
                    <p style="margin:0; font-size:0.85rem;">${message}</p>
                </div>
            `;
            center.appendChild(toast);
            setTimeout(() => toast.remove(), 3000);
        }

        // রিসেট ফাংশন
        function resetFilter() {
            window.location.href = "{{ route('index') }}";
        }

        // সব বাটনে ক্লিক ইভেন্ট
        document.addEventListener('DOMContentLoaded', function() {
            // ফিল্টার বাটন
            document.querySelector('.btn-filter')?.addEventListener('click', function(e) {
                // ফর্ম স্বাভাবিকভাবে submit হবে
                showToast('ফিল্টার প্রয়োগ করা হয়েছে।', 'success');
            });

            // ক্যাটাগরি কার্ড
            document.querySelectorAll('.category-card').forEach(card => {
                card.addEventListener('click', function() {
                    const cat = this.querySelector('h4')?.textContent;
                    showToast(`${cat} ক্যাটাগরির পণ্য দেখানো হচ্ছে।`, 'success');
                });
            });

            // মোবাইল মেনু
            document.querySelector('.mobile-menu-btn')?.addEventListener('click', function() {
                const navMenu = document.querySelector('.nav-menu');
                if (navMenu.style.display === 'flex') {
                    navMenu.style.display = 'none';
                } else {
                    navMenu.style.display = 'flex';
                    navMenu.style.flexDirection = 'column';
                    navMenu.style.position = 'absolute';
                    navMenu.style.top = '70px';
                    navMenu.style.left = '0';
                    navMenu.style.right = '0';
                    navMenu.style.background = 'white';
                    navMenu.style.padding = '20px';
                    navMenu.style.boxShadow = '0 10px 20px rgba(0,0,0,0.1)';
                }
            });
        });
    </script>
</body>

</html>