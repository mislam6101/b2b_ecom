<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <title>পণ্যের বিবরণ | BizConnect Pro</title>
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f8fafc;
            color: #1e293b;
            overflow-x: hidden;
        }

        .container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        :root {
            --primary: #0b2b4f;
            --primary-dark: #061a30;
            --primary-light: #1e4a7a;
            --accent: #f6b83e;
            --accent-dark: #e5a42e;
            --success: #2e7d32;
            --danger: #d32f2f;
            --warning: #ed6c02;
            --gray-50: #f8fafc;
            --gray-100: #f1f5f9;
            --gray-200: #e2e8f0;
            --gray-300: #cbd5e1;
            --gray-600: #475569;
            --gray-800: #1e293b;
        }

        /* === রেসপনসিভ নেভিগেশন === */
        .main-nav {
            background: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 12px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            width: 100%;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .logo-icon {
            background: var(--accent);
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            font-size: 1.2rem;
            color: var(--primary);
        }

        .logo-text h2 {
            font-size: 1.2rem;
            font-weight: 800;
            color: var(--primary);
        }

        /* মোবাইল মেনু */
        .mobile-menu-btn {
            display: none;
            font-size: 1.8rem;
            color: var(--primary);
            cursor: pointer;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .nav-links {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--gray-800);
            font-weight: 600;
            font-size: 0.95rem;
            white-space: nowrap;
        }

        .nav-buttons {
            display: flex;
            gap: 8px;
        }

        .btn-outline {
            border: 2px solid var(--primary);
            background: transparent;
            color: var(--primary);
            padding: 6px 16px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            white-space: nowrap;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            border: none;
            padding: 6px 20px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            white-space: nowrap;
        }

        .btn-outline,
        .btn-primary {
            text-decoration: none;
            /* Underline remove করবে */
            display: inline-block;
            /* button এর মতো block */
            text-align: center;
        }

        /* === রেসপনসিভ ব্রেডক্রাম্ব === */
        .breadcrumb {
            padding: 20px 0 15px;
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            align-items: center;
            color: var(--gray-600);
            font-size: 0.9rem;
        }

        .breadcrumb a {
            color: var(--primary);
            text-decoration: none;
        }

        .breadcrumb i {
            font-size: 0.7rem;
            color: var(--gray-400);
        }

        /* === পণ্য বিবরণ - সম্পূর্ণ রেসপনসিভ === */
        .product-details {
            background: white;
            border-radius: 24px;
            padding: 20px;
            margin: 15px 0 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.03);
        }

        /* ডেস্কটপে ২ কলাম, মোবাইলে ১ কলাম */
        .details-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        /* === ইমেজ গ্যালারি - রেসপনসিভ === */
        .image-gallery {
            position: relative;
        }

        .main-image {
            width: 100%;
            aspect-ratio: 1/1;
            max-height: 450px;
            background: linear-gradient(135deg, #e2e8f0, #cbd5e1);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            position: relative;
        }

        .main-image i {
            font-size: clamp(4rem, 15vw, 8rem);
            color: #64748b;
        }

        .badge-large {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--accent);
            color: var(--primary-dark);
            padding: 5px 15px;
            border-radius: 40px;
            font-weight: 700;
            font-size: 0.9rem;
        }

        .badge-verified {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--success);
            color: white;
            padding: 5px 15px;
            border-radius: 40px;
            font-weight: 700;
            font-size: 0.9rem;
        }

        .thumbnail-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }

        .thumbnail {
            aspect-ratio: 1/1;
            background: var(--gray-200);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: 0.3s;
            border: 2px solid transparent;
        }

        .thumbnail:hover {
            border-color: var(--accent);
        }

        .thumbnail.active {
            border-color: var(--primary);
        }

        .thumbnail i {
            font-size: clamp(1rem, 4vw, 2rem);
            color: var(--gray-600);
        }

        /* === পণ্যের তথ্য - রেসপনসিভ === */
        .product-info h1 {
            font-size: clamp(1.5rem, 5vw, 2.5rem);
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .supplier-info {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--gray-100);
        }

        .supplier-badge {
            display: flex;
            align-items: center;
            gap: 8px;
            background: var(--gray-50);
            padding: 8px 16px;
            border-radius: 40px;
            font-size: 0.9rem;
        }

        .rating {
            display: flex;
            align-items: center;
            gap: 5px;
            color: var(--accent);
            flex-wrap: wrap;
        }

        /* === প্রাইসিং কার্ড - রেসপনসিভ === */
        .pricing-card {
            background: linear-gradient(135deg, var(--gray-50), white);
            border: 2px solid var(--gray-200);
            border-radius: 24px;
            padding: 20px;
            margin: 20px 0;
        }

        .price-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 15px;
            margin-bottom: 20px;
        }

        .price-box {
            text-align: center;
            padding: 10px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
        }

        .price-box .label {
            color: var(--gray-600);
            font-size: 0.8rem;
            margin-bottom: 5px;
        }

        .price-box .value {
            font-weight: 800;
            font-size: clamp(1.2rem, 4vw, 1.8rem);
        }

        .price-box .unit {
            color: var(--gray-600);
            font-size: 0.75rem;
        }

        .wholesale-box .value {
            color: var(--primary);
        }

        .moq-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
            padding: 15px 0;
            border-top: 2px dashed var(--gray-200);
            border-bottom: 2px dashed var(--gray-200);
            margin: 15px 0;
        }

        .moq-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .moq-item i {
            color: var(--accent);
            font-size: 1.1rem;
        }

        .stock-status {
            color: var(--success);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 0.9rem;
        }

        /* === অ্যাকশন বাটন - মোবাইলে স্ট্যাক === */
        .action-buttons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin: 20px 0;
        }

        .btn-buy,
        .btn-quote-large {
            padding: 14px;
            border-radius: 40px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s;
            border: none;
        }

        .btn-buy {
            background: var(--primary);
            color: white;
        }

        .btn-quote-large {
            background: var(--accent);
            color: var(--primary-dark);
        }

        .features-mini {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            color: var(--gray-600);
            font-size: 0.85rem;
        }

        /* === ট্যাব সেকশন - মোবাইলে স্ক্রলেবল === */
        .details-tabs {
            margin-top: 30px;
        }

        .tab-headers {
            display: flex;
            gap: 20px;
            border-bottom: 2px solid var(--gray-200);
            margin-bottom: 20px;
            overflow-x: auto;
            white-space: nowrap;
            padding-bottom: 5px;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
        }

        .tab-headers::-webkit-scrollbar {
            display: none;
        }

        .tab-header {
            padding: 10px 0;
            font-weight: 600;
            font-size: 0.95rem;
            color: var(--gray-600);
            cursor: pointer;
            position: relative;
        }

        .tab-header.active {
            color: var(--primary);
        }

        .tab-header.active::after {
            content: '';
            position: absolute;
            bottom: -7px;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--primary);
        }

        .tab-pane {
            display: none;
            padding: 15px 0;
        }

        .tab-pane.active {
            display: block;
        }

        /* === স্পেসিফিকেশন টেবিল - মোবাইলে স্ক্রল === */
        .specs-table {
            width: 100%;
            border-collapse: collapse;
        }

        .specs-table tr {
            border-bottom: 1px solid var(--gray-200);
        }

        .specs-table td {
            padding: 12px 10px;
            font-size: 0.9rem;
        }

        .specs-table td:first-child {
            font-weight: 700;
            color: var(--gray-600);
            width: 140px;
        }

        /* === রিভিউ সেকশন - রেসপনসিভ === */
        .review-summary {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }

        .average-rating {
            text-align: center;
            min-width: 120px;
        }

        .average-rating h2 {
            font-size: 3rem;
            color: var(--primary);
        }

        .stars {
            color: var(--accent);
            font-size: 1rem;
        }

        .progress-bars {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .progress-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
        }

        .progress-bar {
            flex: 1;
            height: 8px;
            background: var(--gray-200);
            border-radius: 10px;
        }

        .progress-fill {
            height: 100%;
            background: var(--accent);
            border-radius: 10px;
        }

        .review-card {
            background: var(--gray-50);
            padding: 20px;
            border-radius: 16px;
            margin-bottom: 15px;
        }

        .review-header {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 10px;
        }

        /* === সম্পর্কিত পণ্য - রেসপনসিভ গ্রিড === */
        .related-products {
            margin: 40px 0;
        }

        .section-header {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .section-header h2 {
            font-size: clamp(1.3rem, 4vw, 2rem);
            color: var(--primary);
        }

        .related-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .related-card {
            background: white;
            border-radius: 20px;
            padding: 15px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.03);
            transition: 0.3s;
            cursor: pointer;
        }

        .related-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        .related-image {
            aspect-ratio: 1/1;
            background: var(--gray-200);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 12px;
        }

        .related-image i {
            font-size: 2.5rem;
            color: var(--gray-600);
        }

        .related-card h4 {
            font-size: 1rem;
            margin-bottom: 8px;
        }

        .related-price {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
        }

        /* === ফুটার - রেসপনসিভ === */
        footer {
            background: var(--primary-dark);
            color: white;
            padding: 40px 0 20px;
            margin-top: 50px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        .footer-links h4 {
            font-size: 1rem;
            margin-bottom: 15px;
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 8px;
            font-size: 0.85rem;
        }

        .footer-links a {
            color: var(--gray-300);
            text-decoration: none;
        }

        .copyright {
            text-align: center;
            padding-top: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.8rem;
        }

        /* === টোস্ট মেসেজ - মোবাইল ফ্রেন্ডলি === */
        .message-center {
            position: fixed;
            bottom: 15px;
            right: 15px;
            left: 15px;
            max-width: 350px;
            margin: 0 auto;
            z-index: 9999;
            pointer-events: none;
        }

        .toast {
            background: white;
            padding: 12px 20px;
            border-radius: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            border-left: 4px solid var(--success);
            font-size: 0.9rem;
            animation: slideIn 0.3s ease;
            pointer-events: auto;
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* === মিডিয়া ক্যোয়ারী - বিভিন্ন ডিভাইস === */
        @media (max-width: 992px) {
            .nav-links {
                display: none;
            }

            .mobile-menu-btn {
                display: block;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 15px;
            }

            .details-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .main-image {
                max-height: 350px;
            }

            .price-row {
                grid-template-columns: 1fr;
            }

            .moq-info {
                grid-template-columns: 1fr;
            }

            .action-buttons {
                grid-template-columns: 1fr;
            }

            .review-summary {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .breadcrumb {
                font-size: 0.8rem;
            }

            .product-details {
                padding: 15px;
            }

            .nav-buttons .btn-outline,
            .nav-buttons .btn-primary {
                padding: 5px 12px;
                font-size: 0.8rem;
            }
        }

        @media (max-width: 480px) {
            .logo-text h2 {
                font-size: 1rem;
            }

            .logo-icon {
                width: 30px;
                height: 30px;
                font-size: 1rem;
            }

            .supplier-info {
                flex-direction: column;
                align-items: flex-start;
            }

            .badge-large,
            .badge-verified {
                font-size: 0.75rem;
                padding: 4px 10px;
            }

            .thumbnail-grid {
                gap: 5px;
            }

            .related-grid {
                grid-template-columns: 1fr;
            }

            .message-center {
                left: 10px;
                right: 10px;
                max-width: none;
            }

            .features-mini {
                flex-direction: column;
                gap: 8px;
            }
        }

        /* ছোট ডিভাইসে টেবিল স্ক্রল */
        @media (max-width: 500px) {
            .specs-table td {
                font-size: 0.8rem;
                padding: 10px 5px;
            }

            .specs-table td:first-child {
                width: 110px;
            }
        }
    </style>
</head>

<body>
    <!-- নেভিগেশন -->
    <nav class="main-nav">
        <div class="container nav-container">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <div class="logo-text">
                    <h2>BizConnect</h2>
                </div>
            </div>

            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>

            <div class="nav-menu">
                <div class="nav-links">
                    <a href="{{url('/')}}">হোম</a>
                    <a href="#">পণ্যসমূহ</a>
                    <a href="#">অর্ডার</a>
                </div>
                <div class="nav-buttons">
                    <a href="{{ route('init.login') }}" class="btn-outline">লগইন</a>
                    <a href="{{ route('init.reg') }}" class="btn-primary">রেজিস্টার</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        @php
        $firstProduct = $products->first();
        @endphp
        <!-- পণ্য বিবরণ -->
        <div class="product-details">
            <div class="details-grid">
                <!-- ইমেজ গ্যালারি -->
                <div class="image-gallery">
                    <div class="main-image">
                        <div class="badge-verified" id="verifiedBadge" style="display: {{ $firstProduct->status == 1 ? 'block' : 'none' }}; ">ভেরিফাইড</div>
                        <i class="fas fa-clock"></i>
                    </div>

                </div>

                <!-- পণ্যের তথ্য -->
                <div class="product-info">
                    <h1 id="productName">{{ $firstProduct->name }}</h1>

                    <div class="supplier-info">
                        <div class="supplier-badge">
                            <i class="fas fa-store"></i>
                            <span><strong id="supplierName">{{ $firstProduct->seller->company }}</strong></span>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>(১২৮ রিভিউ)</span>
                        </div>
                    </div>

                    <!-- প্রাইসিং -->
                    <div class="pricing-card">
                        <div class="price-row">
                            <div class="price-box">
                                <div class="label">একক মূল্য</div>
                                <div class="value" id="productPrice">${{ number_format($firstProduct->price, 2) }}</div>
                                <div class="unit">/পিস</div>
                            </div>
                            <div class="price-box wholesale-box">
                                <div class="label">পাইকারি (১০০+)</div>
                                <div class="value" id="wholesalePrice">${{ number_format($firstProduct->price * 0.97, 2) }}</div>
                                <div class="unit">/পিস</div>
                            </div>
                            <div class="price-box">
                                <div class="label">বাল্ক (৫০০+)</div>
                                <div class="value" id="bulkPrice">${{ number_format($firstProduct->price * 0.93, 2) }}</div>
                                <div class="unit">/পিস</div>
                            </div>
                        </div>

                        <div class="moq-info">
                            <div class="moq-item">
                                <i class="fas fa-boxes"></i>
                                <div>
                                    <strong>ন্যূনতম অর্ডার</strong><br>
                                    <span style="color: var(--primary);" id="productMoq">{{ $firstProduct->moq }} পিস</span>
                                </div>
                            </div>
                            <div class="moq-item">
                                <i class="fas fa-truck"></i>
                                <div>
                                    <strong>ডেলিভারি</strong><br>
                                    <span>১৫-২০ দিন</span>
                                </div>
                            </div>
                            <div class="stock-status">
                                <i class="fas fa-check-circle"></i>
                                <span>স্টকে (<span id="productQuantity">{{ $firstProduct->quantity }}</span> পিস)</span>
                            </div>
                        </div>

                        <div class="action-buttons">
                            <button class="btn-buy">অর্ডার করুন</button>
                            <button class="btn-quote-large">কোটেশন অনুরোধ</button>
                        </div>

                        <div class="features-mini">
                            <span><i class="fas fa-shield-alt"></i> নিরাপদ লেনদেন</span>
                            <span><i class="fas fa-undo"></i> ৭ দিন রিটার্ন</span>
                            <span><i class="fas fa-warranty"></i> ১ বছর ওয়ারেন্টি</span>
                        </div>
                    </div>


                </div>
            </div>

        </div>

        <!-- সম্পর্কিত পণ্য -->
        <div class="related-products">
            <div class="section-header">
                <h2>আপনার জন্য আরও পণ্য</h2>
                <a href="#" style="color: var(--primary);">সব দেখুন →</a>
            </div>

            <div class="related-grid">
                @foreach($products as $p)
                <div class="related-card"
                    data-name="{{$p->name}}"
                    data-supplier='{{$p->seller->company}}'
                    data-price="{{$p->price}}"
                    data-moqu="{{$p->moq}}"
                    data-quantity="{{$p->quantity}}"
                    data-status="{{$p->status}}">
                    <div class="related-image">
                        <i class="fas fa-headphones"></i>
                    </div>
                    <h4>{{$p->name}}</h4>
                    <div class="related-price"><span>${{$p->price}}</span><span>MOQ: {{$p->moq}}</span></div>
                    @if($p->status == 1)
                    <div class="text-center">
                        <span class="badge bg-primary">ভেরিফাইড</span>
                    </div>
                    @else
                    <div></div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <footer>
        <div class="container footer-grid">
            <div class="footer-links">
                <h4>কুইক লিংক</h4>
                <ul>
                    <li><a href="#">আমাদের সম্পর্কে</a></li>
                    <li><a href="#">সরবরাহকারী</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>সাপোর্ট</h4>
                <ul>
                    <li><a href="#">হেল্প সেন্টার</a></li>
                    <li><a href="#">প্রাইভেসি</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>যোগাযোগ</h4>
                <ul>
                    <li>ঢাকা, বাংলাদেশ</li>
                    <li>+৮৮০ ১৯৬৬-৭৭৮৮১১</li>
                </ul>
            </div>
        </div>
        <div class="container copyright">
            <p>© ২০২৬ BizConnect Pro</p>
        </div>
    </footer>

    <div class="message-center" id="messageCenter"></div>

    <script>
        function showToast(message) {
            const center = document.getElementById('messageCenter');
            const toast = document.createElement('div');
            toast.className = 'toast';
            toast.innerHTML = `<i class="fas fa-check-circle" style="color: #2e7d32;"></i><span>${message}</span>`;
            center.appendChild(toast);
            setTimeout(() => toast.remove(), 3000);
        }

        // ট্যাব
        document.querySelectorAll('.tab-header').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.tab-header').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                document.querySelectorAll('.tab-pane').forEach(p => p.classList.remove('active'));
                document.getElementById(this.dataset.tab).classList.add('active');
            });
        });

        // থাম্বনেইল
        document.querySelectorAll('.thumbnail').forEach((thumb, i) => {
            thumb.addEventListener('click', function() {
                document.querySelectorAll('.thumbnail').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                showToast('ছবি পরিবর্তন করা হয়েছে');
            });
        });

        // বাটন
        document.querySelector('.btn-buy')?.addEventListener('click', () => showToast('অর্ডার প্রক্রিয়া শুরু হয়েছে'));
        document.querySelector('.btn-quote-large')?.addEventListener('click', () => showToast('কোটেশন অনুরোধ পাঠানো হয়েছে'));
        document.querySelectorAll('.related-card').forEach(card => {
            card.addEventListener('click', function() {
                const name = this.dataset.name;
                const supplier = this.dataset.supplier;
                const price = parseFloat(this.dataset.price);
                const moq = this.dataset.moqu;
                const quantity = this.dataset.quantity;
                const status = parseInt(this.dataset.status);

                // Update product info
                document.getElementById('productName').innerText = name;
                document.getElementById('supplierName').innerText = supplier;
                document.getElementById('productPrice').innerText = '$' + price.toFixed(2);

                const wholesalePrice = (price * 0.97).toFixed(2);
                const bulkPrice = (price * 0.93).toFixed(2);
                document.getElementById('wholesalePrice').innerText = '$' + wholesalePrice;
                document.getElementById('bulkPrice').innerText = '$' + bulkPrice;

                document.getElementById('productMoq').innerText = moq + ' পিস';
                document.getElementById('productQuantity').innerText = quantity;

                const badge = document.getElementById('verifiedBadge');
                badge.style.display = (status === 1) ? 'block' : 'none';

                showToast('পণ্য পরিবর্তন হয়েছে');

                // Scroll fix
                window.scrollTo({
                    top: document.querySelector('.product-details').offsetTop - 100,
                    behavior: 'smooth'
                });
            });
        });

        // মোবাইল মেনু
        document.querySelector('.mobile-menu-btn')?.addEventListener('click', function() {
            const menu = document.querySelector('.nav-menu');
            menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
        });
    </script>
</body>

</html>