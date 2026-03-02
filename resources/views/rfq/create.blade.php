<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <title>কোটেশন অনুরোধ | BizConnect Pro</title>
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

        /* === নেভিগেশন - আপনার দেওয়া স্টাইল === */
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
            margin: 0;
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
            gap: 30px;
        }

        .nav-links {
            display: flex;
            gap: 25px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--gray-800);
            font-weight: 600;
            font-size: 0.95rem;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: var(--accent);
        }

        .nav-links a.active {
            color: var(--primary);
            border-bottom: 2px solid var(--accent);
            padding-bottom: 3px;
        }

        .nav-buttons {
            display: flex;
            gap: 10px;
        }

        .btn-outline {
            border: 2px solid var(--primary);
            background: transparent;
            color: var(--primary);
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: 0.3s;
        }

        .btn-outline:hover {
            background: var(--primary);
            color: white;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            border: none;
            padding: 8px 24px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        /* === কোটেশন ফর্ম স্টাইল === */
        .rfq-section {
            margin: 40px 0;
        }

        .rfq-card {
            background: white;
            border-radius: 30px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .rfq-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .rfq-header h1 {
            font-size: 2.2rem;
            color: var(--primary);
            font-weight: 800;
            margin-bottom: 10px;
        }

        .rfq-header p {
            color: var(--gray-600);
            font-size: 1.1rem;
        }

        .rfq-header i {
            font-size: 3rem;
            color: var(--accent);
            margin-bottom: 15px;
        }

        /* ফর্ম গ্রুপ */
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 5px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--gray-800);
            font-size: 0.95rem;
        }

        .required-star {
            color: var(--danger);
            margin-left: 3px;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon {
            position: absolute;
            left: 15px;
            color: var(--gray-400);
            font-size: 1.1rem;
        }

        .input-wrapper input,
        .input-wrapper select,
        .input-wrapper textarea {
            width: 100%;
            padding: 14px 15px 14px 48px;
            border: 2px solid var(--gray-200);
            border-radius: 20px;
            font-size: 0.95rem;
            transition: 0.3s;
            background: white;
        }

        .input-wrapper input:focus,
        .input-wrapper select:focus,
        .input-wrapper textarea:focus {
            border-color: var(--accent);
            outline: none;
            box-shadow: 0 0 0 4px rgba(246, 184, 62, 0.1);
        }

        .input-wrapper textarea {
            resize: vertical;
            min-height: 120px;
        }

        /* ফাইল আপলোড */
        .file-upload-area {
            border: 2px dashed var(--gray-300);
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            margin: 25px 0;
            background: var(--gray-50);
        }

        .file-upload-area i {
            font-size: 2.5rem;
            color: var(--accent);
            margin-bottom: 10px;
        }

        .file-upload-area h4 {
            color: var(--primary);
            margin-bottom: 5px;
        }

        .file-upload-area p {
            color: var(--gray-600);
            font-size: 0.9rem;
        }

        .file-input-label {
            display: inline-block;
            background: var(--primary);
            color: white;
            padding: 10px 25px;
            border-radius: 30px;
            margin-top: 15px;
            cursor: pointer;
            font-weight: 600;
        }

        /* চেকবক্স গ্রুপ */
        .checkbox-group {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin: 20px 0;
        }

        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .checkbox-item input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: var(--primary);
        }

        /* টার্মস */
        .terms-group {
            margin: 25px 0;
        }

        .terms-checkbox {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .terms-checkbox input[type="checkbox"] {
            width: 18px;
            height: 18px;
            margin-top: 3px;
            accent-color: var(--primary);
        }

        .terms-checkbox label {
            color: var(--gray-600);
            font-size: 0.95rem;
        }

        .terms-checkbox a {
            color: var(--accent);
            font-weight: 600;
            text-decoration: none;
        }

        /* বাটন গ্রুপ */
        .form-buttons {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 15px;
            margin-top: 30px;
        }

        .btn-cancel {
            background: var(--gray-200);
            color: var(--gray-700);
            border: none;
            padding: 16px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
        }

        .btn-submit {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white;
            border: none;
            padding: 16px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, var(--primary-light), var(--primary));
            transform: translateY(-2px);
        }

        /* ফুটার - আপনার দেওয়া স্টাইল */
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

        /* রেসপনসিভ */
        @media (max-width: 992px) {
            .nav-links {
                display: none;
            }

            .mobile-menu-btn {
                display: block;
            }

            .nav-menu {
                display: none;
                position: absolute;
                top: 70px;
                left: 0;
                right: 0;
                background: white;
                padding: 20px;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
                flex-direction: column;
                gap: 20px;
            }

            .nav-menu.show {
                display: flex;
            }

            .nav-links {
                display: flex;
                flex-direction: column;
                width: 100%;
            }

            .nav-buttons {
                width: 100%;
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .rfq-card {
                padding: 25px;
            }

            .form-row {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .form-buttons {
                grid-template-columns: 1fr;
            }

            .checkbox-group {
                grid-template-columns: 1fr;
            }

            .rfq-header h1 {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 480px) {
            .rfq-card {
                padding: 20px;
            }

            .file-upload-area {
                padding: 20px;
            }

            .file-upload-area i {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <!-- নেভিগেশন - আপনার দেওয়া স্টাইল -->
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

            <div class="mobile-menu-btn" onclick="toggleMobileMenu()">
                <i class="fas fa-bars"></i>
            </div>

            <div class="nav-menu" id="navMenu">
                <div class="nav-links">
                    <a href="{{ url('/') }}">হোম</a>
                    <a href="#">পণ্যসমূহ</a>
                    <a href="#">অর্ডার</a>
                    <a href="#" class="active">কোটেশন অনুরোধ</a>
                </div>
                <div class="nav-buttons">
                    <a href="{{ url('buyer/dashboard') }}" class="btn btn-primary">
                        ড্যাশবোর্ড
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- কোটেশন অনুরোধ ফর্ম -->
    <div class="container">
        <div class="rfq-section">
            <div class="rfq-card">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="rfq-header">
                    <i class="fas fa-file-invoice"></i>
                    <h1>কোটেশন অনুরোধ ফর্ম</h1>
                    <p>আপনার প্রয়োজনীয় পণ্যের বিস্তারিত তথ্য দিন</p>
                </div>

                <form action="{{ route('rfq.submit') }}" method="POST">
                    @csrf

                    <!-- পণ্যের তথ্য -->
                    <div class="form-row">
                        <div class="form-group">
                            <label>পণ্যের নাম <span class="required-star">*</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-box input-icon"></i>

                                <input type="text"
                                    name="product_name"
                                    value="{{ $product->name }}"
                                    readonly>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="buyer_id" value="{{ $buyer->id }}">

                    <!-- পরিমাণ ও ইউনিট -->
                    <div class="form-row">
                        <div class="form-group">
                            <label>প্রয়োজনীয় পরিমাণ <span class="required-star">*</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-calculator input-icon"></i>
                                <input type="number" name="quantity" placeholder="যেমন: ১০০" required>
                            </div>
                        </div>
                    </div>

                    <!-- টার্গেট মূল্য ও ডেলিভারি -->
                    <div class="form-row">
                        <div class="form-group">
                            <label>টার্গেট মূল্য ($)</label>
                            <div class="input-wrapper">
                                <i class="fas fa-dollar-sign input-icon"></i>
                                <input type="number" name="target_price" placeholder="আপনার প্রত্যাশিত মূল্য" step="0.01">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>পছন্দের ডেলিভারি তারিখ</label>
                            <div class="input-wrapper">
                                <i class="fas fa-calendar input-icon"></i>
                                <input type="date" name="delivery_date">
                            </div>
                        </div>
                    </div>

                    <!-- ক্রেতার তথ্য -->
                    <div class="form-row">
                        <div class="form-group">
                            <label>আপনার নাম </label>
                            <div class="input-wrapper">
                                <i class="fas fa-user input-icon"></i>
                                <input type="text" name="buyer_name" placeholder="আপনার নাম" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>কোম্পানির নাম <span class="required-star">*</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-building input-icon"></i>

                                <input type="text" name="company"
                                    value="{{ $buyer->company }}"
                                    readonly>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>ইমেইল ঠিকানা <span class="required-star">*</span></label>
                    <div class="input-wrapper">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" name="email"
                            value="{{ $buyer->email }}"
                            readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label>মোবাইল নম্বর <span class="required-star">*</span></label>
                    <div class="input-wrapper">
                        <i class="fas fa-phone-alt input-icon"></i>
                        <input type="text" value="{{ $buyer->contact }}" name="contact"
                            readonly>
                    </div>
                </div>
            </div>

            <!-- বিস্তারিত বার্তা -->
            <div class="form-group">
                <label>বিস্তারিত বিবরণ / স্পেসিফিকেশন</label>
                <div class="input-wrapper">
                    <i class="fas fa-comment input-icon"></i>
                    <textarea name="message" placeholder="পণ্যের বিস্তারিত তথ্য লিখুন... যেমন: সাইজ, কালার, কোয়ালিটি, সার্টিফিকেশন ইত্যাদি"></textarea>
                </div>
            </div>

            <!-- অতিরিক্ত প্রয়োজনীয়তা -->
            <div class="checkbox-group">
                <label class="checkbox-item">
                    <input type="checkbox" name="samples" value="1"> <span>নমুনা প্রয়োজন</span>
                </label>
                <label class="checkbox-item">
                    <input type="checkbox" name="certification" value="1"> <span>সার্টিফিকেট প্রয়োজন</span>
                </label>
                <label class="checkbox-item">
                    <input type="checkbox" name="custom_packaging" value="1"> <span>কাস্টম প্যাকেজিং</span>
                </label>
                <label class="checkbox-item">
                    <input type="checkbox" name="private_label" value="1"> <span>প্রাইভেট লেবেল</span>
                </label>
            </div>

            <!-- বাটন -->
            <div class="form-buttons">
                <a href="{{ url('/') }}" class="btn-cancel">বাতিল করুন</a>
                <button type="submit" class="btn-submit">
                    <span>কোটেশন অনুরোধ পাঠান</span>
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
            </form>
        </div>
    </div>
    </div>

    <!-- ফুটার -->
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

    <script>
        // মোবাইল মেনু টগল
        function toggleMobileMenu() {
            const menu = document.getElementById('navMenu');
            menu.classList.toggle('show');
        }

        // উইন্ডো রিসাইজ হলে মেনু বন্ধ
        window.addEventListener('resize', function() {
            if (window.innerWidth > 992) {
                document.getElementById('navMenu').classList.remove('show');
            }
        });

        // ডকুমেন্টে ক্লিক করলে মেনু বন্ধ
        document.addEventListener('click', function(event) {
            const menu = document.getElementById('navMenu');
            const btn = document.querySelector('.mobile-menu-btn');

            if (menu && btn && !menu.contains(event.target) && !btn.contains(event.target)) {
                menu.classList.remove('show');
            }
        });

        // ফাইল নাম দেখানোর জন্য
        document.querySelector('.file-input-label input').addEventListener('change', function(e) {
            const files = Array.from(e.target.files).map(f => f.name).join(', ');
            if (files) {
                alert('সিলেক্ট করা ফাইল: ' + files);
            }
        });
    </script>
</body>

</html>